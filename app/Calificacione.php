<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Calificacione extends Model
{
    public function tienda()
    {
        return $this->belongsTo('App\Tienda');
    }
}
