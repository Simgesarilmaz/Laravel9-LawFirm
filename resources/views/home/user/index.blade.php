@extends('layouts.home')

@section('title','User Panel ')
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
        <div class="section-header">
            <h2>User Menu</h2>
        </div>
        @include('home.user.usermenu')
        <div class="row">
            <div class="col-md-6">
                <div class="contact-info">
                    <div class="section-header">
                        <h4 class="title">User Profile</h4>
                    </div>
                    <div class="contact-item">
                        <i class="fa fa-map-marker-alt"></i>
                        <div class="contact-text">
                            <h2>Location</h2>
                            <p>123 Street, New York, USA</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fa fa-phone-alt"></i>
                        <div class="contact-text">
                            <h2>Phone</h2>
                            <p>+012 345 67890</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fa fa-envelope"></i>
                        <div class="contact-text">
                            <h2>Email</h2>
                            <p>info@example.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
