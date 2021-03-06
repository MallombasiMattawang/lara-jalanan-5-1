<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
//Route::get('auth/register', 'Auth\AuthController@getRegister');
//Route::post('auth/register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

Route::get('/home', ['middleware' => 'auth', function () {
    return view('home');
}]);


Route::resource('post','ArticleController@guestarticle');
Route::resource('post-detail','ArticleController@guestarticleshow');
Route::post('post-detail/comment','ArticleController@guestcomment');
Route::post('contact/send','ArticleController@guestcontact');
Route::resource('tutorial','ArticleController@guesttutorial');
//Route::post('article/search','ArticleController@search');
//Route::post('article/pilihanperusahaan','Tref_dataperusahaanController@pilihanperusahaan');




Route::resource('article','ArticleController');
Route::post('tref_dataperusahaan/search','Tref_dataperusahaanController@search');
Route::post('tref_dataperusahaan/pilihanperusahaan','Tref_dataperusahaanController@pilihanperusahaan');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/cv', function () {
    return view('cv');
});

