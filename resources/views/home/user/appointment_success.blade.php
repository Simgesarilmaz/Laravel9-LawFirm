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
                <div style=""text-align:center; class="col-md-6 col-sm-6 col-xs-12 mx-auto">
                    <h3>Appointment Successfully created.</h3>
                </div>
            </div>
        </div>
    </div>
@endsection
