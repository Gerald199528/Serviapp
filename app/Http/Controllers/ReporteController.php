<?php
namespace App\Http\Controllers;

use App\Reportes;
use App\Category;
use App\Subcategory;
use App\Tipo;
use Illuminate\Http\Request;

class ReporteController extends Controller
{
    public function index()
    {
        
        $reportes = Reportes::all();
        $categories = Category::all();
        $subcategories = Subcategory::all();
        $tipos = Tipo::all();
        return view('admin.reporte.index', compact('reportes', 'categories', 'subcategories', 'tipos'));
    }
    public function create()
    {
        return view('admin.reporte.create');
    }

    public function store(Request $request)
    {
        $user_id = $request->input('user_id');

        $existingReport = Reportes::where('user_id', $user_id)->first();
        if ($existingReport) {
            return back()->with('error', 'Ya existe un reporte generado.');
        }

        $valida = $request->validate([
            'category_id' => ['required', 'min:3'],
            'subcategory_id' => ['required', 'min:3'],
            'tipo_id' => ['required', 'min:3'],
            'user_id' => ['exists:users,id'],
            'datos_id' => ['exists:datos,id'],
            'detalle' => ['required', 'min:3'],
            'municipio' => ['required', 'min:3'],
            'parroquia' => ['required', 'min:3'],
            'latitude' => ['required', 'min:3'],
            'longitude' => ['required', 'min:3'],
            'direccion' => ['required', 'min:3'],
        ]);

        Reportes::create($request->all());
        return back()->with('success', 'Reporte creado exitosamente');
    }

    public function destroy(Reportes $reporte)
    {
        $reporte->delete();
        return back()->with('success', 'Reporte eliminado correctamente');
    }

    public function update(Request $request, Reportes $reporte)
    {
        $request->validate([
            'estatus' => [
                'required',
                'in:procesado,cancelado',
            ],
        ]);

        $reporte->update([
            'estatus' => $request->estatus
        ]);

        $message = ($request->estatus === 'procesado') ? 'Reporte Procesado Exitosamente' : 'Reporte Cancelado';

        return back()->with('success', $message);
    }



}
