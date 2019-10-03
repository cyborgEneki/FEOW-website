<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';

    protected $guarded = array(
        'id',
        'created_at',
        'updated_at'
    );
}
