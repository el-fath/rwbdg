<?php

namespace App\Http\Controllers\Admin;

use App\Model\Config;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $title = "Config";
         $typeForm =  "edit";
         $dataModel = Config::find(1);
         return view("admin/config/index",compact('title','typeForm','dataModel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Config  $config
     * @return \Illuminate\Http\Response
     */
    public function show(Config $config)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Config  $config
     * @return \Illuminate\Http\Response
     */
    public function edit(Config $config)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Config  $config
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Config $config)
    {
        try {
            $data                  =  Config   :: find(1);
            $newdata               =  [
                'name'             => $request->name,
                'description'      => $request->description,
                'meta_description' => $request->meta_description,
                'meta_keyword'     => $request->meta_keyword,
                'head_script'      => $request->head_script,
                'body_script'      => $request->body_script,
            ];
            $data->update($newdata);
    
            if ($request->file('imglogo')) {
                $myFile            =  "public/image/config/".$data->logo;
                if ($data->logo) {
                    @unlink($myFile);
                }
    
                $file              =  $request->file('imglogo');
                $ext               =  $file->getClientOriginalExtension();
                $newName           =  rand(100000,1001238912).".".$ext;
                $file->move('public/image/config',$newName);

                $newdata           =  [ 'logo' => $newName ];
                $data->update($newdata);
            }

            if ($request->file('imgfavicon')) {
                $myFile            =  "public/image/config/".$data->favicon;
                if ($data->favicon) {
                    @unlink($myFile);
                }
    
                $file              =  $request->file('imgfavicon');
                $ext               =  $file->getClientOriginalExtension();
                $newName           =  rand(100000,1001238912).".".$ext;
                $file->move('public/image/config',$newName);

                $newdata           =  [ 'favicon' => $newName ];
                $data->update($newdata);
            }


            return response()->json([
                'Code'             => 200,
                'Message'          => "Success updated"
            ]);
        } catch (Esception $e) {
            return response()->json([
                'Code'             => 401,
                'Message'          => $e->getMessage()
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Config  $config
     * @return \Illuminate\Http\Response
     */
    public function destroy(Config $config)
    {
        //
    }
}
