<?php

namespace DHI;

use Illuminate\Database\Eloquent\Model;

/**
 * DHI\UserMovement
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $type
 * @property integer $movement_id
 * @property string $from
 * @property string $to
 * @property float $amount
 * @property string $note
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \DHI\User $user
 * @property float $balance
 * @property-read \DHI\Movement $movement
 * @property-read \DHI\UserPayment $payment
 */
class UserMovement extends Model
{
    protected $fillable = ['user_id', 'type', 'movement_id', 'from', 'to', 'amount', 'balance', 'note'];
    protected $dates = ['created_at', 'updated_at'];

    // relaciones
    public function user()
    {
        return $this->belongsTo('DHI\User');
    }

    public function movement()
    {
        return $this->belongsTo('DHI\Movement');
    }

    public function payment()
    {
        return $this->hasOne('DHI\UserPayment');

    }
    // fin relaciones
}
