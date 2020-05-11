<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public function poblacion()
    {
        return $this->belongsTo('App\Poblacion');
    }

    public function provincia()
    {
        return $this->belongsTo('App\Provincia');
    }
}
