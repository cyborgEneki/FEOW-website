<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ecoregion extends Model
{
    protected $table = 'ecoregion';

    protected $guarded = ['id'];

//    public function mhts()
//    {
//        return $this->belongsTo('Mht', 'realm');
//    }
}
