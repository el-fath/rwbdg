<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Marketing;

class SpecialistController extends Controller
{
    public function index()
    {
        $data['Marketing'] = Marketing::with('level')->paginate(1);
        return view("user/specialist/specialist", compact('data'));
    }

    public function detail($id)
    {
        $data['Marketing'] = Marketing::find($id);
        return view("user/specialist/detail", compact('data'));
    }
}
