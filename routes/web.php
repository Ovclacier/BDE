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


Route::get('/send/email', 'HomeController@mail');


Route::resource('/cart','CartController');
Route::resource('/products','ProductController');
Route::resource('/posts','PostController');
Route::resource('/comments','CommentController');
Route::resource('/users','UserController');

Route::get('/connection', 'ConnectionController@connect')->name('connection.connect');
Route::post('/connection', 'ConnectionController@connectAttempt')->name('connection.connectAttempt');
Route::get('/disconnect', 'ConnectionController@disconnect')->name('connection.disconnect');


Route::group(['middleware'=>'auth'], function () {
	Route::get('permissions-all-users',['middleware'=>'check-permission:user|student|cesi|bde','uses'=>'HomeController@allUsers']);
	Route::get('permissions-student-cesi-bde',['middleware'=>'check-permission:student|cesi|bde','uses'=>'HomeController@studentCesiBde']);
	Route::get('permissions-cesi-bde',['middleware'=>'check-permission:cesi|bde','uses'=>'HomeController@cesiBde']);
	Route::get('permissions-bde',['middleware'=>'check-permission:bde','uses'=>'HomeController@bde']);

