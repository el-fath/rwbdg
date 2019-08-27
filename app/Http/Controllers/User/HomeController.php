<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Config;
use App\Model\Slide;
use App\Model\Property;
use App\Model\PropertyCategory;
use App\Model\News;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Routing\Route;
use App;
use Globals;

class HomeController extends Controller
{
    public function __construct(Request $request)
    {
        $config = Config::find(1);
        SEOTools::setTitle('Home - '.$config->name);
        SEOTools::setDescription($config->description);
        SEOTools::opengraph()->setUrl( url('/') );
        SEOTools::addImages($config->LogoPath);
    }

    public function index()
    {

        $data['slide'] = Slide::all();
        $data['property_type'] = Globals::TYPE_PROPERTY;
        $data['property_transaction'] = Globals::TYPE_TRANSACTION;
        $data['property_categories'] = PropertyCategory::all();
        $data['property_latest'] = Property::orderBy('created_at', 'desc')->limit(9)->get();
        $data['news'] = News::orderBy('created_at', 'desc')->limit(8)->get();

        return view("user/home",compact('data'));
    }

    public function changelanguage($locale)
    {
        $routeName = Route::currentRouteName();
	    dd($routeName);
        return ;
    }
}
