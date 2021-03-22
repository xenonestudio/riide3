<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class OrdenesProducto extends Model
{
    public function tienda()
    {
        return $this->belongsTo('App\Tienda');
    }
}
