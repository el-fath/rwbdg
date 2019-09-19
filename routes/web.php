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
//FRONT END

Route::localized(function () {
    Route::get('/', 'User\HomeController@index')->name('index');
    Route::get('/home', 'User\HomeController@index')->name('home');
    Route::get('/property', 'User\PropertyController@index')->name('property');
    Route::get('/property/{id}', 'User\PropertyController@detail')->name('property.id');
    Route::get('/article', 'User\NewsController@index')->name('news');
    Route::get('/article/{slug}', 'User\NewsController@detail')->name('news_detail');
    Route::get('/gallery', 'User\GalleryController@index')->name('gallery');
    Route::get('/gallery/{id_album}', 'User\GalleryController@photos')->name('gallery_photos');
    Route::get('/about', 'User\AboutController@index')->name('about');
    Route::get('/contact-us', 'User\ContactController@index')->name('contact_us');
    Route::get('/career', 'User\CareerController@index')->name('career');
    Route::get('/specialist', 'User\SpecialistController@index')->name('specialist');
    Route::get('/specialist/{id}', 'User\SpecialistController@detail')->name('specialist.id');
    Route::post('/contact-us', 'User\ContactController@store')->name('contact_us.store');
    Route::get('/static/{page}', 'User\PagesController@show')->name('pages');

    Route::get('/not-found', 'User\HomeController@notFound')->name('not-found');
});

   
Route::get('images/{filename}', function ($filename)
{
    $path = storage_path() . '/img/' . $filename;

    if(!File::exists($path)) abort(404);

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});

//ADMIN
Route::get('/admin/login', 'Auth\LoginController@showLoginForm');
Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin/not-found', 'Admin\DashboardController@notFound')->name('admin-not-found');
    Route::get('/admin', 'Admin\DashboardController@index')->name('admin.index');
    Route::get('/admin/dashboard', 'Admin\DashboardController@index')->name('admin.dashboard');
    Route::resource('admin/config', 'Admin\ConfigController',['as' => 'admin']);
    Route::resource('admin/profile', 'Admin\ProfileController',['as' => 'admin']);
    Route::resource('admin/domain', 'Admin\DomainController',['as' => 'admin']);
    Route::resource('admin/slide', 'Admin\SlideController',['as' => 'admin']);
    Route::resource('admin/user', 'Admin\UserController',['as' => 'admin']);
    Route::resource('admin/group', 'Admin\GroupController',['as' => 'admin']);
    Route::resource('admin/property-marketplace', 'Admin\PropertyMarketPlaceController',['as' => 'admin']);
    Route::resource('admin/property-category', 'Admin\PropertyCategoryController',['as' => 'admin']);
    Route::resource('admin/marketing-level', 'Admin\MarketingLevelController',['as' => 'admin']);
    Route::resource('admin/pages', 'Admin\PagesController',['as' => 'admin']);
    Route::resource('admin/news', 'Admin\NewsController',['as' => 'admin']);
    Route::resource('admin/news-category', 'Admin\NewsCategoryController',['as' => 'admin']);
    Route::resource('admin/album', 'Admin\AlbumController',['as' => 'admin']);
    Route::resource('admin/marketing', 'Admin\MarketingController',['as' => 'admin']);
    Route::resource('admin/contact-message', 'Admin\ContactMessageController',['as' => 'admin']);
    Route::resource('admin/property', 'Admin\PropertyController',['as' => 'admin']);

    Route::get('admin/province/sync', [
        'as' => 'admin.province.sync',
        'uses' => 'Admin\ProvinceController@sync'
    ]);
    Route::resource('admin/province', 'Admin\ProvinceController',['as' => 'admin']);

    Route::get('admin/city/sync', [
        'as' => 'admin.city.sync',
        'uses' => 'Admin\CityController@sync'
    ]);
    Route::post('admin/city/getcity', [
        'as' => 'admin.city.getcity',
        'uses' => 'Admin\CityController@getcity'
    ]);
    Route::resource('admin/city', 'Admin\CityController',['as' => 'admin']);

    Route::get('admin/district/sync', [
        'as' => 'admin.district.sync',
        'uses' => 'Admin\DistrictController@sync'
    ]);

    Route::post('admin/district/getdistrict', [
        'as' => 'admin.getdistrict.getdistrict',
        'uses' => 'Admin\DistrictController@getdistrict'
    ]);
    Route::resource('admin/district', 'Admin\DistrictController',['as' => 'admin']);



    // Route::get('admin/city/{province_id}', [
    //     'as' => 'admin.city.index',
    //     'uses' => 'Admin\CityController@index'
    // ]);

    // Route::get('admin/district/{city_id}', [
    //     'as' => 'admin.district.index',
    //     'uses' => 'Admin\DistrictController@index'
    // ]);

    Route::get('admin/album-photo/{id_album}', [
        'as' => 'admin.album-photo.index',
        'uses' => 'Admin\AlbumPhotoController@index'
        ]);
    Route::get('admin/album-photo/get-photo/{id_album}', [
        'as' => 'admin.album-photo.get_photo',
        'uses' => 'Admin\AlbumPhotoController@get_photo'
        ]);
    Route::post('admin/album-photo/add-photo/{id_album}', [
        'as' => 'admin.album-photo.add_photo',
        'uses' => 'Admin\AlbumPhotoController@add_photo'
        ]);
    Route::post('admin/album-photo/delete-photo/{id_album}', [
        'as' => 'admin.album-photo.delete_photo',
        'uses' => 'Admin\AlbumPhotoController@delete_photo'
        ]);
    Route::resource('admin/album-photo', 'Admin\AlbumPhotoController',[
        'as' => 'admin',
        'except' => 'index'
    ]);
});

Route::get('/migrate', function() {

    Artisan::call('migrate');
    return "Migration success!";

});


//ARTISAN CALL
Route::get('/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    return "Cleared!";
});


//OTHER
Auth::routes();
