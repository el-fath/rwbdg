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


//FRONT END






//ADMIN
Route::get('/admin/login', 'Auth\LoginController@showLoginForm');
Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin/dashboard', 'Admin\DashboardController@index');
    Route::resource('admin/config', 'Admin\ConfigController',['as' => 'admin']);
});






//ARTISAN CALL
Route::get('/clear', function() {

    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');

    return "Cleared!";

});

Route::get('/migrate', function() {

    Artisan::call('migrate');
    return "Migration success!";

});


//OTHER
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
