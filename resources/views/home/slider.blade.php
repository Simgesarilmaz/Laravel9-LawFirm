<!-- Carousel Start -->
<div id="carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        @foreach($sliderdata as $order => $rs)
        <div class="carousel-item {{ ($order==0) ? "active" : ""; }} ">
            <img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" style="width: 1366px;height:600px ">
            <div class="carousel-caption">
                <h1 class="animated fadeInLeft">{{$rs->title}}</h1>
                <p class="animated fadeInRight">Lorem ipsum dolor sit amet elit. Mauris odio mauris...</p>
                <a class="btn animated fadeInUp" href="#">Get free consultation</a>
            </div>
        </div>
        @endforeach
    </div>

    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- Carousel End -->


<!-- Top Feature Start-->
<div class="feature-top">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-3 col-sm-6">
                <div class="feature-item">
                    <i class="far fa-check-circle"></i>
                    <h3>Legal</h3>
                    <p>Govt Approved</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="feature-item">
                    <i class="fa fa-user-tie"></i>
                    <h3>Attorneys</h3>
                    <p>Expert Attorneys</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="feature-item">
                    <i class="far fa-thumbs-up"></i>
                    <h3>Success</h3>
                    <p>99.99% Case Won</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="feature-item">
                    <i class="far fa-handshake"></i>
                    <h3>Support</h3>
                    <p>Quick Support</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Top Feature End-->
