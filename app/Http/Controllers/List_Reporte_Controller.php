<?php

namespace App\Http\Controllers;

use App\User; // Asegúrate de importar la clase User
use App\Reportes;
use App\Datos;
use App\Category;
use App\Subcategory;
use App\Tipo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;

class List_Reporte_Controller extends Controller
{
    public function index()
    {
        $user_id = Auth::id();
        $list_reportes = Reportes::where('user_id', $user_id)->get();
        $reportes = Reportes::all();
        $categories = Category::all();
        $subcategories = Subcategory::all();
        $tipos = Tipo::all();
        return view('admin.list_reportes.index', compact('list_reportes', 'categories', 'subcategories', 'tipos'));
    }
    public function pdf($id)
    {
        $user_id = $id;
        $user = User::find($user_id); // Obtiene el usuario
        $list_pdf = Reportes::with('datos')->where('user_id', $user_id)->paginate(); // Carga la relación 'datos' al recuperar los reportes
        $pdf = Pdf::loadView('admin.reporte-pdf.pdf', compact('list_pdf', 'user')) // Pasa el usuario a la vista
            ->setPaper('A4', 'landscape')->setOptions(['margin_right' => 15, 'margin_left' => 15]);
        return $pdf->download('Serviapp_Reporte.pdf');
    }
    
    
}
