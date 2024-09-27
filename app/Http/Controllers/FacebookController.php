<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\User;


class FacebookController extends Controller
{
  public function redirect() {

    return Socialite::driver('facebook')->redirect();

  }

public function callbackFacebook() {

try{
   $facebookUser = Socialite::driver('facebook')->user();
  $findUser = User::where('facebook_id', $facebookUser->id)->first();

  if($findUser){

    Auth::login($findUser);
    return redirect()->intended('home');

  }else{
    $new_user = User::create([

        'name' =>  $facebookUser->name,
        'email' =>  $facebookUser->email,
        'facebook_id' => $facebookUser->id



    ]);
    Auth::login($user);
    return redirect()->intended('home');
  }

}catch (Exception $e){
dd($e->getMessage());



}


    }



}

