<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Model\Profile;
use App\Model\Config;

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
        $profile = Profile::find(1);
        $config = Config::find(1);

        View::share('profile', $profile);
        View::share('config', $config);
    }
}
