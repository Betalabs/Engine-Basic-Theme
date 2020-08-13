<?php

use EngineLayoutBase\App\Facades\DataProviders;
use Illuminate\Support\Facades\Route;

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
Route::get('/components/menu/1', function () {
    return view('scenarios.menu.1')
        ->with('categories', DataProviders::categories())
        ->with('logo', 'https://assets.betalabs.net/fit-in/75x0/production/selflayout/images/stores/1/logo_transparent.png');
});
