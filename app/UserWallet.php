<?php

namespace DHI;

use Illuminate\Database\Eloquent\Model;

class UserWallet extends Model
{
    protected $fillable = ['user_id', 'activation', 'commission', 'auction', 'utillities', 'balance'];

    // relationes
    public function user()
    {
        return $this->belongsTo('DHI\User');
    }
    // fin relaciones
}
