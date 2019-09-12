<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Config;
use App\Model\Slide;
use App\Model\Property;
use App\Model\PropertyCategory;

use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Routing\Route;
use Astrotomic\Translatable\Locales;
use App;
use Globals;
use Lang;

class PropertyController extends Controller
{
    public function __construct(Request $request)
    {
        $config = Config::find(1);
        SEOTools::setTitle(trans('property.title').' - '.$config->name);
        SEOTools::setDescription($config->description);
        SEOTools::opengraph()->setUrl( url('/') );
        // SEOTools::addImages($config->LogoPath);
    }


    public function index()
    {
        $data['menu'] = "property";
        $data['property_type'] = Globals::TYPE_PROPERTY;
        $data['property_transaction'] = Globals::TYPE_TRANSACTION;
        $data['property_categories'] = PropertyCategory::all();
        $data['property_latest'] = Property::orderBy('created_at', 'desc')->get();
        return view("user/property",compact('data'));
    }

    public function detail($id)
    {
        $config = Config::find(1);
        // return
        $data['data'] = Property::whereTranslation("slug",$id)->with('marketing')->limit(1)->first();
        $data['menu'] = "property";

        SEOTools::opengraph()->setUrl( route("property.id",$id ));
        SEOTools::setTitle($data['data']->title.' - '.$config->name);
        SEOTools::setDescription(str_limit(strip_tags($data['data']->description), 80));
        if($data['data']->ImagePathSmall && isset($data['data']->ImagePathSmall)){
            SEOTools::addImages($data['data']->ImagePathSmall);
        }else{
            SEOTools::addImages($config->LogoPath);
        }


        return view("user/property/detail",compact('data'));
    }
}
