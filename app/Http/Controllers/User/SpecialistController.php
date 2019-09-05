<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Marketing;

class SpecialistController extends Controller
{
    public function index()
    {
        $data['Marketing'] = Marketing::with('level')->get();
        return view("user/specialist/specialist", compact('data'));
    }
}
