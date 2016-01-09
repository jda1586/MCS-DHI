<?php

namespace DHI;

use Illuminate\Database\Eloquent\Model;

/**
 * DHI\BitcoinAccount
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $name
 * @property string $number_account
 * @property string $status
 * @property float $balance_in
 * @property float $balance_out
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \DHI\User $user
 */
class BitcoinAccount extends Model
{
    protected $fillable = ['user_id', 'name', 'number_account', 'status', 'balance_in', 'balance_out'];

    // relaciones
    public function user()
    {
        return $this->belongsTo('DHI\User');
    }
    // fin relaciones
}
