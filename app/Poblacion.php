<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poblacion extends Model
{
    public function producto()
    {
        return $this->hasMany('App\Producto');
    }
    public function tanatorio()
    {
        return $this->hasMany('App\Tanatorio');
    }
}
