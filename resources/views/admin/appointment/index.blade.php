@extends('layouts.adminbase')

@section('title', 'Appointment List')


@section('content')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line"></h1>
                </div>
            </div>
            <!-- /. ROW  -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Appointments List
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th style="width: 10px">id</th>
                                <th>Service</th>
                                <th>Lawyer</th>
                                <th>Date-Time</th>
                                <th>Price</th>
                                <th>Payment</th>
                                <th>Note</th>

                                <th style="width: 40px">Delete</th>
                            </tr>
                            </thead>
                            <tr>
                                @foreach($data as $rs)
                                    <td>{{$rs->id}}</td>
                                    <td>{{$rs->service_title}}</td>
                                    <td>{{$rs->lawyer_fullname}}</td>
                                    <td>{{$rs->date}} {{$rs->time}}</td>
                                    <td>{{$rs->price}}</td>
                                    <td>{{$rs->payment}}</td>
                                    <td>{{$rs->note}}</td>



                                    <td><a href="{{route('admin.appointment.destroy',['id'=>$rs->id])}}"
                                           onclick="return confirm('Deleting!! Are you sure?')" class="btn btn-danger">Delete</a>
                                    </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
@endsection
