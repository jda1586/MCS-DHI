<?php

namespace DHI;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    // relaciones
    public function users()
    {
        return $this->hasMany('DHI\User');
    }
    // fin relaciones
}
