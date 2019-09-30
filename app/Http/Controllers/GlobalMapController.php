<?php

namespace App\Http\Controllers;

use App\GlobalMap;
use Illuminate\Support\Facades\Request;

class GlobalMapController extends Controller
{
    public function biodiversityIndex($type)
    {
        if($type == 'biodiversity') {
            $maps = GlobalMap::where('maptype', 'biodiversity')->where('shown', '1')->orderBy('arrange', 'asc')->get();
        }
        if($type == 'threat') {
            $maps = GlobalMap::where('maptype', 'threat')->where('shown', '1')->orderBy('arrange', 'asc')->get();
        }

        return view('pages.biodiversity-and-threat', [
            'maps' => $maps,
            'type' => $type
        ]);
    }

    public function subpageIndex($maptype ,$ident)
    {
        $subpage = GlobalMap::where('maptype', $maptype)->where('ident', $ident)->first();
        return view('pages.biodiversity-and-threat-subpage')->with('subpage', $subpage);
    }
}
