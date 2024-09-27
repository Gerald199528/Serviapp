<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Datos;
use App\Reportes;

class ListController extends Controller
{
    public function index()
    {
        $user = User::all();
        $datos = Datos::all();
        
        // Verificar si el usuario tiene el privilegio "super_administrador"
        if (auth()->user()->privilegio !== 'super_administrador') {
            abort(403, 'Acceso denegado');
        }
        
        $currentUser = auth()->user();
        $filteredUsers = $user->reject(function ($u) use ($currentUser) {
            return $u->id === $currentUser->id;
        });
        
        return view('admin.list_user.index', compact('filteredUsers', 'datos'));
    }
    
    public function update(UpdateRequest $request, Datos $user)
    {
        $user->update($request->all());
        return back()->with('success','User update successfully');
    }

    public function destroy($user)
    {
        $user = User::find($user);
        // Eliminar registros relacionados en la tabla "reportes"
        \DB::table('reportes')->where('datos_id', $user->id)->delete();
        // Eliminar el usuario de la tabla "users"
        if ($user->privilegio === 'super_administrador') {
            return back()->with('error', 'No se puede eliminar al super administrador');
        }
        $user->delete();
        return back()->with('warning', 'Usuario eliminado correctamente');
    }
}