<?php

namespace App\Http\Controllers;

use App\User;
use App\Reportes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $userCount = User::count();
        $user = Auth::user();
        $reportCount = Reportes::where('user_id', $user->id)->count();
        
        // Actualizar la columna "ultima_conexion"
        $user->ultima_conexion = now();
        $user->save();
        
        $charts = Reportes::select(DB::raw("COUNT(*) as count"), DB::raw("MONTH(created_at) as month"))
            ->whereYear('created_at', date('Y'))
            ->groupBy('month')
            ->orderBy('month')
            ->pluck('count', 'month')
            ->toArray();
        
        // Asegurarse de que todos los meses estén presentes en los datos
        for ($i = 1; $i <= 12; $i++) {
            if (!isset($charts[$i])) {
                $charts[$i] = 0;
            }
        }
        
        // Ordenar los datos por mes
        ksort($charts);
        
  
  
        $showAlert = true; // Variable para indicar si se debe mostrar la alerta

        return view('home.index', compact('userCount', 'reportCount', 'charts', 'showAlert'));
    }
}