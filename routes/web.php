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



// Route::get('create', function(){
//      return view('createproduct');
// });

// Route::get('/products', function(){
//     return view('viewproducts');
// });

Route::get('/', function () {
    return view('welcome');
});
Route::get('/imgdisp', function () {
    return view('imgdisp');
});

Route::get('/send/email', 'HomeController@mail');

Route::resource('/products', 'ProductController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

