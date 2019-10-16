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

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'remember_token'
    ];
}
