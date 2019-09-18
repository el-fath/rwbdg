<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Config;
use App\Model\Slide;
use App\Model\Property;
use App\Model\PropertyCategory;
use App\Model\PropertyMarketplace;
use App\Model\News;
use App\Model\NewsCategory;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Routing\Route;
use Astrotomic\Translatable\Locales;
use App;
use Globals;
use Lang;

class HomeController extends Controller
{
    public function __construct(Request $request)
    {
        $config = Config::find(1);
        SEOTools::setTitle(trans('home.title').' - '.$config->name);
        SEOTools::setDescription($config->description);
        SEOTools::opengraph()->setUrl( url('/') );
        SEOTools::addImages($config->LogoPath);
    }

    public function index()
    {

        // dd();
        $data['menu'] = "home";
        $data['slide'] = Slide::all();
        $data['property_type'] = Globals::TYPE_PROPERTY;
        $data['property_transaction'] = Globals::TYPE_TRANSACTION;
        $data['property_categories'] = PropertyCategory::all();
        
        $data['property_latest'] = Property::orderBy('created_at', 'desc')->limit(9)->get();
        $data['property_featured'] = Property::where('is_featured', '1')->orderBy('created_at', 'desc')->limit(9)->get();
        $data['news_latest'] = News::orderBy('created_at', 'desc')->limit(8)->get();
        $data['news_category'] = NewsCategory::orderBy('created_at', 'desc')->limit(8)->get();
        $data['marketplaces'] = PropertyMarketplace::limit(3)->with(['properties' => function($q) {
            $q->inRandomOrder()->take(6);
        }])->get();

        return view("user/home",compact('data'));
    }

    public function changelanguage($locale)
    {
        $routeName = Route::currentRouteName();
	    dd($routeName);
        return ;
    }

    public function notFound()
    {
        $data['menu'] = "page not found";
        return view("user/notfound",compact('data'));
    }
}
