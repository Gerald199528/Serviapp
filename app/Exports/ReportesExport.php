<?php

namespace App\Exports;

use App\Reportes;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
class ReportesExport implements FromCollection, WithHeadings
{
    protected $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function collection()
    {
        return Reportes::with('category', 'subcategory', 'tipo', 'user', 'datos')
            ->where('id', $this->id)
            ->get()
            ->map(function ($reporte) {
                return [
                    $reporte->datos->cedula,
                    $reporte->user->name,
                    $reporte->user->apellido,
                    $reporte->user->email,
                    $reporte->category_id,
                    $reporte->subcategory_id,
                    $reporte->tipo_id,
                    $reporte->detalle,
                    $reporte->municipio,
                    $reporte->parroquia,
                    $reporte->latitude,
                    $reporte->longitude,
                    $reporte->direccion,
                    $reporte->estatus
                ];
            });
    }

    

    public function headings(): array
    {
        return [
            "Cedula",
            "Nombre del Usuario",
            "Apellido del Usuario",
            "Email",
            "Nombre del Reporte",
            "Categoría del Reporte",
            "Tipo de Problema",
            "Detalle",
            "Municipio",
            "Parroquia",
            "Latitude",
            "Longitude",
            "Direccion"
        ];
    }
}
