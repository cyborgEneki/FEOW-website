<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';

    protected $fillable = array(
        'name',
        'email',
        'subject',
        'message'
    );

    protected $guarded = array(
        'id',
        'created_at',
        'updated_at'
    );
}
