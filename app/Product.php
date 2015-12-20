<?php

namespace DHI;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'image', 'price', 'description'];

    // relaciones
    public function users()
    {
        return $this->hasMany('DHI\User');
    }

    public function trees()
    {
        return $this->hasMany('DHI\UserTree');
    }
    // fin relaciones
}
