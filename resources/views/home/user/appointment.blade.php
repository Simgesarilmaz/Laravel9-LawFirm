@extends('layouts.home')

@section('title','Appointment Page')
@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Appointment</h2>
                </div>
                <div class="col-12">
                    <a href="{{route('home')}}">Home</a>
                    <a href="">Appointment</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="contact">
        <div class="container">
            <div class="section-header">
                <h2>Appointment Information</h2>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 mx-auto">
                    <div class="panel panel-info">
                        <div class="panel-body">
                            <form role="form" action="{{route('userpanel.appointmentstore' )}}" method="post" enctype="multipart/form-data">
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
            </div>
        </div>
    </div>
@endsection
