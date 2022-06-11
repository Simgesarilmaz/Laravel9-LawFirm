<div class="wrapper">
    <!-- Top Bar Start -->
    <div class="top-bar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="logo">
                        <a class="logo" href="{{route('home')}}">
                            <h1>Kanun</h1>
                        <!--  <img src="{{asset('assets')}}/img/logo.jpg" alt="Logo"> -->
                        </a>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="top-bar-right">
                        <div class="text">
                            <h2>8:00 - 9:00</h2>
                            <p>Opening Hour Mon - Fri</p>
                        </div>
                        <div class="text">
                            <h2>+123 456 7890</h2>
                            <p>Call Us For Free Consultation</p>
                        </div>
                        <div class="social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="navbar-nav mr-auto">
                            <div class="nav-item @if(!@isset($page)) show-on-click @endif dropdown">
                                @auth
                                    <div class="nav-item @if(!@isset($page)) show-on-click @endif dropdown">
                                        <div class="header-btns-icon">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <strong
                                            class="text-uppercase">{{\Illuminate\Support\Facades\Auth::user()->name}}<i
                                                class="fa fa-caret-down"></i> </strong>
                                    </div>
                                    <a href="/logoutuser" class="text-uppercase">Logout</a>
                                @endauth
                                @guest
                                    <a href="/loginuser" class="text-uppercase">Login</a> / <a href="/registeruser"
                                                                                               class="text-uppercase">Join</a>
                                @endguest
                                <ul class="dropdown-menu">
                                    <li><a href="{{route('userpanel.index')}}"><i class="fa fa-user-o"></i>My Account</a></li>
                                    <li><a href="#"><i class="fa fa-check"></i>Checkout</a></li>
                                    <li><a href="#"><i class="fa fa-unlock-alt"></i>Log in </a></li>
                                    <li><a href="#"><i class="fa fa-user"></i>Create An Account</a></li>
                                </ul>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="nav-bar">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    @php
                        $mainCategories=\App\Http\Controllers\HomeController::maincategorylist()
                    @endphp
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <div class="nav-item @if(!@isset($page)) show-on-click @endif dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Categories</a>
                                <div class="dropdown-menu">
                                    @foreach($mainCategories as $rs)
                                        <a class="dropdown-item">{{$rs->title}}</a>
                                        <div class="row">
                                            @if(count($rs->children))
                                                @include('home.categorytree',['children'=>$rs->children])
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <a href="{{route('home')}}" class="nav-item nav-link active">Home</a>
                            <a href="{{route('about')}}" class="nav-item nav-link">About</a>
                            <a href="{{route('references')}}" class="nav-item nav-link">References</a>
                            <a href="service.html" class="nav-item nav-link">Practice</a>
                            <a href="team.html" class="nav-item nav-link">Attorneys</a>
                            <a href="portfolio.html" class="nav-item nav-link">Case Studies</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu">
                                    <a href="blog.html" class="dropdown-item">Blog Page</a>
                                    <a href="single.html" class="dropdown-item">Single Page</a>
                                </div>
                            </div>
                            <a href="{{route('faq')}}" class="nav-item nav-link">FAQ</a>
                            <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
                        </div>

                        <div class="ml-auto">
                            <a class="btn" href="https://htmlcodex.com/law-firm-website-template">Get
                                Appointment</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

