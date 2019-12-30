
@include('layouts.nav')
<section class="home-banner">
    <div class="banner-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="car-info">
                    <ul class="socail list-inline">
                        <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" title="Youtube"><i class="fa fa-youtube"></i></a></li>
                    </ul>					
                    <h1> Get Wheelz</h1>
                    <h2>Mate Black <span>Price: $25,000</span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <a href="{{ url('review/create') }}" class="btn btn-primary">Post Review</a>
                </div>
            </div>
            
        </div><!-- row -->	
    </div><!-- container -->	
</section><!-- home banner -->

<div class="page">
    <div class="container mt-3">
        
        <div class="section featureds">
            <div class="section-title featured-top">
                <h4>Top Rated Cars</h4>
            </div>			
            
            <div class="featured-slider">
                <div id="featured-slider-two">
                    @foreach ($reviews as $review)
                        
                    
                    <div class="featured">
                        <div class="featured-image">
                            <a href="details.html"><img src="{{ asset('storage/'.$review->image) }}" alt="Image" class="img-fluid"></a>
                        </div>
                        
                        <div class="ad-info">
                            <div class="item-cat">
                                    

                                <span>
                                   {{ $review->userSumRating}} Reviews
                                </span> 
                                
                                
                            </div>								
                            <h4 class="item-title"><a href="#">{{ Str::limit($review->title,40) }}</a></h4>
                            <span class="dated">{{ $review->relation }}</span>

                        </div><!-- ad-info -->
                        
                        <!-- ad-meta -->
                        <div class="ad-meta">
                            <div class="meta-content">
                                <span class="dated"><a href="#">{{ $review->created_at->diffForHumans() }} </a></span>
                            </div>									
                            <!-- item-info-right -->
                            
                        </div><!-- ad-meta -->
                    </div><!-- featured -->
                    @endforeach
                
                </div><!-- featured-slider -->
            </div><!-- featured-slider -->
        </div><!-- featureds -->

     
        <div class="cta text-center">
            <div class="row">
                <!-- single-cta -->
                <div class="col-md-4">
                    <div class="single-cta">
                        <!-- cta-icon -->
                        <div class="cta-icon icon-secure">
                            <img src="{{ asset('theme/images/icon/13.png') }}" alt="Icon" class="img-fluid">
                        </div><!-- cta-icon -->

                        <h4>Secure Trading</h4>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie</p>
                    </div>
                </div><!-- single-cta -->

                <!-- single-cta -->
                <div class="col-md-4">
                    <div class="single-cta">
                        <!-- cta-icon -->
                        <div class="cta-icon icon-support">
                            <img src="{{ asset('theme/images/icon/14.png') }}" alt="Icon" class="img-fluid">
                        </div><!-- cta-icon -->

                        <h4>24/7 Support</h4>
                        <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit</p>
                    </div>
                </div><!-- single-cta -->

                <!-- single-cta -->
                <div class="col-md-4">
                    <div class="single-cta">
                        <!-- cta-icon -->
                        <div class="cta-icon icon-trading">
                            <img src="{{ asset('theme/images/icon/15.png') }}" alt="Icon" class="img-fluid">
                        </div><!-- cta-icon -->

                        <h4>Easy Trading</h4>
                        <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram</p>
                    </div>
                </div><!-- single-cta -->
            </div><!-- row -->
        </div>	
    </div><!-- container -->
</div><!-- page -->

<!-- download -->
<section id="download" class="clearfix parallax-section car-app-store">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>Download on App Store</h2>
            </div>
        </div><!-- row -->

        <!-- row -->
        <div class="row">
            <!-- download-app -->
            <div class="col-md-4">
                <a href="#" class="download-app">
                    <img src="{{ asset('theme/images/icon/16.png') }}" alt="Image" class="img-fluid">
                    <span class="pull-left">
                        <span>available on</span>
                        <strong>Google Play</strong>
                    </span>
                </a>
            </div><!-- download-app -->

            <!-- download-app -->
            <div class="col-md-4">
                <a href="#" class="download-app">
                    <img src="{{ asset('theme/images/icon/17.png') }}" alt="Image" class="img-fluid">
                    <span class="pull-left">
                        <span>available on</span>
                        <strong>App Store</strong>
                    </span>
                </a>
            </div><!-- download-app -->

            <!-- download-app -->
            <div class="col-md-4">
                <a href="#" class="download-app">
                    <img src="{{ asset('theme/images/icon/18.png') }}" alt="Image" class="img-fluid">
                    <span class="pull-left">
                        <span>available on</span>
                        <strong>Windows Store</strong>
                    </span>
                </a>
            </div><!-- download-app -->
        </div><!-- row -->
    </div><!-- contaioner -->
</section><!-- download -->
@include('layouts.footer')