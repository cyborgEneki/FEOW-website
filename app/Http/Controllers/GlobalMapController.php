<?php

namespace App\Http\Controllers;

use App\GlobalMap;
use Illuminate\Support\Facades\Request;

class GlobalMapController extends Controller
{
    public function biodiversityIndex($type)
    {
        if ($type == 'biodiversity' || $type == 'threat'){
            $maps = GlobalMap::where('maptype', $type)->where('shown', '1')->orderBy('arrange', 'asc')->get();
        }
        else {
            return view('pages.404');
        }

        return view('pages.biodiversity-and-threat', [
            'maps' => $maps,
            'type' => $type
        ]);
    }

    public function subpageIndex($maptype, $ident)
    {
        $subpage = GlobalMap::where('maptype', $maptype)->where('ident', $ident)->first();
        return view('pages.biodiversity-and-threat-subpage')->with('subpage', $subpage);
    }
}
