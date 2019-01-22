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

Route::get('/Boutique', function () {
    return view('boutique');
});

Route::get('/SignUp', function () {
    return view('truc');
});
Route::get('/header', function () {
    return view('header');
});
Route::get('/test', function () {
    return view('bladetest');
});
