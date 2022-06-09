@extends('layouts.home')

@section('title', $setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)

@section('content')
    <div class="page-header" style="margin-top: 0px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>About Us</h2>
                </div>
                <div class="col-12">
                    <a href="">Home</a>
                    <a href="">About Us</a>
                </div>
            </div>
        </div>
    </div>
    <div class="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <div class="about-img">
                        <img src="{{asset('assets')}}/img/about.jpg" alt="Image">
                    </div>
                </div>
                <div class="col-lg-7 col-md-6">
                    <div class="section-header">
                        <h2>Learn About Us</h2>
                    </div>
                    <div class="row">
                            {!! $setting->aboutus !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
