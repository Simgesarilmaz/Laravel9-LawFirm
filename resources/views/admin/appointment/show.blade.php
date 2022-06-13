@extends('layouts.adminwindow')

@section('title', 'Show Appointment:');


@section('content')

    <section class="content">
        <div class="panel panel-default">
            <div class="panel-heading">
                Details Appointment
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th style="width: 200px">Id</th>
                            <th>{{$data->id}}</th>
                        </tr>
                        <tr>
                            <th>Service</th>
                            <td>{{$data->service_title}}</td>
                        </tr>
                        <tr>
                            <th>Lawyer</th>
                            <td>{{$data->lawyer_fullname}}</td>
                        </tr>
                        <tr>
                            <th>Date</th>
                            <td>{{$data->date}}</td>
                        </tr>
                        <tr>
                            <th>Time</th>
                            <td>{{$data->time}}</td>
                        </tr>
                        <tr>
                            <th>Ip Number</th>
                            <td>{{$data->ip}}</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>{{$data->status}}</td>
                        </tr>
                        <tr>
                            <th>Created Data</th>
                            <td>{{$data->created_at}}</td>
                        </tr>
                        <tr>
                            <th>Update Data</th>
                            <td>{{$data->updated_at}}</td>
                        </tr>
                        <tr>
                            <th>Admin Note :</th>
                            <td>
                                <form role="form" action="{{route('admin.appointment.update',['id'=>$data->id])}}" method="post">
                                    @csrf
                                    <select name="status">
                                        <option selected>{{$data->status}}</option>
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Update Appointment</button>
                                    </div>
                                </form>
                            </td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- /. PAGE INNER  -->
@endsection
