<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Marketing;

class SpecialistController extends Controller
{
    public function index()
    {
        $data['menu'] = "specialist";
        $data['Marketing'] = Marketing::with('level')->orderBy('created_at', 'desc')->paginate(3);
        return view("user/specialist/specialist", compact('data'));
    }

    public function detail($id)
    {
        $data['menu'] = "specialist";
        $data['Marketing'] = Marketing::find($id);
        return view("user/specialist/detail", compact('data'));
    }
}
