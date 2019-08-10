<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/background', function () {
    return view('pages.background');
});

Route::get('/global-maps/major-habitat-types', function () {
    return view('pages.major-habitat-types');
});

Route::get('/global-maps/biodiversity', function () {
    return view('pages.biodiversity');
});

Route::get('/global-maps/threat', function () {
    return view('pages.threat');
});

Route::get('/ecoregions/browse', function () {
    return view('pages.browse');
});

Route::get('/ecoregions/interactive-map', function () {
    return view('pages.interactive-map');
});

Route::get('/ecoregions/search', function () {
    return view('pages.search');
});

Route::get('/downloads', function () {
    return view('pages.downloads');
});

Route::get('/contributors', function () {
    return view('pages.contributors');
});

Route::get('/bibliography', function () {
    return view('pages.bibliography');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

