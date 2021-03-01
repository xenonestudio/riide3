<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Tienda extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function categorias()
    {
        return $this->belongsToMany('App\Categoria');
    }
}
