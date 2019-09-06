<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Config;
use App\Model\News;
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
}
