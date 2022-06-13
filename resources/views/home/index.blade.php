@extends('layouts.home')

@section('title', $setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('content')
    @include('home.slider')
    <!-- About Start -->
    <div class="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <div class="about-img">
                        <img src="{{asset('assets')}}/img/about.jpg" alt="Image" width="500" height="300">
                    </div>
                </div>
                <div class="col-md-7 col-md-6">
                    <div class="section-header">
                        <h2>Learn About Us</h2>
                    </div>
                    <div class="about-text">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur
                            facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum,
                            viverra quis sem.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur
                            facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum,
                            viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus. Aenean consectetur
                            convallis porttitor. Aliquam interdum at lacus non blandit.
                        </p>
                        <a class="btn" href="">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Service Start -->

    <div class="service">
        <div class="container">

            <div class="section-header">
                <h2>Our Practices Araeas</h2>
            </div>
            <div class="row">
                @foreach($servicelist1 as $rs)
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
    <!-- Service End -->


    <!-- Feature Start -->
    <div class="feature">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="section-header">
                        <h2>Why Choose Us</h2>
                    </div>
                    <div class="row align-items-center feature-item">
                        <div class="col-5">
                            <div class="feature-icon">
                                <i class="fa fa-gavel"></i>
                            </div>
                        </div>
                        <div class="col-7">
                            <h3>Best law practices</h3>
                            <p>
                                Our attorneys have worked at large law firms and have served as in-house and general
                                counsel to large corporations and banks. We capitalize on our large law firm and
                                in-house training to provide the highest level of service to our clients. Our attorneys
                                have led, negotiated and closed hundreds of high-value business, real estate and
                                commercial transactions for clients ranging from start-ups to Fortune 500 companies in
                                numerous industries, including software, technology, life sciences, financial services,
                                manufacturing, and retail. Our depth and breadth of experience allow us to expertly
                                guide our clients through any transaction.
                            </p>
                        </div>
                    </div>
                    <div class="row align-items-center feature-item">
                        <div class="col-5">
                            <div class="feature-icon">
                                <i class="fa fa-balance-scale"></i>
                            </div>
                        </div>
                        <div class="col-7">
                            <h3>Efficiency & Trust</h3>
                            <p>
                                Our firm is focused on our clients’ demands for an exceptional legal service model that
                                provides value. We understand that, for clients, value is not a mere hourly rate
                                comparison. Value means efficient processes for tracking and reporting; creative
                                approaches to reducing legal risk; enhanced cost certainty; and RESULTS. With each
                                representation,focused on the desired results.
                            </p>
                        </div>
                    </div>
                    <div class="row align-items-center feature-item">
                        <div class="col-5">
                            <div class="feature-icon">
                                <i class="far fa-smile"></i>
                            </div>
                        </div>
                        <div class="col-7">
                            <h3>Results you deserve</h3>
                            <p>
                                Make sure you carefully consider which lawyer you hire to fight for your rights. We
                                believe we’re the right law firm for you for many reasons. Don’t just take our word for
                                it. Read our testimonials. Review our case results. We rise to the challenge when it
                                matters most
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="feature-img">
                        <img src="{{asset('assets')}}/img/feature.jpg" alt="Feature">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- Team Start -->
    <div class="team">
        <div class="container">
            <div class="section-header">
                <h2>Meet Our Expert Attorneys</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{asset('assets')}}/img/team-1.jpg" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Adam Phillips</h2>
                            <p>Business Consultant</p>
                            <div class="team-social">
                                <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{asset('assets')}}/img/team-2.jpg" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Dylan Adams</h2>
                            <p>Criminal Consultant</p>
                            <div class="team-social">
                                <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{asset('assets')}}/img/team-3.jpg" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Gloria Edwards</h2>
                            <p>Divorce Consultant</p>
                            <div class="team-social">
                                <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{asset('assets')}}/img/team-4.jpg" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Josh Dunn</h2>
                            <p>Immigration Consultant</p>
                            <div class="team-social">
                                <a class="social-tw" href=""><i class="fab fa-twitter"></i></a>
                                <a class="social-fb" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="social-li" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="social-in" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- FAQs Start -->
    <div class="faqs">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="faqs-img">
                        <img src="{{asset('assets')}}/img/faqs.jpg" alt="Image">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="section-header">
                        <h2>Have A Questions?</h2>
                    </div>
                    <div id="accordion">
                        @foreach($datalist as $rs)
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link collapsed" data-toggle="collapse"
                                       href="#collapse{{$loop->iteration}}">
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
                    <a class="btn" href="">Ask more</a>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQs End -->


    <!-- Testimonial Start -->
    <div class="testimonial">
        <div class="container">
            <div class="section-header">
                <h2>Review From Client</h2>
            </div>
            <div class="owl-carousel testimonials-carousel">
                <div class="testimonial-item">
                    <i class="fa fa-quote-right"></i>
                    <div class="row align-items-center">
                        <div class="col-3">
                            <img src="{{asset('assets')}}/img/testimonial-1.jpg" alt="">
                        </div>
                        <div class="col-9">
                            <h2>Client Name</h2>
                            <p>Profession</p>
                        </div>
                        <div class="col-12">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                            </p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <i class="fa fa-quote-right"></i>
                    <div class="row align-items-center">
                        <div class="col-3">
                            <img src="{{asset('assets')}}/img/testimonial-2.jpg" alt="">
                        </div>
                        <div class="col-9">
                            <h2>Client Name</h2>
                            <p>Profession</p>
                        </div>
                        <div class="col-12">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                            </p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <i class="fa fa-quote-right"></i>
                    <div class="row align-items-center">
                        <div class="col-3">
                            <img src="{{asset('assets')}}/img/testimonial-3.jpg" alt="">
                        </div>
                        <div class="col-9">
                            <h2>Client Name</h2>
                            <p>Profession</p>
                        </div>
                        <div class="col-12">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                            </p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <i class="fa fa-quote-right"></i>
                    <div class="row align-items-center">
                        <div class="col-3">
                            <img src="{{asset('assets')}}/img/testimonial-3.jpg" alt="">
                        </div>
                        <div class="col-9">
                            <h2>Client Name</h2>
                            <p>Profession</p>
                        </div>
                        <div class="col-12">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                            </p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <i class="fa fa-quote-right"></i>
                    <div class="row align-items-center">
                        <div class="col-3">
                            <img src="{{asset('assets')}}/img/testimonial-1.jpg" alt="">
                        </div>
                        <div class="col-9">
                            <h2>Client Name</h2>
                            <p>Profession</p>
                        </div>
                        <div class="col-12">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                            </p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <i class="fa fa-quote-right"></i>
                    <div class="row align-items-center">
                        <div class="col-3">
                            <img src="{{asset('assets')}}/img/testimonial-2.jpg" alt="">
                        </div>
                        <div class="col-9">
                            <h2>Client Name</h2>
                            <p>Profession</p>
                        </div>
                        <div class="col-12">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                            </p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <i class="fa fa-quote-right"></i>
                    <div class="row align-items-center">
                        <div class="col-3">
                            <img src="{{asset('assets')}}/img/testimonial-3.jpg" alt="">
                        </div>
                        <div class="col-9">
                            <h2>Client Name</h2>
                            <p>Profession</p>
                        </div>
                        <div class="col-12">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam accumsan lacus eget velit
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="blog">
        <div class="container">
            <div class="section-header">
                <h2>Latest From Blog</h2>
            </div>
            <div class="owl-carousel blog-carousel">
                <div class="blog-item">
                    <img src="{{asset('assets')}}/img/blog-1.jpg" alt="Blog">
                    <h3>Lorem ipsum dolor</h3>
                    <div class="meta">
                        <i class="fa fa-list-alt"></i>
                        <a href="">Civil Law</a>
                        <i class="fa fa-calendar-alt"></i>
                        <p>01-Jan-2045</p>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non
                        vulputate. Aliquam metus tortor
                    </p>
                    <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                </div>
                <div class="blog-item">
                    <img src="{{asset('assets')}}/img/blog-2.jpg" alt="Blog">
                    <h3>Lorem ipsum dolor</h3>
                    <div class="meta">
                        <i class="fa fa-list-alt"></i>
                        <a href="">Family Law</a>
                        <i class="fa fa-calendar-alt"></i>
                        <p>01-Jan-2045</p>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non
                        vulputate. Aliquam metus tortor
                    </p>
                    <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                </div>
                <div class="blog-item">
                    <img src="{{asset('assets')}}/img/blog-3.jpg" alt="Blog">
                    <h3>Lorem ipsum dolor</h3>
                    <div class="meta">
                        <i class="fa fa-list-alt"></i>
                        <a href="">Business Law</a>
                        <i class="fa fa-calendar-alt"></i>
                        <p>01-Jan-2045</p>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non
                        vulputate. Aliquam metus tortor
                    </p>
                    <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                </div>
                <div class="blog-item">
                    <img src="{{asset('assets')}}/img/blog-1.jpg" alt="Blog">
                    <h3>Lorem ipsum dolor</h3>
                    <div class="meta">
                        <i class="fa fa-list-alt"></i>
                        <a href="">Education Law</a>
                        <i class="fa fa-calendar-alt"></i>
                        <p>01-Jan-2045</p>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non
                        vulputate. Aliquam metus tortor
                    </p>
                    <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                </div>
                <div class="blog-item">
                    <img src="{{asset('assets')}}/img/blog-2.jpg" alt="Blog">
                    <h3>Lorem ipsum dolor</h3>
                    <div class="meta">
                        <i class="fa fa-list-alt"></i>
                        <a href="">Criminal Law</a>
                        <i class="fa fa-calendar-alt"></i>
                        <p>01-Jan-2045</p>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non
                        vulputate. Aliquam metus tortor
                    </p>
                    <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                </div>
                <div class="blog-item">
                    <img src="{{asset('assets')}}/img/blog-3.jpg" alt="Blog">
                    <h3>Lorem ipsum dolor</h3>
                    <div class="meta">
                        <i class="fa fa-list-alt"></i>
                        <a href="">Cyber Law</a>
                        <i class="fa fa-calendar-alt"></i>
                        <p>01-Jan-2045</p>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non
                        vulputate. Aliquam metus tortor
                    </p>
                    <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                </div>
                <div class="blog-item">
                    <img src="{{asset('assets')}}/img/blog-1.jpg" alt="Blog">
                    <h3>Lorem ipsum dolor</h3>
                    <div class="meta">
                        <i class="fa fa-list-alt"></i>
                        <a href="">Business Law</a>
                        <i class="fa fa-calendar-alt"></i>
                        <p>01-Jan-2045</p>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non
                        vulputate. Aliquam metus tortor
                    </p>
                    <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->
@endsection

