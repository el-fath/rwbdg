<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Profile;
use App\Model\Property;
use App\Model\Config;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Routing\Route;
use Astrotomic\Translatable\Locales;
use App;
use Globals;
use Lang;

class AboutController extends Controller
{

    public function __construct(Request $request)
    {
        $config = Config::find(1);
        SEOTools::setTitle(trans('about.title').' - '.$config->name);
        SEOTools::setDescription($config->description);
        SEOTools::opengraph()->setUrl( url('/') );
        SEOTools::addImages($config->LogoPath);
    }

    public function index()
    {
        $data['menu'] = "about";
        
        return view("user/about",compact('data'));
    }
}
