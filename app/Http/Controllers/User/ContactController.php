<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\ContactMessage;

class ContactController extends Controller
{
    public function index()
    {
        return view("user/contact");
    }
    
    public function store(Request $request)
    {
        try{
            $data = [
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'message' => $request->message
            ];
            
            $data = ContactMessage::create($data);
            
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
