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

class PropertyController extends Controller
{
    public function __construct(Request $request)
    {
        $config = Config::find(1);
        SEOTools::setTitle(trans('property.title').' - '.$config->name);
        SEOTools::setDescription($config->description);
        SEOTools::opengraph()->setUrl( url('/') );
        SEOTools::addImages($config->LogoPath);
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
        // return
        $data['data'] = Property::with('marketing')->find($id);
        $data['menu'] = "property";
        return view("user/property/detail",compact('data'));
    }
}
