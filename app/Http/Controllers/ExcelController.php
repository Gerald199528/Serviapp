<?php

namespace App\Http\Controllers;
use App\Reportes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // No olvides importar la fachada Auth en la parte superior de tu archivo
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ReportesExport;

class ExcelController extends Controller
{
    public function index()
    {
        $user_id = Auth::id(); // Obtiene el ID del usuario actualmente autenticado
        $list_reportes = Reportes::where('user_id', $user_id)->get(); // Filtra los reportes por el ID del usuario
        return view('admin.list_reportes.index', compact('list_reportes'));
    }

    public function exportExcel($id)
    {
        return Excel::download(new ReportesExport($id), 'Serviapp_reporte_' . $id . '.xlsx');
    }
}