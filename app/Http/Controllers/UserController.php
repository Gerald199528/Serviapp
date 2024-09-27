<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\User\UpdateRequest;
use Illuminate\Support\Facades\Auth;
use App\User;
class UserController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $user = Auth::user();
            return view('admin.user.index', compact('user'));
        } else {
            // Redirige al usuario a la página de inicio de sesión
            return redirect('login');
        }
    }

    public function show(User $user)
    {
        return view('admin.user.show', compact('user'));
    }

    public function edit()
    {
        return view('admin.user.edit', compact('users'));

    }


    public function update(UpdateRequest $request, User $user)
    {

        $user->update($request->all());
        return back()->with('use','User deleted successfully');

    }



}







