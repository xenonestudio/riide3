<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Categoria extends Model
{
    protected $table = 'categorias';

    public function tiendas()
    {
        return $this->belongsToMany('App\Tienda');
    }
}
