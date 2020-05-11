<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    public function categoria()
    {
        return $this->hasMany('App\Categoria');
    }
}
