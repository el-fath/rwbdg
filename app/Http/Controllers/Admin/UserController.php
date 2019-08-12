<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Model\User;
use App\Model\Group_user;
use Illuminate\Support\Str;
use Yajra\Datatables\Datatables;

class UserController extends Controller
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
        $data['title'] = "User";
        $data['data'] = User::with('group')->get()->sortByDesc('id');
        return view("admin/user/index",compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['typeForm'] = "Create";
        $data['title'] = "User";
        $data['group'] = Group_user::all();

        return view("admin/user/form",compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'group_id' => $request->group,
            'password' => Hash::make($request->password)
        ];

        $data = User::create($data);

        return response()->json([
            'Code'    => 200,
            'Message' => "Success Added"
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
        $data['dataModel'] = User::find($id);
        $data['group'] = Group_user::all();
        $data['typeForm'] = "Edit";
        $data['title'] = "User";
        return view("admin/user/form",compact('data'));
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
        $data = User::find($id);

        if (isset($request->password)) {
            $newData = [
                'password' => Hash::make($request->password)
            ];
        }else{
            $newData = [
                'name' => $request->name,
                'email' => $request->email,
                'group_id' => $request->group
            ];
        }

        $data->update($newData);

        return response()->json([
            'Code'    => 200,
            'Message' => "Edit data Success"
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
        $data = User::find($id);
        $data->delete();
        
        return response()->json([
            'Code'    => 200,
            'Message' => "Delete Success"
        ]);
    }
}
