<?php

namespace DHI;

use Illuminate\Database\Eloquent\Model;

/**
 * DHI\Auction
 *
 * @property-read \DHI\Item $item
 * @property integer $id
 * @property integer $item_id
 * @property float $pool
 * @property float $price
 * @property integer $time
 * @property string $time_start
 * @property string $time_end
 * @property float $bid
 * @property string $status
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class Auction extends Model
{
    protected $fillable = ['item_id', 'pool', 'price', 'time', 'time_start', 'time_end', 'status', 'bid'];

    // relaciones
    public function item()
    {
        return $this->belongsTo('DHI\Item');
    }

    public function user()
    {
        return $this->belongsTo('DHI\User')->withPivot('user_auctions', 'status');
    }
    // fin relaciones
}
