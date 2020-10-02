<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    function sales()
    {
        return $this->hasMany(sale::class);
    }
}
