<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Requests\ReCaptchaFormRequest;
use App\Http\Controllers\Controller;
use App\Model\ContactMessage;
use App\Model\Config;
use Artesaos\SEOTools\Facades\SEOTools;

class ContactController extends Controller
{
    public function __construct()
    {
        $config = Config::find(1);
        SEOTools::setTitle('Contact Us - '.$config->name);
        SEOTools::setDescription($config->description);
        SEOTools::opengraph()->setUrl( url('/') );
        SEOTools::addImages($config->LogoPath);
    }


    public function index()
    {
        return view("user/contact");
    }
    
    public function store(ReCaptchaFormRequest $request)
    {
        try{
            $data = [
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'message' => $request->message
            ];
            
            // $data = ContactMessage::create($data);
            
            return response()->json([
                'Code'             => 200,
                'Message'          => "Success"
            ]);
        } catch (Esception $e) {
            return response()->json([
                'Code'             => 401,
                'Message'          => $e->getMessage()
            ]);
        }
    }
}
