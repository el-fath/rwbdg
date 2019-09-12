<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Marketing;
use App\Model\Config;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Routing\Route;
use Astrotomic\Translatable\Locales;
use App;
use Globals;
use Lang;

class SpecialistController extends Controller
{
    public function __construct(Request $request)
    {
        $config = Config::find(1);
        SEOTools::setTitle(trans('specialist.title').' - '.$config->name);
        SEOTools::setDescription($config->description);
        SEOTools::opengraph()->setUrl( url('/') );
        // SEOTools::addImages($config->LogoPath);
    }

    public function index()
    {
        $data['menu'] = "specialist";
        $data['Marketing'] = Marketing::with('level')->orderBy('created_at', 'desc')->paginate(9);
        return view("user/specialist/specialist", compact('data'));
    }

    public function detail($id)
    {
        $config = Config::find(1);
        $data['menu'] = "specialist";
        $data['Marketing'] = Marketing::where("slug",$id)->limit(1)->first();

        SEOTools::opengraph()->setUrl( route("specialist.id",$id) );
        SEOTools::setTitle($data['Marketing']->name.' - '.$config->name);
        SEOTools::setDescription(str_limit(strip_tags($data['Marketing']->description), 80));
        if($data['Marketing']->ImagePathSmall && isset($data['Marketing']->ImagePathSmall)){
            SEOTools::addImages($data['Marketing']->ImagePathSmall);
        }else{
            SEOTools::addImages($config->LogoPath);
        }

        return view("user/specialist/detail", compact('data'));
    }
}
