<?php

namespace DHI;

use Illuminate\Database\Eloquent\Model;

class UserDeposit extends Model
{
    protected $fillable = ['user_id','amount', 'image', 'wallet', 'status'];

    // relaciones
    public function user()
    {
        return $this->belongsTo('DHI\User');
    }
    // fin relaciones
}
