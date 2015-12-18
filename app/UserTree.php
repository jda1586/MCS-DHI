<?php

namespace DHI;

use Illuminate\Database\Eloquent\Model;

class UserTree extends Model
{
    protected $fillable = ['user_id', 'parent_id', 'position', 'sponsor_id', 'matrix_parent', 'product_id'];

    // relaciones
    public function user()
    {
        return $this->belongsTo('DHI\User');
    }

    public function parent()
    {
        return $this->belongsTo('DHI\User', 'parent_id');
    }

    public function sponsor()
    {
        return $this->belongsTo('DHI\User', 'sponsor_id');
    }


    // fin relaciones
}
