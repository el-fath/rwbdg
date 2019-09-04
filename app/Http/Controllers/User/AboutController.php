<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Profile;
use App\Model\Property;

class AboutController extends Controller
{
    public function index()
    {
        $data['menu'] = "about";
        
        return view("user/about",compact('data'));
    }
}
