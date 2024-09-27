<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datos extends Model
{
    protected $fillable = [
'id',
        'cedula',
        'carnet',
        'edad',
        'telefono'




    ];

    public function user(){

        return $this->belongsTo('App\User');


    }
}
