<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'country';

    protected $guarded = ['id'];

    public function ecoregions()
    {
        return $this->belongsToMany(Country::class, 'ecoregioncountry', 'countryid', 'ecoid');
    }
}
