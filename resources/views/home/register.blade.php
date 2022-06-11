@extends('layouts.home')

@section('title','User Registration Page ')

@section('content')
    <div class="page-header" style="margin-top: 0px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>User Login</h2>
                </div>
                <div class="col-12">
                    <a href="{{route('home')}}">Home</a>
                    <a href="">User Registration</a>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="col-md-12">
                @include('auth.register')
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
