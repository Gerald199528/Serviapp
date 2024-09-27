<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reportes extends Model
{
    protected $fillable = [
        'id',
        'category_id',
        'subcategory_id',
        'tipo_id',
        'user_id',
        'datos_id',
        'detalle',
        'municipio',
        'parroquia',
        'latitude',
        'longitude',
        'direccion',
        'estatus',
    ];

     public function category()
     {
         return $this->belongsTo(Category::class);
     }

     public function subcategory()
 {
       return $this->belongsTo(Subcategory::class);
     }

 public function tipo()
     {
        return $this->belongsTo(Tipo::class);
     }

     public function user()
     {
     return $this->belongsTo(User::class);
     }

    public function datos()
     {
     return $this->belongsTo(Datos::class);
    }
}
