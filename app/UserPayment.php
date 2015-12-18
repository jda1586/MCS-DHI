<?php

namespace DHI;

use Illuminate\Database\Eloquent\Model;

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
