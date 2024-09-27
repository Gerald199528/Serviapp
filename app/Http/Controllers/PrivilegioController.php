<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
class PrivilegioController extends Controller
{
    public function index()
    {
        $privilegio = User::all();
        return view('admin.list_user.index', compact('privilegio'));
    }

    public function update(Request $request, User $privilegio)
    {
        $oldPrivilegio = $privilegio->privilegio; // Guarda el antiguo nivel de privilegio antes de la actualización

        $privilegio->update([
            'privilegio' => $request->privilegio,
        ]);

        $newPrivilegio = $request->privilegio; // Obtén el nuevo nivel de privilegio después de la actualización

        if ($oldPrivilegio === 'usuario' && $newPrivilegio === 'super_administrador') {
            session()->flash('success', 'Usuario subido de nivel a "Administrador"');
        } elseif ($oldPrivilegio === 'super_administrador' && $newPrivilegio === 'usuario') {
            session()->flash('info', 'Nivel de usuario bajado a "Usuario"');
        }

        return back()->with('user', 'User updated successfully');
    }
}