<?php

namespace App\Http\Controllers;

use App\Ecoregion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EcoregionController extends Controller
{
    public function index()
    {
        $ecoregions = Ecoregion::paginate(15);
        $searchResults = 'false';
        return view('pages.ecoregions-list')->with(['ecoregions' => $ecoregions, 'searchResults' => $searchResults]);
    }

    public function search(Request $request)
    {
        $searchResults = 'true';
        $search = $request->get('search');
        $ecoregions = Ecoregion::where('eco_name', 'like', '%' . $search . '%')->orWhere('realmd', 'like', '%' . $search . '%')->orWhere('realm', 'like', '%' . $search . '%')->paginate(15);
        if (count($ecoregions) == 0) {
            Session::flash('message', 'No record matched. Try to search again.');;
        }
        return view('pages.ecoregions-list')->with(['ecoregions' => $ecoregions, 'searchResults' => $searchResults]);
    }

    public function details($id)
    {
        $references = Ecoregion::with(['references', 'mhts'])->findOrFail($id);
        return view('pages.ecoregion-details')->with(['references' => $references]);
    }
}
