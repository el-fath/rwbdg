<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Profile;
use App\Model\Config;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Routing\Route;
use Astrotomic\Translatable\Locales;
use App;
use Globals;
use Lang;

class CareerController extends Controller
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
        $data['menu'] = "career";
        $data['profile'] = Profile::find(1);
        // return $data['profile'];
        return view("user/career",compact('data'));
    }
}
