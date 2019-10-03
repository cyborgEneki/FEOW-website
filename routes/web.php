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

use App\Http\Controllers\ContactController;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/background', function () {
    return view('pages.background');
});

Route::get('/global-maps/major-habitat-types', function () {
    return view('pages.major-habitat-types');
});
Route::get('/global-maps/{maptype}', [
    'as' => 'biodiversity-threat',
    'uses' => 'GlobalMapController@biodiversityIndex'
]);
Route::get('/global-maps/{type}/{ident}', [
    'as' => 'biodiversity-threat-subpage',
    'uses' => 'GlobalMapController@subpageIndex'
]);

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

Route::get('/contributors', 'ContributorController@index');

Route::get('/bibliography', 'BibliographyController@index');
Route::get('/bibliography/{letter}', [
    'as' => 'wild',
    'uses' => 'BibliographyController@letter'
]);

Route::get('/contact', 'ContactController@index');
Route::post('/contact', 'ContactController@store');

Route::any('/{any}', function () {
    return view('pages.404');
})->where('any', '.*');
