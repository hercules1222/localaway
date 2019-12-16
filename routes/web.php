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

// Route::domain('staging.localaway.com')->group(function () {
    
    
    Route::get('/dashboard','DashboardController@index');
    
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/home', 'HomeController@index')->name('home');
    
    Route::get('/dashboard/logo-image', 'DashboardController@index');
    Route::get('/dashboard/hero-image', 'DashboardController@hero');
    Route::get('/dashboard/itinerary-image', 'DashboardController@itinerary');
    Route::get('/dashboard/stylist-image', 'DashboardController@stylist');
    
    Route::post('/admin/file/upload', 'FileController@store');
    Route::get('/admin/file/delete/{id}', 'FileController@delete');
    Route::get('/admin/file/use/{id}', 'FileController@use');
    Route::post('/admin/file/update/{id}', 'FileController@update');
    Route::get('/admin/file/move-up/{id}', 'FileController@up');
    Route::get('/admin/file/move-down/{id}', 'FileController@down');
    
    Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
    Route::get('/auth/callback/{provider}', 'SocialController@callback');
    
    Route::get('/become-stylist', function () {
        return view('stylist-sign-in');
    });
    
    Route::post('/stylist-signup', 'StylistController@store');
    
    Route::post('/answer', 'HomeController@showAnswer');
    Route::get('/answer', 'HomeController@index');
// });

    
// $appRoutes = function() {
    // Route::get('/newlanding', function () {
    //     return view('newlanding');
    // });
    
    // Route::get('/', function () {
    //     return view('newlanding');
    // });

    
    
    Route::get('/job', function () {
        return view('job');
    });
    
    Route::post('post', 'PostController')->name('post.store');
    
    Route::get('/checkemail', 'NewlandingController@checkEmail');

    Route::get('/save-email', 'NewlandingController@saveEmail');

    Route::get('/save-info', 'NewlandingController@saveInfo');
    
    Route::get('/survey', function () {
        return redirect('/');
    });
    Route::post('/survey', 'NewlandingController@index');
// };

// Route::group(array('domain' => 'www.localaway.com'), $appRoutes);
// Route::group(array('domain' => 'localaway.com'), $appRoutes);

    Route::get('customer/signup', 'CustomerController@signup')->name('customer.signup');

    Route::post('customer/signup', 'CustomerController@postSignup');

    Route::post('customer/general', 'CustomerController@postGeneral');

    Route::post('customer/women', 'CustomerController@postWomen');

    Route::post('customer/men', 'CustomerController@postMen');
    
    Route::post('customer/neutral', 'CustomerController@postNeutral');
    
    Route::post('customer/dislike', 'CustomerController@postDislike');

    Route::post('customer/almost-done', 'CustomerController@postAlmostDone');
    
    Route::post('customer/finalize', 'CustomerController@postFinalize');
