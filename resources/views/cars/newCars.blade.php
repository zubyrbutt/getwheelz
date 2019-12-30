
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
                    <a href="{{ route('cars.create') }}" class="btn btn-primary">Ad Your Post</a>
                </div>
            </div>
            
        </div><!-- row -->	
    </div><!-- container -->	
</section><!-- home banner -->

<div class="page mt-3">
    <div class="container">
        
        <div class="section featureds">
            <div class="section-title featured-top">
                <h4>Certified Car Deals</h4>
            </div>			
            
            <div class="featured-slider">
                <div id="featured-slider-two">
                    @foreach ($certified as $item)
                    <div class="featured">
                        <div class="featured-image">
                            <a href="{{ route('certifieded',$item->id) }}"><img src="{{ asset('storage/'.$item->image) }}" alt="Image" class="img-fluid"></a>

                            <a href="#" class="verified" data-toggle="tooltip" data-placement="left" title="Verified"><i class="fa fa-check-square-o"></i></a>
                        </div>
                        
                        <div class="ad-info">
                            							
                            <h4 class="item-title"><a href="#">{{ $item->car_info }}</a></h4>
                            <h3 class="item-price">Rs.{{ $item->price }}</h3>
                            <div class="item-cat">
                                <span><a href="#">Model: {{ $item->model }}</a></span> 
                            </div>	
                        </div><!-- ad-info -->
                        
                        <!-- ad-meta -->
                        <div class="ad-meta">
                            <div class="meta-content">
                                <span class="dated"><a href="#">{{ $item->created_at->diffForHumans() }} </a></span>
                            </div>									
                            <!-- item-info-right -->
                            <div class="user-option pull-right">
                                <a href="#" data-toggle="tooltip" data-placement="top" title="{{ $item->city }}, Pakistan"><i class="fa fa-map-marker"></i> </a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="GetWheelz"><i class="fa fa-user"></i> </a>											
                            </div><!-- item-info-right -->
                        </div><!-- ad-meta -->
                    </div><!-- featured -->
                    @endforeach
                </div><!-- featured-slider -->
            </div><!-- featured-slider -->
        </div><!-- featureds -->

        
        <div class="section trending-ads cars-ads">
            <div class="section-title">
                <h4>Trending Ads</h4>
            </div>

            
            @foreach ($newCars as $car)
            <div class="ad-item row">
                <div class="item-image-box  col col-lg-5">
                    <div class="item-image">
                        <a href="{{ route('cars.show', $car->id) }}"><img src="{{ asset('storage/'.$car->image) }}" alt="Image" class="img-fluid"></a>
                    </div><!-- item-image -->
                    <div class="ad-info">
                        <div class="item-cat">
                            <span>{{ $car->model }}</span>
                        </div>								
                        <h4 class="item-title"><a href="{{ route('cars.show', $car->id) }}">{{ $car->car_info }}</a></h4>
                        <h3 class="item-price">${{ $car->price }}</h3>	
                    </div>						
                </div>	
                
                <div class="cars-ads-box colcol-lg-7">
                    <div class="car-info">
                        <ul>
                            <li><i class="fa fa-calendar" aria-hidden="true"></i>Registration City: {{ $car->registration_city }}</li>
                            <li><i class="fa fa-tachometer" aria-hidden="true"></i>Mileage: {{ $car->mileage }}</li>
                            <li><i class="fa fa-external-link" aria-hidden="true"></i>Transmission: {{ $car->transmission }}</li>
                        </ul>
                    </div>
                    <div class="car-info">
                        <ul>
                            <li><i class="fa fa-eyedropper" aria-hidden="true"></i>Exterior Color: {{ $car->color }}</li>
                            <li><i class="fa fa-bitbucket" aria-hidden="true"></i>Engine: {{ $car->engine }}</li>
                            <li><i class="fa fa-database" aria-hidden="true"></i>Assembly: {{ $car->assembly }}</li>
                        </ul>
                    </div>
                    <div class="ad-meta">
                        <div class="meta-content">
                            <span class="dated"><a href="#">{{ $car->created_at->diffForHumans() }} </a></span>
                            <a href="#" class="tag"><i class="fa fa-tags"></i></a>
                        </div>									
                        <!-- item-info-right -->
                        <div class="user-option pull-right">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="{{ $car->city }}"><i class="fa fa-map-marker"></i> </a>
                            <a class="online" href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Dealer"><i class="fa fa-suitcase"></i> </a>		
                        </div><!-- item-info-right -->
                    </div><!-- ad-meta -->																		
                </div>			
            </div><!-- ad-item -->
            @endforeach
           
            
        </div><!-- trending-ads -->					
 
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