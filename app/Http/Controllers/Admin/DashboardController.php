<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\ContactMessage;
use App\Model\Marketing;
use App\Model\Property;
use Globals;


class DashboardController extends Controller
{
    //

    public function index()
    {
        $data['title'] =  "Dashboard";
        $data['messages'] = ContactMessage::limit(10);
        $data['countMarketing'] = Marketing::count();
        $data['countSecondaryProperty'] = Property::where("type_property",Globals::TYPE_PROPERTY['secondary'])->count();
        $data['countPrimaryProperty'] = Property::where("type_property",Globals::TYPE_PROPERTY['primary'])->count();
        return view("admin/dashboard",compact('data'));
    }

    public function notFound()
    {
        $data['title'] = "page not found";
        return view("admin/notfound",compact('data'));
    }
}
