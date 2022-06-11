@extends('layouts.home')

@section('title','User Panel')
@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>User Panel</h2>
                </div>
                <div class="col-12">
                    <a href="">Home</a>
                    <a href="">User Panel</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="contact">
        <div class="container">
            <div class="col-md-3">
                <h1>User Menu</h1>
            </div>
            <div class="row">
                <div class="col-md-3">
                    @include('home.user.usermenu')
                </div>
                <div class="col-md-9">
                    <h1>User Profile</h1>
                   <div class="input-lg">
                       @include('profile.show')
                   </div>
                </div>
            </div>
        </div>
    </div>
@endsection
