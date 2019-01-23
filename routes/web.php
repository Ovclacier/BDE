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



 Route::get('create', function(){
      return view('createproduct');
 });
 Route::get('/products', function(){
     return view('viewproducts');
 });

Route::get('/', function () {
    return view('welcome');
});

Route::get('/imgdisp', function () {
    return view('imgdisp');
});

Route::patch('update-cart', 'ProductController@update');
 
Route::delete('remove-from-cart', 'ProductController@delete');

Route::get('cart', 'ProductController@cart');

Route::get('/send/email', 'HomeController@mail');

Route::resource('/products', 'ProductController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/posts', 'PostsController');

// Route::get('/admin', array('as' => 'admin_area', 'uses' => 'PostsController@getAdmin'));

// Route::get('/posts', array('as' => 'blog', 'uses' => 'PostsController@getIndex'));

// Route::post('/add', array('as' => 'add_new_post', 'uses' => 'PostsController@postAdd'));

Route::group(['middleware'=>'auth'], function () {
	// Route::get('permissions-all-users',['middleware'=>'check-permission:user|admin|superadmin','uses'=>'HomeController@allUsers']);
	// Route::get('permissions-admin-superadmin',['middleware'=>'check-permission:admin|superadmin','uses'=>'HomeController@adminSuperadmin']);
	// Route::get('permissions-superadmin',['middleware'=>'check-permission:superadmin','uses'=>'HomeController@superadmin']);
	Route::get('permissions-all-users',['middleware'=>'check-permission:user|student|cesi|bde','uses'=>'HomeController@allUsers']);
	Route::get('permissions-student-cesi-bde',['middleware'=>'check-permission:student|cesi|bde','uses'=>'HomeController@studentCesiBde']);
	Route::get('permissions-cesi-bde',['middleware'=>'check-permission:cesi|bde','uses'=>'HomeController@cesiBde']);
	Route::get('permissions-bde',['middleware'=>'check-permission:bde','uses'=>'HomeController@bde']);
});