<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Pages;

class PagesController extends Controller
{
    public function index()
    {
        echo "asd";
    }
    public function show($slug)
    {
       $data['menu'] = $slug;
       $data['page'] = Pages::whereTranslation("slug",$slug)->limit(1)->first();
       return view("user/pages",compact('data'));
    }
}
