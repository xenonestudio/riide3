<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Cartelera extends Model
{
    protected $table = 'carteleras';

    public function pancartas()
    {
        return $this->belongsToMany('App\Pancarta');
    }
}
