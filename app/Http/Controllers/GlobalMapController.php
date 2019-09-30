<?php

namespace App\Http\Controllers;

use App\GlobalMap;
use Illuminate\Support\Facades\Request;

class GlobalMapController extends Controller
{
    public function biodiversityIndex()
    {
        $maps = GlobalMap::where('maptype', 'biodiversity')->where('shown', '1')->orderBy('arrange', 'asc')->get();
        $type = 'biodiversity';
        $url = Request::url();

        return view('pages.biodiversity-and-threat', [
            'url' => $url,
            'maps' => $maps,
            'type' => $type
        ]);
    }

//    public function threatIndex()
//    {
//        $maps = GlobalMap::where('shown', '1')->where('maptype', 'threat')->get();
//        $type = 'threat';
//        $url = Request::url();
//
//        return view('pages.biodiversity-and-threat', [
//            'url' => $url,
//            'maps' => $maps,
//            'type' => $type
//        ]);
//    }

    public function subpageIndex($maptype ,$ident)
    {
        $subpage = GlobalMap::where('maptype', $maptype)->where('ident', $ident)->first();
        return view('pages.biodiversity-and-threat-subpages')->with('subpage', $subpage);
    }
}
