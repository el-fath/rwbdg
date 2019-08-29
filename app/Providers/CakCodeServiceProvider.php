<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Model\Profile;
use App\Model\Config;
use Astrotomic\Translatable\Locales;

class CakCodeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $lang = "id";
        if(request()->segment(1) == "id" || request()->segment(1) == "en"){
            $lang = request()->segment(1);
        }
        // dd(Locales::current());
        app('config')->set('translatable.locale', $lang);
        // dd(app('config')->get('translatable.locale'));
        app()->setLocale($lang);
        app()->getLocale();

        $profile = Profile::find(1);
        $config = Config::find(1);

        \Route::macro('currentUrl', function ($locale = null) {
            return route(\Route::currentRouteName(), \Route::current()->parameters(), true, $locale);
        });

        View::share('profile', $profile);
        View::share('config', $config);
    }
}
