<?php

namespace DHI;

use Illuminate\Database\Eloquent\Model;

/**
 * DHI\Role
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\DHI\User[] $users
 */
class Role extends Model
{
    protected $fillable = ['name', 'permissions', 'status'];
    protected $casts = [
        'permissions' => 'json',
    ];

    // relaciones
    public function users()
    {
        return $this->hasMany('DHI\User', 'rol_id');
    }
    // fin relaciones
}
