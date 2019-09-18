<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Marketing;
use App\Model\MarketingLevel;
use Illuminate\Support\Str;

class MarketingController extends Controller
{
    public function __construct()
    {
        $this->img_location = "public/image/";
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = "Marketing";
        $data['data'] = Marketing::all()->sortByDesc('id');
        
        return view("admin/marketing/index",compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['typeForm'] = "create";
        $data['title'] = "Marketing";
        $data['level'] = MarketingLevel::all()->sortByDesc('id');
        return view("admin/marketing/form",compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->file('image')) {
            $file    = $request->file('image');
            $ext     = $file->getClientOriginalExtension();
            $newName = rand(100000,1001238912).".".$ext;
            $file->move($this->img_location.'marketing',$newName);
        }else{
            $newName = NULL;
        }

        $data = $request->all();

        $data['image'] = $newName;
       
        $data = Marketing::create($data);
        $data['slug'] = Str::slug($data['name'].'-'.$data->id, '-');

        $requestindo = $request->input('id');
        $requesteng = $request->input('en');
        
        $dataTrans = [
            'id' => $requestindo,
            'en' => $requesteng,
        ];

        $data->fill($dataTrans);
        $data->save();
        return response()->json([
            'Code'             => 200,
            'Message'          => "Success Added"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['dataModel'] = Marketing::find($id);
        $data['level'] = MarketingLevel::all()->sortByDesc('id');
        $data['typeForm'] = "Edit";
        $data['title'] = "Marketing";
        return view("admin/marketing/form",compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Marketing::find($id);
        $newFile = [];
        if ($request->file('image')) {

            $myFile = $this->img_location.'marketing/'.$data->image;
            if (file_exists($myFile)){
                @unlink($myFile);
            }

            $file    = $request->file('image');
            $ext     = $file->getClientOriginalExtension();
            $newName = rand(100000,1001238912).".".$ext;
            $file->move($this->img_location.'marketing',$newName);
            
            $newFile = [ 'image' => $newName ];
            // $data->update($newFile);
        }
        
        $dataArr = $request->all();
        if(count($newFile)){
            $dataArr = array_merge($dataArr,$newFile);
        }

        $dataArr['slug'] = Str::slug($dataArr['name'].'-'.$data->id, '-');

        $data->update($dataArr);
       
        $requestindo = $request->input('id');
        $requesteng = $request->input('en');
        
        $dataTrans = [
            'id' => $requestindo,
            'en' => $requesteng,
        ];

        $data->fill($dataTrans);
        $data->save();
        return response()->json([
            'Code'             => 200,
            'Message'          => "Success Added"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Marketing::find($id);
        if ($data->image != NULL) {
            $myFile = $this->img_location.'marketing/'.$data->image;
            @unlink($myFile);
        }
        $data->delete();
        return response()->json([
            'Code'             => 200,
            'Message'          => "Delete Success"
        ]);
    }
}
