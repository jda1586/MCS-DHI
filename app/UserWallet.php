<?php

namespace DHI;

use Illuminate\Database\Eloquent\Model;

/**
 * DHI\UserWallet
 *
 * @property integer $id
 * @property integer $user_id
 * @property float $activation
 * @property float $commission
 * @property float $auction
 * @property float $utilities
 * @property float $balance
 * @property integer $responsible_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \DHI\User $user
 */
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
