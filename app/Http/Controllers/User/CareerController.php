<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Profile;

class CareerController extends Controller
{
    public function index()
    {
        $data['menu'] = "career";
        $data['profile'] = Profile::find(1);
        // return $data['profile'];
        return view("user/career",compact('data'));
    }
}
