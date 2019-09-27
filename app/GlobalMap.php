<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GlobalMap extends Model
{
    protected $table = 'map';

    protected $guarded = [
        'id',
        'shown',
        'arrange'
    ];

    protected $fillable = [
        'source',
        'title',
        'ident',
        'description',
        'maptype'
    ];
}
