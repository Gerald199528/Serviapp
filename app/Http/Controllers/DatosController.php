<?php

namespace App\Http\Controllers;
use App\Datos;
use App\Http\Requests\Datos\UpdateRequest;
use Illuminate\Support\MessageBag;
use Illuminate\Http\Request;
use App\Rules\CedulaRule;
use App\Rules\TelefonoRule;
use App\Rules\EdadRule;
use App\Rules\CarnetRule;

class DatosController extends Controller
{

    public function index()
    {
    $datos = Datos::all();
    return view('admin.user.index', compact('datos'));

    }

    public function create()
    {
        return view('admin.user.create');
    }


    public function Store(Request $request)
    {
        $valida = $request->validate([
            'id' => ['required', 'max:2', 'unique:datos,id'],
            'cedula' => ['required', new CedulaRule, 'unique:datos,cedula'],
            'telefono' => ['required', new TelefonoRule],
            'edad' => ['required', new EdadRule],
            'carnet' => ['nullable', new CarnetRule],
        ], [
            'unique' => 'Estimado usuario, ya existe un registro con estos campos.',
        ]);
    
        // Verificar si el campo 'carnet' est  vac o y asignar un valor predeterminado si es necesario
        if (empty($request->carnet)) {
            $request->merge(['carnet' => null]); // Asignar valor nulo
        }
    
        Datos::create($request->all());
        return back()->with('success', 'Usuario creado exitosamente');
    }

    public function update(UpdateRequest $request, Datos $dato)
       {
        $dato->update($request->all());
        return back()->with('success','User delete successfully');
    }


}



