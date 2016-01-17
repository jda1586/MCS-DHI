<?php

namespace DHI;

use Illuminate\Database\Eloquent\Model;

/**
 * DHI\Movement
 *
 * @property integer $id
 * @property string $name
 * @property string $type
 * @property string $class
 * @property string $status
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\DHI\UserMovement[] $user_movements
 */
class Movement extends Model
{
    protected $fillable = ['name', 'type', 'class', 'status'];

    // relaciones
    public function user_movements()
    {
        return $this->hasMany('DHI\UserMovement');
    }
    // fin relaciones
}
