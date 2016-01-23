<?php

namespace DHI;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

/**
 * DHI\User
 *
 * @property integer $id
 * @property string $user
 * @property string $password
 * @property string $email
 * @property string $name
 * @property string $lastname
 * @property string $birthdate
 * @property string $phone
 * @property string $address
 * @property string $renew
 * @property integer $product_id
 * @property integer $rol_id
 * @property string $status
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $remember_token
 * @property-read \DHI\UserWallet $wallets
 * @property-read \DHI\UserPayment $payment
 * @property-read \Illuminate\Database\Eloquent\Collection|\DHI\UserPayment[] $sponsored_payments
 * @property-read \Illuminate\Database\Eloquent\Collection|\DHI\UserMovement[] $movements
 * @property-read \DHI\Product $product
 * @property-read \Illuminate\Database\Eloquent\Collection|\DHI\UserDeposit[] $deposits
 * @property-read \Illuminate\Database\Eloquent\Collection|\DHI\UserCashout[] $cashout
 * @property-read \Illuminate\Database\Eloquent\Collection|\DHI\BitcoinAccount[] $bitcoin_accounts
 * @property string $skype
 * @property string $whatsapp
 * @property string $birthday
 * @property integer $country_id
 * @property-read \DHI\UserTree $trees
 * @property-read \DHI\Country $country
 * @property-read \DHI\Role $role
 */
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
    protected $fillable = [
        'user', 'password', 'email', 'name', 'lastname', 'birthday', 'phone',
        'address', 'renew', 'product_id', 'rol_id', 'status', 'skype', 'whatsapp',
        'country_id'
    ];

    protected $dates = ['created_at', 'updated_at'];

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

    public function cashout()
    {
        return $this->hasMany('DHI\UserCashout');
    }

    public function bitcoin_accounts()
    {
        return $this->hasMany('DHI\BitcoinAccount');
    }

    public function trees()
    {
        return $this->hasOne('DHI\UserTree');
    }

    public function country()
    {
        return $this->belongsTo('DHI\Country');
    }

    public function role()
    {
        return $this->hasOne('DHI\Role', 'rol_id');
    }

    public function items()
    {
        return $this->hasMany('DHI\Item');
    }

    public function auctions()
    {
        return $this->hasMany('DHI\Auction')->withPivot('user_auctions', 'status');
    }
// fin relaciones
}
