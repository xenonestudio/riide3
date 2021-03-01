<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Producto extends Model
{
    public function categorias()
    {
        return $this->belongsToMany('App\Categoria');
    }
}
