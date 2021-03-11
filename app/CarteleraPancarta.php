<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class CarteleraPancarta extends Model
{
    protected $table = 'cartelera_pancarta';   

    public function pancartas()
    {
        return $this->belongsTo('App\Pancarta');
    }
}
