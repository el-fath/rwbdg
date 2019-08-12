<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Album;
use Illuminate\Support\Str;

class AlbumController extends Controller
{
    public function __construct()
    {
        $this->img_location = "public/news/";
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = "Album";
        $data['data'] = Album::all()->sortByDesc('id');
        return view("admin/album/index",compact('data'));
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['typeForm'] = "create";
        $data['title'] = "Album";
        return view("admin/album/form",compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [];
        $data = Album::create($data);
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
        $data['dataModel'] = Album::find($id);
        $data['typeForm'] = "Edit";
        $data['title'] = "Album";
        return view("admin/album/form",compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $data = Album::find($id);
        
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Album::find($id);
        $data->delete();
        return response()->json([
            'Code'             => 200,
            'Message'          => "Delete Success"
        ]);
    }
}
