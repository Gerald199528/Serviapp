<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $fillable = ['nombre', 'categories_id'];

    public function categories()
    {
        return $this->belongsTo(Categories::class);
    }

    public function tipo()
    {
        return $this->hasMany(Tipo::class);
    }


}
