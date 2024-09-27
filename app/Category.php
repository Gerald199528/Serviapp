<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['nombre', 'descripcion'];

    public function subcategories()
    {
        return $this->hasMany(Subcategories::class);
    }
}
