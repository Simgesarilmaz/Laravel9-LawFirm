@extends('layouts.home')

@section('title', $data->title)

@section('content')

    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>{{$data->title}}</h2>
                </div>
                <div class="col-12">
                    <a href="">Home</a>
                    <a href="">{{$data->title}}</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Service Start -->
    <div class="service">
        <div class="container">
            <div class="section-header">
                <h2>Our Practices Areas</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fa fa-landmark"></i>
                        </div>
                        <h3>{{$data->title}}</h3>
                        <p>
                            {!! $data->detail !!}
                        </p>
                        <a class="btn" href="">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
    <div class="section-header">
        <h2>Review From</h2>
        @include('home.messages')
    </div>
    <div class="col-lg-12">
        <h4 class="text-uppercase">Write Your Review</h4>
        <p>Your email address will not be published</p>
        <form class="review-form" action="{{route('storecomment')}}" method="post">
            @csrf
            <input class="input" type="hidden" name="service_id" value="{{$data->id}}"/>
            <div class="form-group">
                <input class="input" type="text" name="subject" placeholder="Subject"/>
            </div>
            <div class="form-group">
                <textarea class="input" name="comment" placeholder="Your Comment"></textarea>
            </div>
            <div class="form-group">
                <div class="input-rating">
                    <strong class="text-uppercase">Your Rating</strong>
                    <div class="stars">
                        <input type="radio" id="star5" name="rate" value="5"/><label for="star5"></label>
                        <input type="radio" id="star4" name="rate" value="4"/><label for="star4"></label>
                        <input type="radio" id="star3" name="rate" value="3"/><label for="star3"></label>
                        <input type="radio" id="star2" name="rate" value="2"/><label for="star2"></label>
                        <input type="radio" id="star1" name="rate" value="1"/><label for="star1"></label>
                    </div>
                </div>
            </div>
            @auth()
                <button class="btn btn-primary">Submit</button>
            @else
                <a href="/login" class="btn btn-primary">For Submit Your Review, Please Login</a>
            @endauth

        </form>
    </div>
    <div class="testimonial">
        <div class="container">
            <div class="section-header">
                <h2>Review From Client</h2>
            </div>
            <div class="owl-carousel testimonials-carousel">
                @foreach($review as $rs)
                <div class="testimonial-item">
                        <i class="fa fa-quote-right"></i>
                        <div class="row align-items-center">
                            <div class="col-9">
                                <h2>{{$rs->user->name}}</h2>
                                <p>{{$rs->subject}}</p>
                            </div>
                            <div class="col-12">
                                <p>
                                    {{$rs->comment}}                            </p>
                            </div>
                        </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection





