<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodiversityController extends Controller
{
    public function freshwaterFishSpeciesRichness()
    {
        $test = 'Testing';
        return view('pages.biodiversity-and-threat-subpages')->with('test', $test);
    }

    public function numberOfEndemicFreshwaterFishSpecies()
    {
        $test = 'Testing Yesterday';
        return view('pages.biodiversity-and-threat-subpages')->with('test', $test);
    }
}
