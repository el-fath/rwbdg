<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Config;
use App\Model\News;
use App\Model\PropertyCategory;
use App\Model\Property;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Routing\Route;
use Astrotomic\Translatable\Locales;
use App;
use Globals;
use Lang;

class NewsController extends Controller
{
    public function __construct(Request $request)
    {
        $config = Config::find(1);
        SEOTools::setTitle(trans('news.title').' - '.$config->name);
        SEOTools::setDescription($config->description);
        SEOTools::opengraph()->setUrl( url('/') );
        // SEOTools::addImages($config->LogoPath);
    }

    public function index(Request $request)
    {
       
        $data['menu'] = "news";
        $data['property_categories'] = PropertyCategory::orderBy('created_at', 'desc')->get();
        // $data['news'] = News::orderBy('created_at', 'desc')->paginate(5);
        
        $query = News::query();

        if($request->has('search')){
            $query = $query->search($request->get('search'));
        }

        if($request->has('category')){
            // $query = $query->where("category_id",$request->category);
            $query = $query->whereHas("Property", function ($q) use ($request){
                $q->where("category_id",$request->category);
            });
        }

        $query = $query->orderBy('created_at', 'desc')->paginate(5);

        $data['news'] = $query;

        

        return view("user/news",compact('data'));
    }

    public function detail($slug)
    {
        $config = Config::find(1);
        $data['menu'] = "news";
        $data['news'] = News::whereTranslation("slug",$slug)->limit(1)->first();
        $data['property_categories'] = PropertyCategory::orderBy('created_at', 'desc')->get();
        $data['property_latest'] = Property::orderBy('created_at', 'desc')->limit(9)->get();
        $data['property_featured'] = Property::where('is_featured', '1')->orderBy('created_at', 'desc')->limit(9)->get();

        SEOTools::opengraph()->setUrl( route("news_detail",$slug) );
        SEOTools::setTitle($data['news']->title.' - '.$config->name);
        SEOTools::setDescription(str_limit(strip_tags($data['news']->description), 80));
        if($data['news']->ImagePathSmall && isset($data['news']->ImagePathSmall)){
            SEOTools::addImages($data['news']->ImagePathSmall);
        }else{
            SEOTools::addImages($config->LogoPath);
        }
        

        return view("user/news_detail",compact('data'));
    }
}
