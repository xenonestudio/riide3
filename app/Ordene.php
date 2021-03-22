<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Ordene extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function tienda()
    {
        return $this->belongsTo('App\Tienda');
    }
}
