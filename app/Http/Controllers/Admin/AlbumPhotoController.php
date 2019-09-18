<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Album;
use App\Model\AlbumPhoto;

class AlbumPhotoController extends Controller
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
    public function index($id)
    {
        $data['data'] = AlbumPhoto::where('album_id', '=', $id)->get();
        $data['parent'] = Album::find($id);
        $data['title'] = "Album Photo ".$data['parent']->title;
        return view("admin/album_photo/index",compact('data'));
    }

    public function get_photo($id){
        $data = AlbumPhoto::where('album_id', '=', $id)->get();

        $arrData = array();
        foreach($data as $row){
            $arrData[] = $row->ImagePath;
        }

        return $arrData;
    }

    public function add_photo($id,Request $request)
    {

        if ($request->file('file_data')) {
            $file    = $request->file('file_data');
            $ext     = $file->getClientOriginalExtension();
            $newName = rand(100000,1001238912).".".$ext;
            $file->move($this->img_location.'album-photo',$newName);
        }else{
            return [
                'error' => 'No file found'
            ];
        }

        $data = [
            'image' => $newName,
            'album_id' => $id
        ];

        $data = AlbumPhoto::create($data);

        return [
            'chunkIndex' => $data->ImagePath,         // the chunk index processed
            'initialPreview' => $data->ImagePath, // the thumbnail preview data (e.g. image)
            'initialPreviewConfig' => [
                [
                    'type' => 'image',      // check previewTypes (set it to 'other' if you want no content preview)
                    'caption' => $data->image, // caption
                    'key' => $data->id,       // keys for deleting/reorganizing preview
                    'fileId' => $data->id,    // file identifier
                    'size' => 0,    // file size
                    'zoomData' => $data->ImagePath, // separate larger zoom data
                ]
            ],
            'append' => true
        ];
    }

    public function delete_photo($id)
    {
        $data = AlbumPhoto::find($id);
        if ($data->image != NULL) {
            $myFile = $this->img_location.'album-photo/'.$data->image;
            @unlink($myFile);
        }
        $data->delete();

        return [
            'success' => 'true'
        ];
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
