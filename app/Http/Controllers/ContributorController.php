<?php

namespace App\Http\Controllers;

use App\Contributor;
use Illuminate\Http\Request;

class ContributorController extends Controller
{
    public function index()
    {
        $contributors = Contributor::all()->sortBy('contributor');

        return view('pages.contributors')->with('contributors', $contributors);
    }
}
