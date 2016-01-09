<?php

namespace DHI;

use Illuminate\Database\Eloquent\Model;

/**
 * DHI\UserPayment
 *
 * @property integer $id
 * @property integer $user_id
 * @property float $amount
 * @property integer $product_id
 * @property integer $sponsor_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \DHI\User $user
 * @property-read \DHI\User $sponsor
 */
class UserPayment extends Model
{
    protected $fillable = ['user_id', 'amount', 'product_id', 'sponsor_id'];

    // relaciones
    public function user()
    {
        return $this->belongsTo('DHI\User');
    }

    public function sponsor()
    {
        return $this->belongsTo('DHI\User', 'sponsor_id');
    }
    // fin relaciones
}
