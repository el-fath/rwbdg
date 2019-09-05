<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Config;
use App\Model\News;
use App\Model\NewsCategory;
use App\Model\Property;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Routing\Route;
use Astrotomic\Translatable\Locales;
use App;
use Globals;

class NewsController extends Controller
{
    public function __construct(Request $request)
    {
        $config = Config::find(1);
        SEOTools::setTitle(trans('news.title').' - '.$config->name);
        SEOTools::setDescription($config->description);
        SEOTools::opengraph()->setUrl( url('/') );
        SEOTools::addImages($config->LogoPath);
    }

    public function index()
    {
        $data['menu'] = "news";
        $data['news'] = News::orderBy('created_at', 'desc')->get();
        return view("user/news",compact('data'));
    }

    public function detail($slug)
    {
        $data['menu'] = "news";
        $data['news'] = News::where("id",1)->limit(1)->first();
        $data['news_category'] = NewsCategory::orderBy('created_at', 'desc')->limit(8)->get();
        $data['property_latest'] = Property::orderBy('created_at', 'desc')->limit(9)->get();
        $data['property_featured'] = Property::where('is_featured', '1')->orderBy('created_at', 'desc')->limit(9)->get();

        return view("user/news_detail",compact('data'));
    }
}
