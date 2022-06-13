@extends('layouts.home')

@section('title','User Comments & Reviews')
@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>User Comment</h2>
                </div>
                <div class="col-12">
                    <a href="{{route('home')}}">Home</a>
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
                    <h1 class="title">User Comments & Reviews</h1>
                    <div class="input-lg">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th style="width: 10px">id</th>
                                <th>Service</th>
                                <th>Subject</th>
                                <th>Review</th>
                                <th>Rate</th>
                                <th>Status</th>
                                <th style="width: 40px">Delete</th>
                            </tr>
                            </thead>
                            <tr>
                                @foreach($comments as $rs)
                                    <td>{{$rs->id}}</td>
                                    <td>
                                        <a href="{{route('service',['id'=>$rs->service_id])}}">{{$rs->service->title}}</a>
                                    </td>

                                    <td>{{$rs->subject}}</td>
                                    <td>{{$rs->comment}}</td>
                                    <td>{{$rs->rate}}</td>
                                    <td>{{$rs->status}}</td>


                                    <td><a href="{{route('userpanel.reviewdestroy',['id'=>$rs->id])}}"
                                           onclick="return confirm('Deleting!! Are you sure?')" class="btn btn-danger">Delete</a>
                                    </td>
                            </tr>
                            @endforeach
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
