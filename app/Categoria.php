<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public function imagenes()
    {
        return $this->belongsTo('App\Imagen');
    }
}
