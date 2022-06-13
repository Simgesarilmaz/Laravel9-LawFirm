<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function view;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @return \Illuminate\Http\Request
     */
    public function index(Request $request)
    {
        $Appointments_all = DB::table('appointments')
            ->join('services', 'appointments.service_id', '=', 'services.id')
            ->join('users', 'users.id', '=', 'appointments.lawyer_id')
            ->select('services.title AS service_title', 'appointments.id AS id', 'users.name AS lawyer_fullname', 'appointments.date', 'appointments.time', 'appointments.price', 'appointments.payment', 'appointments.ip', 'appointments.note', 'appointments.status', 'appointments.created_at', 'appointments.updated_at')
            ->get();
        return view('admin.appointment.index',['data'=>$Appointments_all]);
    }
    public function accepted(Request $request)
    {
        $Appointments_all = DB::table('appointments')
            ->join('services', 'appointments.service_id', '=', 'services.id')
            ->join('users', 'users.id', '=', 'appointments.lawyer_id')
            ->select('services.title AS service_title', 'appointments.id AS id', 'users.name AS lawyer_fullname', 'appointments.date', 'appointments.time', 'appointments.price', 'appointments.payment', 'appointments.ip', 'appointments.note', 'appointments.status', 'appointments.created_at', 'appointments.updated_at')
            ->get();
        return view('admin.appointment.index',['data'=>$Appointments_all]);
    }
    public function pending(Request $request)
    {
        $Appointments_all = DB::table('appointments')
            ->join('services', 'appointments.service_id', '=', 'services.id')
            ->join('users', 'users.id', '=', 'appointments.lawyer_id')
            ->select('services.title AS service_title', 'appointments.id AS id', 'users.name AS lawyer_fullname', 'appointments.date', 'appointments.time', 'appointments.price', 'appointments.payment', 'appointments.ip', 'appointments.note', 'appointments.status', 'appointments.created_at', 'appointments.updated_at')
            ->whereRaw('CONCAT(appointments.date," ",appointments.time) > NOW()')
            ->get();
        return view('admin.appointment.index',['data'=>$Appointments_all]);
    }
    public function completed(Request $request)
    {
        $Appointments_all = DB::table('appointments')
            ->join('services', 'appointments.service_id', '=', 'services.id')
            ->join('users', 'users.id', '=', 'appointments.lawyer_id')
            ->select('services.title AS service_title', 'appointments.id AS id', 'users.name AS lawyer_fullname', 'appointments.date', 'appointments.time', 'appointments.price', 'appointments.payment', 'appointments.ip', 'appointments.note', 'appointments.status', 'appointments.created_at', 'appointments.updated_at')
            ->whereRaw('CONCAT(appointments.date," ",appointments.time) < NOW()')
            ->get();
        return view('admin.appointment.index',['data'=>$Appointments_all]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lawyersList=Appointment::LawyersList();
        $servicesList=Appointment::ServicesList();
        return view('admin.appointment.create', [
            "lawyers"=>$lawyersList,
            "services"=>$servicesList
            //'category' => $category,
            //'services' => $services
        ]);
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
        return redirect('admin/appointment');
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
        $data=Appointment::find($id);
        $data->status=$request->status;
        $data->payment=$request->payment;
        $data->save();
        return redirect(route('admin.appointment.show',['id'=>$id]));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Appointment::find($id);
        $data->delete();
        return redirect('admin/appointment');
    }
}
