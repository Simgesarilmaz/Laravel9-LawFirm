@extends('layouts.adminbase')

@section('title', 'Appointment List')

@section('content')
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">Add Appointment</h1>

                </div>
            </div>
            <!-- /. ROW  -->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Appointment Elements
                    </div>
                    <div class="panel-body">
                        <form role="form" action="{{route('admin.appointment.store' )}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Lawyer Name</label>
                                <select class="form-control" name="lawyer_id" style="...">
                                    <option value="0" selected="selected">Choose Lawyer</option>
                                    @foreach($lawyers as $rs)
                                        <option value="{{$rs->id}}">{{$rs->fullname}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Services</label>
                                <select class="form-control" name="service_id" style="...">
                                    <option value="0" selected="selected">Choose Services</option>
                                    @foreach($services as $rs)
                                        <option value="{{$rs->id}}">{{$rs->fullname}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Date</label>
                                <input class="form-control" type="date" name="date">

                            </div>
                            <div class="form-group">
                                <label>Time</label>
                                <input class="form-control" type="time" name="time">

                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input class="form-control" type="number" name="price">

                            </div>

                            <div class="form-group">
                                <label>Payment</label>
                                <select class="form-control" name="payment">
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Note</label>
                                <input class="form-control" type="text" name="note">

                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                            </div>


                            <button type="submit" class="btn btn-info">Save </button>

                        </form>
                    </div>
                </div>
            </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
@endsection
