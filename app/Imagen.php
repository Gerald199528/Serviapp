<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    protected $fillable = [
        'id',
        'url'


    ];

    public function user(){

        return $this->belongsTo('App\User');


    }
}
