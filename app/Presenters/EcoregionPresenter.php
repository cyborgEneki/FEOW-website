<?php

namespace App\Presenters;

use Laracasts\Presenter\Presenter;

class EcoregionPresenter extends Presenter
{
    public function getMajorHabitatType()
    {
        return $this->mhts->mht;
    }
}
