<?php

namespace DHI;

use Illuminate\Database\Eloquent\Model;

/**
 * DHI\UserDeposit
 *
 * @property integer $id
 * @property integer $user_id
 * @property float $amount
 * @property string $image
 * @property string $wallet
 * @property string $status
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \DHI\User $user
 */
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
