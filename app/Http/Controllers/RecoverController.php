<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Password;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use App\Rules\PasswordRule;

class RecoverController extends Controller
{
    public function recover() {
    return view('auth.recuperar');
    }

    function recoverPost(Request $request){
        $request->validate([
            'email'  => "required|email|exists:users",


        ],

        [
         'exists' => 'Estimado usuario el "Email" ingresado no existe en la base de datos. Por favor ingresa los datos correctamente. ',

        ]);


        $token = Str::random(length:64);

        DB::table(table:'password_reset_tokens')->insert([

            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        Mail::send('auth.inicio.emails.reset-password', ['token' => $token], function ($message) use ($request){

            $message->to($request->email);
            $message->subject('Reiniciar Contraseña');
        });

        return redirect()->to(route(name:"recover.post"))
        ->with('success','User deleted successfully');


    }

   function resetPassword($token){
  return view('auth.reset', compact(var_name:'token'));
   }
   function resetPasswordPost(Request $request){
    $request->validate([
        "email" => "required|email|exists:users,email",
        "password" => ["required", "string", new PasswordRule],
        'password_confirmation' => 'required|same:password'
    ],

    [
     'exists' => 'Estimado usuario el "Email" ingresado no existe en la base de datos.',
     'same' => 'Contraseña no Coiciden',

    ]);

$updatePassword = DB::table(table:'password_reset_tokens')
    ->where([
        "email" => $request->email,
        "token" => $request->token
    ])->first();

    if(!$updatePassword){

        return redirect()->to(route('reset.password'))->with("error", "Invalid");

    }

    User::where("email", $request->email)
    ->update(["password" => Hash::make($request->password)]);

DB::table(table:'password_reset_tokens')->where(["email" => $request->email])->delete();
return redirect()->to(route(name:"logiar.show"))->with("succes", "Password reset succes");



   }

}
