<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Tienda extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function productos()
    {
        return $this->hasMany('App\Producto');
    }

    public function categorias()
    {
        return $this->belongsToMany('App\Categoria');
    }

    public function horario()
    {
        return $this->hasMany('App\Horario');
    }

    public function calificacion()
    {
        return $this->hasMany('App\Calificacione');
    }

    public function pancartas()
    {
        return $this->hasMany('App\Pancarta');
    }
}
