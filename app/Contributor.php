<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contributor extends Model
{
    protected $table = 'contributor';

    protected $fillable = array('contributor', 'category', 'keycont', 'image', 'header', 'body', 'cont2');

    protected $guarded = array('id');
}
