<?php

namespace DHI;

use Illuminate\Database\Eloquent\Model;

class UserCashout extends Model
{
    protected $fillable = ['user_id', 'bitcoin_id', 'from', 'amount', 'status', 'note'];

    // relaciones
    public function user()
    {
        return $this->belongsTo('DHI\User');
    }

    public function logs()
    {
        return $this->hasMany('DHI\UserCashoutLog', 'cashout_id');
    }
    // fin relaciones
}
