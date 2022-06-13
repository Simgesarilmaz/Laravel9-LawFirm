<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Profiles;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Profiles::all();
        return view('admin.profile.index',[
            'data'=>$data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users_all=Profiles::AllUsers();
        $data=Profiles::all();
        return view('admin.profile.create',[
            'data'=>$data,
            'users'=>$users_all

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new Profiles();
        $data->user_id=$request->user_id;
        $data->address=$request->address;
        $data->phone=$request->phone;
        $data->type=$request->type;
        if($request->file('image')){
            $data->image= $request->file('image')->store('images');
        }
        $data->save();
        return redirect('admin/profile');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Profiles::find($id);
        return view('admin.profile.show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Profiles::find($id);
        $users_all=Profiles::AllUsers();
        return view('admin.profile.edit',[
            'data'=>$data,
            'users'=>$users_all
        ]);

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
        $data=Profiles::find($id);
        $data->user_id=$request->user_id;
        $data->address=$request->address;
        $data->phone=$request->phone;
        $data->type=$request->type;
        if($request->file('image')){
            $data->image= $request->file('image')->store('images');
        }
        $data->save();
        return redirect('admin/profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Profiles::find($id);
        $data->delete();
        return redirect('admin/profile');
    }
}
