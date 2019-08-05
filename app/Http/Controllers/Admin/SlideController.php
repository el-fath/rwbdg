<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Slide;

class SlideController extends Controller
{
    public function __construct()
    {
        $this->img_location = "public/image/admin/";
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = "Slide";
        $data['path'] = $this->img_location;
        $data['data'] = Slide::all()->sortByDesc('id');
        return view("admin/slide/index",compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = "Slide";
        $data['job'] = "Add";
        $data['action'] = route('admin.slide.store');
        return view("admin/slide/form",compact('data'));
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
            $file->move($this->img_location.'slide',$newName);
        }else{
            $newName = NULL;
        }

        $data = [
            'title' => $request->title,
            'desc'  => $request->desc,
            'image' => $newName
        ];

        $data = Slide::create($data);

        return redirect('admin/slide')->with('alert', 'New Data Added...!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['value'] = Slide::find($id);
        $data['title'] = "Slide";
        $data['job'] = "Edit";
        $data['action'] = route('admin.slide.update', $id);
        return view("admin/slide/form",compact('data'));
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
        $data = Slide::find($id);

        if ($request->file('image')) {
            $myFile = $this->img_location.'slide/'.$data->image;
            unlink($myFile);

            $file    = $request->file('image');
            $ext     = $file->getClientOriginalExtension();
            $newName = rand(100000,1001238912).".".$ext;
            $file->move($this->img_location.'slide',$newName);
            
            $newFile = [ 'image' => $newName ];
            $data->update($newFile);
        }

        $newData = [
            'title' => $request->title,
            'desc'  => $request->desc
        ];

        $data->update($newData);

        return redirect('admin/slide')->with('alert', 'Data with id '.$data->id.' edited...!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Slide::find($id);
        if ($data->image != NULL) {
            $myFile = $this->img_location.'slide/'.$data->image;
            unlink($myFile);
        }
        $data->delete();
        return redirect('admin/slide')->with('alert', 'Data with id '.$data->id.' deleted...!');
    }
}
