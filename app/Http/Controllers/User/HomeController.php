<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Config;
use Artesaos\SEOTools\Facades\SEOTools;

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
        return view("user/home");
    }
}
