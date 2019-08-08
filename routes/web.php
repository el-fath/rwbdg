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

Route::get('/', 'User\HomeController@index');


//FRONT END
Route::prefix(parseLocale())->group(function () {
    Auth::routes();
    Route::get('/about', 'User\AboutController@index');
    Route::get('/landing-page', 'User\HomeController@index');


    //ARTISAN CALL
    Route::get('/clear', function() {

        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('config:cache');
        Artisan::call('view:clear');

        return "Cleared!";

    });
});






//ADMIN
Route::get('/admin/login', 'Auth\LoginController@showLoginForm');
Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin/dashboard', 'Admin\DashboardController@index');
    Route::resource('admin/config', 'Admin\ConfigController',['as' => 'admin']);
    Route::resource('admin/profile', 'Admin\ProfileController',['as' => 'admin']);
    Route::resource('admin/slide', 'Admin\SlideController',['as' => 'admin']);
    Route::resource('admin/user', 'Admin\UserController',['as' => 'admin']);
    Route::resource('admin/property-marketplace', 'Admin\PropertyMarketPlaceController',['as' => 'admin']);
});








Route::get('/migrate', function() {

    Artisan::call('migrate');
    return "Migration success!";

});


//OTHER
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');



//CUSTOM FUNCTION
function parseLocale()
{
    $locale = Request::segment(1);
    $languages = ['id', 'en'];

    if (in_array($locale, $languages)) {
        App::setLocale($locale);
        return $locale;
    }

    return '/';
}
