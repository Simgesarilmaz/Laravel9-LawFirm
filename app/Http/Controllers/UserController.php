<?php

namespace App\Http\Controllers;

use App\Http\Controllers\admin\AppointmentController;
use App\Models\Appointment;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.user.index');
    }


    public function reviews()
    {
        $comments = Comment::where('user_id','=',Auth::id())->get();
        return view('home.user.comments', [
            'comments' => $comments,
        ]);
    }
    public function appointment_store (Request $request)
    {
        $data=new Appointment();
        $data->user_id=$request->lawyer_id;
        $data->service_id=$request->service_id;
        $data->lawyer_id=$request->lawyer_id;
        $data->date=$request->date;
        $data->time=$request->time;
        $data->price=$request->price;
        $data->payment=$request->payment;
        $data->ip=$request->ip();
        $data->note=$request->note;
        $data->status=$request->status;
        $data->created_at=date("Y-m-d H:i:s");
        $data->save();
        return view('home.user.appointment_success');
        //
    }
    public function appointment($id=null)
    {
        $lawyersList=Appointment::LawyersList();
        $servicesList=Appointment::ServicesList();
        $data=Appointment::find($id);
        return view('home.user.appointment',[
            'data'=>$data,
            "lawyers"=>$lawyersList,
            "services"=>$servicesList,
        ]);
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
    public function reviewdestroy($id)
    {
        $data=Comment::find($id);
        $data->delete();
        return redirect('userpanel/reviews');
    }

}
