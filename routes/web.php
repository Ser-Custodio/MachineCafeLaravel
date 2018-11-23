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
    return view('welcome');
});

Route::get('/tabBord', function () {
    return view('tabBord');
});

Route::get('/boissons', function () {
    return view('boissons');
});

Route::get('/monnayeur', function () {
    return view('monnayeur');
});

Route::get('/recettes', function () {
    return view('recettes');
});

Route::get('/ventes', function () {
    return view('ventes');
});

Route::get('ingredients', 'IngredientsController@IngTable');