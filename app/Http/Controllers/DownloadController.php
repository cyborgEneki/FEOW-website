<?php

namespace App\Http\Controllers;

use App\Download;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function index()
    {
        $downloads = Download::where('shown', '1')->get();

        return view ('pages.downloads')->with('downloads', $downloads);
    }
}
