<?php

namespace DHI;

use Illuminate\Database\Eloquent\Model;

/**
 * DHI\Country
 *
 * @property integer $id
 * @property string $name
 * @property string $flag
 * @property integer $lenguage_id
 * @property string $country_code
 * @property string $local_name
 * @property string $web_code
 * @property string $region
 * @property string $continent
 * @property float $latitude
 * @property float $longitude
 * @property float $surface_area
 * @property float $population
 * @property integer $enabled
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\DHI\User[] $users
 */
class Country extends Model
{
    // relaciones
    public function users()
    {
        return $this->hasMany('DHI\User');
    }
    // fin relaciones
}
