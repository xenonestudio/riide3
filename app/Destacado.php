<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Destacado extends Model
{
    public function cartelera()
    {
        return $this->belongsTo('App\Cartelera');
    }

    public function categoria()
    {
        return $this->belongsTo('App\Categoria');
    }
}
