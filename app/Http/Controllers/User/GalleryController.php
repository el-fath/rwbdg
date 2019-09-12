<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Config;
use App\Model\Album;
use App\Model\AlbumPhoto;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Routing\Route;
use Astrotomic\Translatable\Locales;
use App;
use Globals;
use Lang;
class GalleryController extends Controller
{
    public function __construct(Request $request)
    {
        $config = Config::find(1);
        SEOTools::setTitle(trans('gallery.title').' - '.$config->name);
        SEOTools::setDescription($config->description);
        SEOTools::opengraph()->setUrl( url('/') );
        SEOTools::addImages($config->LogoPath);
    }

    public function index()
    {

        // dd();
        $data['menu'] = "gallery";
        $data['albums'] = Album::all();
        return view("user/gallery",compact('data'));
    }

    public function photos($id)
    {
        // dd();
        $data['menu'] = "gallery";
        $data['album'] = Album::find($id);
        $data['photos'] = AlbumPhoto::where("album_id",$id)->get();
        return view("user/gallery_photos",compact('data'));
    }
}
