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

}
