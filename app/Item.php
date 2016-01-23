<?php

namespace DHI;

use Illuminate\Database\Eloquent\Model;

/**
 * DHI\Item
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\DHI\Auction[] $auctions
 */
class Item extends Model
{
    protected $fillable = ['name', 'stock', 'price', 'features', 'description', 'images', 'status'];
    protected $casts = [
        'features' => 'json',
        'description' => 'json',
        'images' => 'json'
    ];

    // relaciones
    public function auctions()
    {
        return $this->hasMany('DHI\Auction');
    }


    public function country()
    {
        return $this->belongsTo('DHI\User');
    }
    // fin relaciones

    public function getActiveItems()
    {
        return Item::where( 'status', 'active' )->get();
    }
}
