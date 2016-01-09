<?php

namespace DHI;

use Illuminate\Database\Eloquent\Model;

/**
 * DHI\UserTree
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $parent_id
 * @property string $position
 * @property integer $sponsor_id
 * @property integer $matrix_parent
 * @property integer $matrix_position
 * @property integer $product_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \DHI\User $user
 * @property-read \DHI\User $parent
 * @property-read \DHI\User $sponsor
 */
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
