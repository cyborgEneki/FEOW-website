<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mht extends Model
{
    protected $table = 'mht';

    protected $guarded = 'id';

    public function ecoregion()
    {
        return $this->hasMany(Ecoregion::class);
    }
}
