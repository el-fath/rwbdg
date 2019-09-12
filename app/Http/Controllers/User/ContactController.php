<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Requests\ReCaptchaFormRequest;
use App\Http\Controllers\Controller;
use App\Model\ContactMessage;
use App\Model\Profile;
use App\Model\Property;
use App\Model\Config;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Routing\Route;
use Astrotomic\Translatable\Locales;
use Mail;
use App;
use Globals;
use Lang;
class ContactController extends Controller
{
    public function __construct()
    {
        $config = Config::find(1);
        SEOTools::setTitle(trans('contact.title').' - '.$config->name);
        SEOTools::setDescription($config->description);
        SEOTools::opengraph()->setUrl( url('/') );
        SEOTools::addImages($config->LogoPath);
    }


    public function index()
    {
        $data['menu'] = "contact";
        $data['property_rent'] = Property::where("type_transaction","rent")->orderBy('created_at', 'desc')->limit(6)->get();
        $data['property_sale'] = Property::where("type_transaction","sale")->orderBy('created_at', 'desc')->limit(6)->get();
        $data['profile'] = Profile::find(1);
        return view("user/contact", compact('data'));
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
            
            $data = ContactMessage::create($data);

            $this->MailNotification($data);

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

    public function MailNotification($request)
    {
        $data = [
            'pesan' => "Anda mendapat pesan jon",
            'request' => $request,
        ];

        $beautymail = app()->make(\Snowfire\Beautymail\Beautymail::class, ['settings' => null]);
        $beautymail->send('mail.notif', $data, function($message) use ($request)
        {
            $message
                ->from('raywhitebukitdarmogolf@gmail.com',"Ray White Bukit Darmo Golf")
                ->to($request->email, $request->name)
                // ->cc($request->email,$request->name)
                ->subject("Consultation Request");
        });
    }
}
