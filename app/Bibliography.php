<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bibliography extends Model
{
    protected $table = 'bibliography';

    protected $guarded = array('id');

    public function ecoregions()
    {
        return $this->belongsToMany(Ecoregion::class, 'ecoregionreference', 'ref_id', 'eco_id');
    }
}
