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

Route::get('/Idees', function () {
    return view('BoiteIdee');
});
Route::get('/testIdee', function () {
    return view('ficheIdee');
});


Route::get('/Evenements', function () {
    return view('event');
});

Route::get('/Boutique', 'contTest@index', function () {
    return view('boutique');
});

Route::get('/Connexion', function () {
    return view('connexion');
});
Route::get('/header', function () {
    return view('header');
});
Route::get('/test', function () {
    return view('bladetest');
});

Route::get('/admin', function() {
  return view('admin');
});
Route::get('/fiche', function() {
    return view('Fiche-event');
  });
