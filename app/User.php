<?php

namespace DHI;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
    AuthorizableContract,
    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user', 'password', 'email', 'name', 'lastname', 'birthday', 'phone', 'address', 'renew', 'product_id', 'rol_id', 'status'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    // relaciones
    public function wallets()
    {
        return $this->hasOne('DHI\UserWallet');
    }

    public function payment()
    {
        return $this->hasOne('DHI\UserPayment');
    }

    public function sponsored_payments()
    {
        return $this->hasMany('DHI\UserPayment', 'sponsor_id');
    }

    public function movements()
    {
        return $this->hasMany('DHI\UserMovement');
    }

    public function product()
    {
        return $this->belongsTo('DHI\Product');
    }

    public function deposits()
    {
        return $this->hasMany('DHI\UserDeposit');
    }
// fin relaciones
}
