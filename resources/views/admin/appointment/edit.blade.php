@extends('layouts.adminbase')

@section('title', 'Edit Appointment:'.$data->title)

@section('content')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">Edit Appointment: {{$data->title}}</h1>

                </div>
            </div>
            <!-- /. ROW  -->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Appointment Elements
                    </div>
                    <div class="panel-body">
                        <form role="form" action="{{route('admin.appointment.update',['id'=>$data->id])}}" method="post"
                              enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Date</label>
                                <input class="form-control" type="date" name="date" value="{{$data->date}}">

                            </div>
                            <div class="form-group">
                                <label>Time</label>
                                <input class="form-control" type="time" name="time" value="{{$data->time}}">

                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input class="form-control" type="text" name="price"
                                       value="{{$data->price}}">

                            </div>
                            <div class="form-group">
                                <label>Payment</label>
                                <select class="form-control" name="payment">
                                    <option selected>{{$data->payment}}</option>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Note</label>
                                <input class="form-control" type="text" name="note" value="{{$data->note}}">

                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                    <option selected>{{$data->status}}</option>
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-info">Update Appointment</button>

                        </form>
                    </div>
                </div>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
    </div>
    <!-- /. PAGE WRAPPER  -->
@endsection
