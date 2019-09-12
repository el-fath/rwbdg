<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Pages;
use App\Model\Config;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Routing\Route;
use Astrotomic\Translatable\Locales;
use App;
use Globals;
use Lang;

class PagesController extends Controller
{
    public function __construct(Request $request)
    {
        $config = Config::find(1);
        SEOTools::setTitle(trans('home.title').' - '.$config->name);
        SEOTools::setDescription($config->description);
        SEOTools::opengraph()->setUrl( url('/') );
        // SEOTools::addImages($config->LogoPath);
    }

    public function index()
    {
        echo "asd";
    }
    public function show($slug)
    {
        $config = Config::find(1);
       $data['menu'] = $slug;
       $data['page'] = Pages::whereTranslation("slug",$slug)->limit(1)->first();

       SEOTools::opengraph()->setUrl( route("news_detail",$slug) );
       SEOTools::setTitle($data['page']->title.' - '.$config->name);
       SEOTools::setDescription(str_limit(strip_tags($data['page']->description), 80));
       if($data['page']->ImagePathSmall && isset($data['page']->ImagePathSmall)){
        SEOTools::addImages($data['page']->ImagePathSmall);
        }else{
            SEOTools::addImages($config->LogoPath);
        }
       return view("user/pages",compact('data'));
    }
}
