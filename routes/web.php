<?php

use Illuminate\Support\Facades\Route;

use Arungruang\Purwantara\Purwantara;
use Arungruang\Purwantara\Http\Controllers\PurwantaraController;
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

Route::get('/a', function () {
    return view('welcome');
});

Route::get('/salam/{name}', function($sName) {
    $oGreetr = new Purwantara();
    return $oGreetr->greet($sName);
});
// Route::get('/slap', [PurwantaraController::class, 'index']);

Route::group(['namespace' => 'Arungruang\Purwantara\Http\Controllers'], function()
{
    Route::get('about', ['uses' => 'PurwantaraController@index']);
});
