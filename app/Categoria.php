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

    public function productos()
    {
        return $this->belongsToMany('App\Producto');
    }
}
