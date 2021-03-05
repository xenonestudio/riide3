<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class CategoriaTienda extends Model
{
    protected $table = 'categoria_tienda';

    public function user()
    {
        return $this->belongsTo('App\Categoria');
    }

    public function categoria()
    {
        return $this->belongsTo('App\Categoria');
    }

    public function tienda()
    {
        return $this->belongsTo('App\Tienda');
    }
}
