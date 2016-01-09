<?php

namespace DHI;

use Illuminate\Database\Eloquent\Model;

class UserCashoutLog extends Model
{
    protected $fillable = ['cashout_id', 'status', 'note', 'responsible_id'];

    // relaciones
    public function cashout()
    {
        return $this->belongsTo('DHI\UserCashout', 'cashout_id');
    }

    public function responsible()
    {
        return $this->belongsTo('DHI\User', 'responsible_id');
    }
    // fin relaciones
}
