<?php

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

Route::get('/', function () {
    $data = [
        'name' => 'Rares Constantin',
        'surname'=> 'Spatariu Hambareanu',
    ];
    return view('home',$data);
})->name("homepage");

Route::get('/Route', function () {
    return view('Route');
})->name("route");
