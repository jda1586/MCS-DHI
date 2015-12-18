<?php

namespace DHI;

use Illuminate\Database\Eloquent\Model;

class UserMovement extends Model
{
    protected $fillable = ['user_id', 'type', 'movement_id', 'from', 'to', 'amount', 'note'];

    // relaciones
    public function user()
    {
        return $this->belongsTo('DHI\User');
    }
    // fin relaciones
}
