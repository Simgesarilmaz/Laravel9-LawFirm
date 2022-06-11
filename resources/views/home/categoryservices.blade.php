@extends('layouts.home')

@section('title', $category->title.' Services')

@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>{{$category->title}}</h2>
                </div>
                <div class="col-12">
                    <a href="{{route('home')}}">Home</a>
                    <a href="">Practices Areas / {{$category->title}}</a>
                </div>
            </div>
        </div>
    </div>
    <div class="service">
        <div class="container">
            <div class="section-header">
                <h2>Our Practices Areas</h2>
            </div>
            <div class="row">
                @foreach($services as $rs)
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}"
                                     style="height: 200px;width: 350px">
                            </div>
                            <h3>{{$rs->title}}</h3>
                            <p>
                                {{$rs->detail}}
                            </p>
                            <a class="btn" href="{{route('service',['id'=>$rs->id])}}">Learn More</a>

                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection
