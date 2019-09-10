<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\City;
use App\Model\Province;
use Illuminate\Support\Str;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Response;


class CityController extends Controller
{
    public function __construct()
    {
        $this->img_location             = "public/image/";
        $this->data['province']         = Province::all();
        
    }
    /**
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->data;
        $data['title'] = "City";
        $data['data'] = City::all()->sortByDesc('id');
        return view("admin/city/index",compact('data'));
    }

    public function getcity(Request $request)
    {
        $id = $request->id;
        $city = City::where("province_id",$id)->get();
        $arr = [
            "meta" => [
                "code" => 200,
                "message" => "Success"
            ],
            "data" => $city->toArray()
        ];
        return Response::json($arr);

    }

    public function sync()
    {
        $province = Province::all();
        foreach($province as $prov){
            $client = new Client();
            $request = $client->get("http://dev.farizdotid.com/api/daerahindonesia/provinsi/$prov->source_id/kabupaten");
            $response = $request->getBody()->getContents();

            $result = json_decode($response);

            if($result->kabupatens){
                foreach($result->kabupatens as $key => $row){
                    $city = City::where('source_id', $row->id)->first();

                    if(!$city){
                        $city = new City;
                    }
                    
                    $type = "Kota";
                    if(str_contains($row->nama, 'Kab. ')){
                        $type = "Kabupaten";
                    }

                    $nama = trim($row->nama,"Kab. ");
                    $nama = trim($nama,"Kota ");

                    $city->source_id = $row->id;
                    $city->title = $nama;
                    $city->type = $type;
                    $city->province_id = $prov->id;

                    // dd($city);
                    $city->save();
                }
            }else{
                dd($result);
            }
        }
        
        echo "done";
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
        $data['title'] = "City";
        return view("admin/city/form",compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        City::create($request->all());
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
        $data = $this->data;
        $data['dataModel'] = City::find($id);
        $data['typeForm'] = "Edit";
        $data['title'] = "City";
        return view("admin/city/form",compact('data'));
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
        $object = City::find($id);
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
        $object = City::find($id);
        $object->delete();
        return response()->json([
            'Code'             => 200,
            'Message'          => "Delete Success"
        ]);
    }
}
