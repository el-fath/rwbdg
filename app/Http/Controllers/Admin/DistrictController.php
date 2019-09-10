<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\District;
use App\Model\City;
use Illuminate\Support\Str;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Response;


class DistrictController extends Controller
{
    public function __construct()
    {
        $this->img_location             = "public/image/";
        $this->data['city']         = City::all();
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->data;
        $data['title'] = "District";
        $data['data'] = District::all()->sortByDesc('id');
        return view("admin/district/index",compact('data'));
    }

    public function getdistrict(Request $request)
    {
        $id = $request->id;
        $city = District::where("city_id",$id)->get();
        $arr = [
            "meta" => [
                "code" => 200,
                "message" => "Success"
            ],
            "data" => $city->toArray()
        ];
        return Response::json($arr);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = $this->data;
        $data['typeForm'] = "create";
        $data['title'] = "District";
        return view("admin/district/form",compact('data'));
    }

    public function sync()
    {
        ini_set('max_execution_time', 1800);
        $cities = City::all();
        foreach($cities as $city){
            $client = new Client();
            $request = $client->get("http://dev.farizdotid.com/api/daerahindonesia/provinsi/kabupaten/$city->source_id/kecamatan");
            $response = $request->getBody()->getContents();

            $result = json_decode($response);
            // dd($result);
            if($result->kecamatans){
                foreach($result->kecamatans as $key => $row){
                    $district = District::where('source_id', $row->id)->first();

                    if(!$district){
                        $district = new District;
                    }

                    $district->source_id = $row->id;
                    $district->title = $row->nama;
                    $district->city_id = $city->id;

                    // dd($district);
                    $district->save();
                }
            }else{
                dd($result);
            }
        }
        
        echo "done";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        District::create($request->all());
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
        $data = $this->data;
        $data['dataModel'] = District::find($id);
        $data['typeForm'] = "Edit";
        $data['title'] = "District";
        return view("admin/district/form",compact('data'));
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
        $object = District::find($id);
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
        $object = District::find($id);
        $object->delete();
        return response()->json([
            'Code'             => 200,
            'Message'          => "Delete Success"
        ]);
    }
}
