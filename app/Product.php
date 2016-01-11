<?php

namespace DHI;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'image', 'price', 'description'];
    protected $casts = [
        'image' => 'json',
        'description' => 'json',
    ];

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
