@extends('layouts.home')

@section('title','Frequently Asked Questions | '. $setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jueryq.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
@endsection

@section('content')
    <div class="page-header" style="margin-top: 0px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>FAQ</h2>
                </div>
                <div class="col-12">
                    <a href="{{route('home')}}">Home</a>
                    <a href="">Frequently Asked Questions</a>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="col-md-12">
            <div class="row align-items-center">
                <div class="section-header">
                    <h2>Frequently Asked Questions </h2>
                </div>
            </div>
            <div id="accordion">
                @foreach($datalist as $rs)
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link collapsed" data-toggle="collapse" href="#collapse{{$loop->iteration}}">
                                {{$rs->question}}
                            </a>
                        </div>
                        <div id="collapse{{$loop->iteration}}" class="collapse"
                             data-parent="#accordion">
                            <div class="card-body">
                                {!!$rs->answer!!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection
