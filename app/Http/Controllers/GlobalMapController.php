<?php

namespace App\Http\Controllers;

use App\GlobalMap;
use Illuminate\Http\Request;

class GlobalMapController extends Controller
{
    public function index()
    {
        $maps = GlobalMap::all();

        return view('pages.biodiversity', [
            'maps' => $maps
        ]);
    }
}
