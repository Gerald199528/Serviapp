<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\User\PassRequest;

use App\User;
class PassController extends Controller
{
    public function index()
    {
    $pass = User::all();
        return view('admin.user.index', compact('pass'));
    }

    public function show(User $pass)
    {
        return view('admin.user.show', compact('pass'));
    }

    public function edit()
    {
        return view('admin.user.edit', compact('pass'));

    }


    public function update(PassRequest $request, User $pass)
    {

        $pass->update($request->all());
        return back()->with('use','User deleted successfully');

    }


}



