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
  return view('Admin');
});
Route::get('/fiche', function() {
    return view('Fiche-event');
  });



Route::resource('/cart','CartController');
Route::resource('/produits','ProductController');
Route::resource('/events','EventController');
Route::resource('/comments','CommentController');
Route::resource('/users','UserController');

Route::get('/connection', 'ConnectionController@connect')->name('connection.connect');
Route::post('/connection', 'ConnectionController@connectAttempt')->name('connection.connectAttempt');
Route::get('/disconnect', 'ConnectionController@disconnect')->name('connection.disconnect');



Route::get('/mentions', function () {
    return view('mentions');
    
});