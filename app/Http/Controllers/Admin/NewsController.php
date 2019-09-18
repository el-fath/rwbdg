<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\News;
use App\Model\NewsCategory;
use App\Model\Property;
use Illuminate\Support\Str;
use Yajra\Datatables\Datatables;

class NewsController extends Controller
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
        $data['title'] = "News";
        $data['data'] = News::all()->sortByDesc('id');
        
        return view("admin/news/index",compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['typeForm'] = "create";
        $data['title'] = "News";
        $data['category'] = NewsCategory::all()->sortByDesc('id');
        $data['property'] = Property::all()->sortByDesc('id');
        return view("admin/news/form",compact('data'));
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
            $file->move($this->img_location.'news',$newName);
        }else{
            $newName = NULL;
        }

        
        $data = $request->all();
        $data['image'] = $newName;
        $data = News::create($data);

        $requestindo = $request->input('id');
        $requestindo['slug'] = Str::slug($requestindo['title'].'-'.$data->id, '-');
        $requesteng = $request->input('en');
        $requesteng['slug'] = Str::slug($requesteng['title'].'-'.$data->id, '-');

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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['dataModel'] = News::find($id);
        $data['typeForm'] = "Edit";
        $data['title'] = "News";
        $data['category'] = NewsCategory::all()->sortByDesc('id');
        $data['property'] = Property::all()->sortByDesc('id');
        return view("admin/news/form",compact('data'));
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
        $data = News::find($id);
        $newName = "";
        if ($request->file('image')) {

            $myFile = $this->img_location.'news/'.$data->image;
            if (file_exists($myFile)){
                @unlink($myFile);
            }

            $file    = $request->file('image');
            $ext     = $file->getClientOriginalExtension();
            $newName = rand(100000,1001238912).".".$ext;
            $file->move($this->img_location.'news',$newName);
            
            $newFile = [ 'image' => $newName ];
            $data->update($newFile);
        }

        $dataReq = $request->all();
        if($newName){
            $dataReq['image'] = $newName;
        }
        
        $requestindo = $request->input('id');
        $requestindo['slug'] = Str::slug($requestindo['title'].'-'.$data->id, '-');
        $requesteng = $request->input('en');
        $requesteng['slug'] = Str::slug($requesteng['title'].'-'.$data->id, '-');

        $dataTrans = [
            'id' => $requestindo,
            'en' => $requesteng,
        ];

        $data->update($dataReq);
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
        $data = News::find($id);
        if ($data->image != NULL) {
            $myFile = $this->img_location.'news/'.$data->image;
            @unlink($myFile);
        }
        $data->delete();
        return response()->json([
            'Code'             => 200,
            'Message'          => "Delete Success"
        ]);
    }
}
