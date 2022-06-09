@extends('layouts.home')

@section('title','References '. $setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)

@section('content')
    <div class="page-header" style="margin-top: 0px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>References</h2>
                </div>
                <div class="col-12">
                    <a href="{{route('home')}}">Home</a>
                    <a href="">References</a>
                </div>
            </div>
        </div>
    </div>
    <div class="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-6">
                    <div class="row">
                            {!! $setting->references !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
