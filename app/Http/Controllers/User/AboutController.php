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
        $data['property_rent'] = Property::where("type_transaction","rent")->orderBy('created_at', 'desc')->limit(6)->get();
        $data['property_sale'] = Property::where("type_transaction","sale")->orderBy('created_at', 'desc')->limit(6)->get();
        $data['profile'] = Profile::all();
        // return $data['profile'];
        return view("user/about",compact('data'));
    }
}
