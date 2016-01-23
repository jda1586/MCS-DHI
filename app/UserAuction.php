<?php

namespace DHI;

use Illuminate\Database\Eloquent\Model;


class UserAuction extends Model
{
    protected $fillable = [ 'user_id',
                            'auction_id',
                            'status'
                          ];

    // relaciones
    public function auction()
    {
        return $this->belongsToMany('DHI\Auction');
    }

    public function User()
    {
        return $this->belongsToMany('DHI\User');

    }
    // fin relaciones
}
