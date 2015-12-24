<?php

namespace DHI;

use Illuminate\Database\Eloquent\Model;

class UserWallet extends Model
{
    protected $fillable = ['user_id', 'activation', 'commission', 'auction', 'utilities', 'balance','responsible_id'];

    // relationes
    public function user()
    {
        return $this->belongsTo('DHI\User');
    }
    // fin relaciones
}
