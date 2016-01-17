<?php

namespace DHI;

use Illuminate\Database\Eloquent\Model;

/**
 * DHI\UserCashoutLog
 *
 * @property integer $id
 * @property integer $cashout_id
 * @property string $status
 * @property string $note
 * @property integer $responsible_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \DHI\UserCashout $cashout
 * @property-read \DHI\User $responsible
 */
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
