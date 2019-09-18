<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Model\Property;
use App\Model\PropertyCategory;
use App\Model\Marketing;
use App\Model\PropertyMarketplace;
use App\Model\MarketplaceProperty;
use App\Model\Province;
use App\Model\City;
use App\Model\District;
use Globals;

class PropertyController extends Controller
{
    public function __construct()
    {
        $this->img_location             = "public/image/";
        $this->data['categories']       = PropertyCategory::all();
        $this->data['marketings']       = Marketing::all();
        $this->data['marketplaces']     = PropertyMarketplace::all();
        $this->data['province']         = Province::all();
        $this->data['certificate']      = Globals::CERTIFICATE_PROPERTY;
        $this->data['type_property']    = Globals::TYPE_PROPERTY;
        $this->data['type_transaction'] = Globals::TYPE_TRANSACTION;
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->data;
        $data['title'] = "Property";
        $data['data'] = Property::all()->sortByDesc('id');
        
        return view("admin/property/index",compact('data'));
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
        $data['title'] = "Property";
        return view("admin/property/form",compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        if ($request->file('image')) {
            $file    = $request->file('image');
            $ext     = $file->getClientOriginalExtension();
            $newName = rand(100000,1001238912).".".$ext;
            $file->move($this->img_location.'property',$newName);
        }else{
            $newName = NULL;
        }

        $data['image']       = $newName;

        $data['sale_price']  = (isset($data['sale_price'])) ? str_replace(",","",$data['sale_price']): 0;
        $data['rent_price']  = (isset($data['rent_price'])) ? str_replace(",","",$data['rent_price']): 0;

        $data['status']      = (isset($data['status']) && $data['status'] == "on") ? 1: 0;
        $data['is_publised'] = (isset($data['is_publised']) && $data['is_publised'] == "on") ? 1: 0;
        $data['is_popular']  = (isset($data['is_popular']) && $data['is_popular'] == "on") ? 1: 0;
        $data['is_featured'] = (isset($data['is_featured']) && $data['is_featured'] == "on") ? 1: 0;
        
        $data['province_id'] = (isset($data['province_id'])) ? $data['province_id']: 0;
        $data['city_id']     = (isset($data['city_id'])) ? $data['city_id']        : 0;
        $data['district_id'] = (isset($data['district_id'])) ? $data['district_id']: 0;
        
        $marketplaces = $data['marketplace'];
        unset($data['marketplace']);
        $data = Property::create($data);

        $requestindo         = $request->input('id');
        $requestindo['slug'] = Str::slug($requestindo['title'].'-'.$data->id, '-');
        $requesteng          = $request->input('en');
        $requesteng['slug']  = Str::slug($requesteng['title'].'-'.$data->id, '-');

        $dataTrans = [
            'id' => $requestindo,
            'en' => $requesteng,
        ];

        $data->fill($dataTrans);
        $data->save();


        foreach ($marketplaces as $key => $row) {
            $dataDetail = [
                "property_id" => $data->id,
                'marketplace_id' => $key,
                'url' => $row
            ];
            $dataDetail = MarketplaceProperty::create($dataDetail);
        }

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
        $data['dataModel'] = Property::find($id);
        $data['typeForm'] = "Edit";
        $data['title'] = "Property";

        $arrMarketplace = [];
        foreach ($data['marketplaces'] as $key => $value) {
            $value->url = "";
            $detail = MarketplaceProperty::where("property_id",$id)->where('marketplace_id', $value->id)->first();
            if($detail){
                $value->url = $detail->url;
            }
            $arrMarketplace[] = $value;
        }

        $data['marketplaces'] = $arrMarketplace;

        if($data['dataModel']->province_id){
            $data['city'] = City::where("province_id",$data['dataModel']->province_id)->get();
        }

        if($data['dataModel']->city_id){
            $data['district'] = District::where("city_id",$data['dataModel']->city_id)->get();
        }

        return view("admin/property/form",compact('data'));
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
        $data = Property::find($id);

        $dataReq = $request->all();
        $newFile = [];
        if ($request->file('image')) {

            $myFile = $this->img_location.'property/'.$data->image;
            if (file_exists($myFile)){
                @unlink($myFile);
            }

            $file    = $request->file('image');
            $ext     = $file->getClientOriginalExtension();
            $newName = rand(100000,1001238912).".".$ext;
            $file->move($this->img_location.'property',$newName);
            
            $newFile = [ 'image' => $newName ];
            // $data->update($newFile);
        }

        if(count($newFile)){
            $dataReq = array_merge($dataReq,$newFile);
        }

        $dataReq['sale_price']  = (isset($dataReq['sale_price'])) ? str_replace(",","",$dataReq['sale_price']): 0;
        $dataReq['rent_price']  = (isset($dataReq['rent_price'])) ? str_replace(",","",$dataReq['rent_price']): 0;

        $dataReq['status']      = (isset($dataReq['status']) && $dataReq['status'] == "on") ? 1: 0;
        $dataReq['is_publised'] = (isset($dataReq['is_publised']) && $dataReq['is_publised'] == "on") ? 1: 0;
        $dataReq['is_popular']  = (isset($dataReq['is_popular']) && $dataReq['is_popular'] == "on") ? 1: 0;
        $dataReq['is_featured'] = (isset($dataReq['is_featured']) && $dataReq['is_featured'] == "on") ? 1: 0;

        $dataReq['province_id'] = (isset($dataReq['province_id'])) ? $dataReq['province_id']: 0;
        $dataReq['city_id']     = (isset($dataReq['city_id'])) ? $dataReq['city_id']        : 0;
        $dataReq['district_id'] = (isset($dataReq['district_id'])) ? $dataReq['district_id']: 0;

        $marketplaces = $dataReq['marketplace'];
        unset($dataReq['marketplace']);
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


        if($marketplaces){
            MarketplaceProperty::where("property_id",$data->id)->delete();
            foreach ($marketplaces as $key => $row) {
                $dataDetail = [
                    "property_id" => $data->id,
                    "marketplace_id" => $key,
                    "url" => $row
                ];
                // dd($dataDetail);
                $dataDetail = MarketplaceProperty::create($dataDetail);
            }
        }

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
        $data = Property::find($id);
        if ($data->image != NULL) {
            $myFile = $this->img_location.'property/'.$data->image;
            @unlink($myFile);
        }
        $data->delete();
        return response()->json([
            'Code'             => 200,
            'Message'          => "Delete Success"
        ]);
    }
}
