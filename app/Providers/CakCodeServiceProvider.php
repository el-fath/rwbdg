<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Model\Profile;
use App\Model\Config;
use App\Model\Property;
use App\Model\Pages;
use App\Model\Domain;
use App\Model\News;
use Astrotomic\Translatable\Locales;
use Carbon\Carbon;

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
        Carbon::setLocale(app()->getLocale());

        $profile = Profile::find(1);
        $config = Config::find(1);
        $property_rent = Property::where("type_transaction","rent")->orderBy('created_at', 'desc')->limit(6)->get();
        $property_sale = Property::where("type_transaction","sale")->orderBy('created_at', 'desc')->limit(6)->get();
        $newsFooter = News::orderBy('created_at', 'desc')->limit(2)->get();
        $domains = Domain::orderBy('created_at', 'desc')->get();

        $careerPage = Pages::where("code","career")->limit(1)->first();

        \Route::macro('currentUrl', function ($locale = null) {
            return route(\Route::currentRouteName(), \Route::current()->parameters(), true, $locale);
        });

        View::share('profile', $profile);
        View::share('config', $config);
        View::share('property_rent', $property_rent);
        View::share('property_sale', $property_sale);
        View::share('newsFooter', $newsFooter);
        View::share('careerPage', $careerPage);
        View::share('domains', $domains);
        

    }
}
