<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contributor extends Model
{
    protected $table = 'contributor';

    protected $guarded = array('id');
}
