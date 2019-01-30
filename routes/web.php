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
});/*
ok
*/


Route::get('/Idees', function () {
    return view('BoiteIdee');/*ok*/
});
Route::get('/testIdee', function () {
    return view('ficheIdee');/*ok*/
});


//Route::get('/send/email', 'HomeController@mail');


Route::get('/Evenements', function () {
    return view('event');/*ok*/
});


//Route::get('/Boutique', function () {
 //   return view('boutique');
//});

Route::get('/Connexion', function () {
    return view('connexion');/*ok*/
});

Route::get('/CGV', function() {
  return view('CGV');
});
Route::get('/CGU', function() {
    return view('CGU');
  });
Route::get('/admin', function() {
    return view('Admin');
  });
Route::get('/fiche', function() {
    return view('Fiche-event');
  });

Route::post('/productss', 'CartController@stores')->name('cart.stores');
//Route::resource('/cart','CartController');
Route::resource('/events','EventController');
Route::resource('/comments','CommentController');
Route::resource('/users','UserController');
Route::resource('/image', 'ImageController');
Route::resource('/produits', 'ProductController'); 

Route::get('/connection', 'ConnectionController@connect')->name('connection.connect');
Route::post('/connection', 'ConnectionController@connectAttempt')->name('connection.connectAttempt');
Route::get('/disconnect', 'ConnectionController@disconnect')->name('connection.disconnect');

Route::get('tri/{id}', 'ProductController@triCategorie')->name('produits.triCategorie');

Route::get('/boiteIdee', 'EventController@indexIdees')->name('events.idees');
Route::get('/attente', 'EventController@indexAttente')->name('events.attente');
Route::get('/eventPasse', 'EventController@indexPasses')->name('events.passes');
Route::post('/creer', 'ProductController@stores')->name('produits.stores');
Route::get('/mentions', function () {
    return view('mentions');    
});

Route::get('404', ['as' => '404', 'uses' => 'ErrorController@notfound']);
Route::get('500', ['as' => '500', 'uses' => 'ErrorController@fatal']);

 Route::group(['middleware'=>'App\Http\Middleware\Access'], function () {
 	Route::resource('/cart','CartController');
 });

// Route::group(['middleware'=>'auth'], function () {
// 	Route::get('permissions-all-users',['middleware'=>'check-permission:user|student|cesi|bde','uses'=>'HomeController@allUsers']);
// 	Route::get('permissions-student-cesi-bde',['middleware'=>'check-permission:student|cesi|bde','uses'=>'HomeController@studentCesiBde']);
// 	Route::get('permissions-cesi-bde',['middleware'=>'check-permission:cesi|bde','uses'=>'HomeController@cesiBde']);
// 	Route::get('permissions-bde',['middleware'=>'check-permission:bde','uses'=>'HomeController@bde']);

	// Route::get('permissions-all-users',['middleware'=>'check-permission:user|admin|superadmin','uses'=>'HomeController@allUsers']);
	// Route::get('permissions-admin-superadmin',['middleware'=>'check-permission:admin|superadmin','uses'=>'HomeController@adminSuperadmin']);
	// Route::get('permissions-superadmin',['middleware'=>'check-permission:superadmin','uses'=>'HomeController@superadmin']);
// });
//Route::get('/users/login/', 'UserController@connect')->name('users.connect');
// Route::post('/users/connect', 'UserController@connectAttempt')->name('users.login');
// Route::get('/admin', array('as' => 'admin_area', 'uses' => 'PostsController@getAdmin'));
// Route::get('/posts', array('as' => 'blog', 'uses' => 'PostsController@getIndex'));
// Route::post('/add', array('as' => 'add_new_post', 'uses' => 'PostsController@postAdd'));
// Route::patch('update-cart', 'ProductController@update');
// Route::delete('remove-from-cart', 'ProductController@delete');
// Route::get('cart', 'ProductController@cart');
// Route::resource('/products', 'ProductController');
// Route::post('/products/post/', 'CartController@store');
// Auth::routes();
// Route::get('/cart/addItem','CartController@addItem');
// Route::get('/home', 'HomeController@index')->name('home');
// Route::resource('/posts', 'PostsController');
// Route::resource('/cart', 'CartController');
// Route::get('cart', 'CartController@addItem')->name('cart.addItem');
// Route::get('add-to-cart/{id}', 'ProductController@addItem');
// Route::get('ajaxRequest', 'HomeController@ajaxRequest');
// Route::post('ajaxRequest', 'HomeController@ajaxRequestPost');
