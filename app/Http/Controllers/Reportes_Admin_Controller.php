<?php

namespace App\Http\Controllers;

use App\Reportes;
use App\User;
use App\Datos;
use Illuminate\Http\Request;

class Reportes_Admin_Controller extends Controller
{
    // Método para mostrar todos los reportes
    public function index()
    {
        $list_reportes = Reportes::all();
        $users = User::all();
        $datos = Datos::all();
        return view('admin.list_reportes_admin.index', compact('list_reportes', 'users', 'datos'));
    }
  
}
