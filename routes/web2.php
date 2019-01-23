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
Auth::routes();

//Le login marche, mais la route qui gère /login et /register est où?

/*
ProductController-related routes
*/
Route::get('/create','ProductController@create');
Route::get('/products','ProductController@index');
Route::resource('/products', 'ProductController');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/Evenements', function () {
    return view('event');
/*
HomeController-related routes
*/
Route::get('/send/email', 'HomeController@mail');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('A', function() {
  return view('truc');
});

Route::get('/Boutique', function () {
    return view('boutique');
});
/*
Branch Intermediate
*/

Route::get('/Connexion', function () {
    return view('truc');
Route::get('/api', function() {
  return view('ExternalAPI');
});
Route::get('/header', function () {
    return view('header');
});
Route::get('/test', function () {
    return view('bladetest');
});

Route::get('/WHAT2', function() {
//should be restricted to users with appropriate grade
Route::get('/admin', function() {
  return view('jsp');
});
Route::get('/fiche', function() {
    return view('Fiche-event');
});
