<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\PropertyMarketplace;
use Illuminate\Support\Str;

class PropertyMarketPlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = "Property Marketplace";
        $data['data'] = PropertyMarketplace::all()->sortByDesc('id');
        return view("admin/marketplace/index",compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['typeForm'] = "create";
        $data['title'] = "Property Marketplace";
        return view("admin/marketplace/form",compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        PropertyMarketplace::create($request->all());
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
        $data['dataModel'] = PropertyMarketplace::find($id);
        $data['typeForm'] = "Edit";
        $data['title'] = "Property Marketplace";
        return view("admin/marketplace/form",compact('data'));
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
        $object = PropertyMarketplace::find($id);
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
        $object = PropertyMarketplace::find($id);
        $object->delete();
        return response()->json([
            'Code'             => 200,
            'Message'          => "Delete Success"
        ]);
    }
}
