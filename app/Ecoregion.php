<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laracasts\Presenter\PresentableTrait;

class Ecoregion extends Model
{
    use PresentableTrait;
    protected $presenter = Presenters\EcoregionPresenter::class;

    protected $table = 'ecoregion';

    protected $guarded = ['id'];

    public function mhts()
    {
        return $this->belongsTo(Mht::class, 'mht');
    }
}
