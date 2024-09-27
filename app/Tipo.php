<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    protected $fillable = ['subcategories_id', 'nombre'];

    public function subcategories()
{
    return $this->belongsTo(Subcategories::class);
}

}
