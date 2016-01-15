<?php

namespace DHI;

use Illuminate\Database\Eloquent\Model;

class Movement extends Model
{
    protected $fillable = ['name', 'type', 'class', 'status'];

    // relaciones
    public function user_movements()
    {
        return $this->hasMany('DHI\UserMovement');
    }
    // fin relaciones
}
