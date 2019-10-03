<?php

namespace App\Http\Controllers;

use App\Bibliography;
use Illuminate\Http\Request;

class BibliographyController extends Controller
{
    public function index()
    {
        $bibliography = Bibliography::all();

        return view('pages.bibliography')->with('bibliography', $bibliography);
    }

    public function letter($letter)
    {
        $bibliography = Bibliography::where('author', 'like', $letter.'%')->get();

        return view('pages.bibliography')->with('bibliography', $bibliography);
    }
}
