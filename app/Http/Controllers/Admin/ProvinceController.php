<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Province;
use Illuminate\Support\Str;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class ProvinceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = "Province";
        $data['data'] = Province::all()->sortByDesc('id');
        return view("admin/province/index",compact('data'));
    }
    
    public function sync()
    {
        $client = new Client();
        $request = $client->get("http://dev.farizdotid.com/api/daerahindonesia/provinsi");
        $response = $request->getBody()->getContents();

        $result = json_decode($response);

        
        if($result->semuaprovinsi){
            foreach($result->semuaprovinsi as $key => $row){
                $province = Province::where('source_id', $row->id)->first();

                if(!$province){
                    $province = new Province;
                }
                $province->source_id = $row->id;
                $province->title = $row->nama;
                $province->save();
            }
        }
        dd($result);

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['typeForm'] = "create";
        $data['title'] = "Province";
        return view("admin/province/form",compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Province::create($request->all());
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
        $data['dataModel'] = Province::find($id);
        $data['typeForm'] = "Edit";
        $data['title'] = "Province";
        return view("admin/province/form",compact('data'));
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
        $object = Province::find($id);
        $object->update($request->all());
        return response()->json([
            'Code'             => 200,
            'Message'          => "Success Edited"
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
        $object = Province::find($id);
        $object->delete();
        return response()->json([
            'Code'             => 200,
            'Message'          => "Delete Success"
        ]);
    }
}
