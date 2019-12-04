
<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from demo.themeregion.com/trade/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Nov 2019 16:53:02 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Theme Region">
   	<meta name="description" content="">

    <title>Trade | World's Largest Classifieds Portal</title>

   <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('theme/css/bootstrap.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('theme/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('theme/css/icofont.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/css/owl.carousel.css') }}">  
    <link rel="stylesheet" href="{{ asset('theme/css/slidr.css') }}">     
    <link rel="stylesheet" href="{{ asset('theme/css/main.css') }}">  
	<link id="preset" rel="stylesheet" href="{{ asset('theme/css/presets/preset1.css') }}">	
    <link rel="stylesheet" href="{{ asset('theme/css/responsive.css') }}">
    {{-- date and time picker css --}}
    <link rel="stylesheet" href="{{ asset('assets/air-datepicker/dist/css/datepicker.css') }}">
	
	<!-- font -->
	<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Signika+Negative:400,300,600,700' rel='stylesheet' type='text/css'>

	<!-- icons -->
	<link rel="icon" href="">	
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('theme/images/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('theme/images/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('theme/images/ico/apple-touch-icon-72-precomposed.html') }}">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{ asset('theme/images/ico/apple-touch-icon-57-precomposed.png') }}">
    <!-- icons -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Template Developed By ThemeRegion -->
  </head>
  <body>
	<!-- header -->
	<header id="header" class="clearfix">
		<!-- navbar -->
		<nav class="navbar navbar-default navbar-expand-lg">
			<div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#tr-mainmenu" aria-controls="tr-mainmenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fa fa-align-justify"></i></span>
                </button>

                <a class="navbar-brand" href="{{ url('/') }}"><img width="100px" height="100px" class="img-fluid" src="{{ asset('/theme/images/logo.png') }}" alt="Logo"></a>
				
				<div class="collapse navbar-collapse" id="tr-mainmenu">
					<ul class="nav navbar-nav">
						<li class="active dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Home <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li class="active"><a href="index.html">Home Default </a></li>
								<li><a href="index-one.html">Home Version-1</a></li>
								<li><a href="index-two.html">Home Version-2</a></li>
								<li><a href="index-three.html">Home Version-3</a></li>
								<li><a href="index-car.html">Home Car-1<span class="badge">New</span></a></li>
								<li><a href="index-car-two.html">Home Car-2<span class="badge">New</span></a></li>
								<li><a href="directory.html">Home Directory<span class="badge">Latest</span></a></li>
							</ul>
						</li>
						<li><a href="categories.html">Category</a></li>
						
						
						<li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Pages <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="about-us.html">ABout Us</a></li>
								<li><a href="contact-us.html">Contact Us</a></li>
								<li><a href="ad-post.html">Ad post</a></li>
								<li><a href="ad-post-details.html">Ad post Details</a></li>
								<li><a href="categories-main.html">Category Ads</a></li>
								<li><a href="details.html">Ad Details</a></li>
								<li><a href="my-ads.html">My Ads</a></li>
								<li><a href="my-profile.html">My Profile</a></li>
								<li><a href="favourite-ads.html">Favourite Ads</a></li>
								<li><a href="archived-ads.html">Archived Ads</a></li>
								<li><a href="pending-ads.html">Pending Ads</a></li>
								<li><a href="delete-account.html">Close Account</a></li>
								<li><a href="published.html">Ad Publised</a></li>
								<li><a href="signup.html">Sign Up</a></li>
								<li><a href="signin.html">Sign In</a></li>
								<li><a href="faq.html">FAQ</a></li>	
								<li><a href="coming-soon.html">Coming Soon <span class="badge">New</span></a></li>
								<li><a href="pricing.html">Pricing<span class="badge">New</span></a></li>
								<li><a href="500-page.html">500 Opsss<span class="badge">New</span></a></li>
								<li><a href="404-page.html">404 Error<span class="badge">New</span></a></li>
							</ul>
						</li>
					</ul>
				</div>

				<div class="nav-right">
					<div class="dropdown language-dropdown">
						<i class="fa fa-globe"></i> 						
						<a data-toggle="dropdown" href="#"><span class="change-text">More</span> <i class="fa fa-angle-down"></i></a>
						<ul class="dropdown-menu language-change">
								<li><a href="{{ route('discussions.index') }}">Forum</a></li>
								
								<li><a href="{{ route('products.index') }}">Porducts</a></li>
								<li><a href="{{ route('finance') }}">Finance</a></li>
								<li><a href="{{ route('rental.index') }}">Car Rental</a></li>
								<li><a href="{{ route('inspection.index') }}">Inspection</a></li>
								
								<li><a href="#">Cool Rides</a></li>
							
						</ul>								
					</div>
					
					<!-- language-dropdown -->

					<!-- sign-in -->					
					<ul class="sign-in">
		
						@if(!Auth::user())
						<li><a href="{{ route('login') }}"> Sign In </a></li>
						<li><a href="{{ route('register') }}">Register</a></li>
						@else
						<li><i class="fa fa-bell"></i></li>
						<a href="#" class="badge badge-important">
							Notifications <span class="badge badge-light">
								{{ auth()->user()->unreadNotifications()->count() }}
							</span>
						  </a>
						
						<li><i class="fa fa-user"></i></li>

						<li><a href="{{ route('users.index') }}">Welcome! <Strong>{{ Auth::User()->name }}</Strong></a> </li>
						<li>
                               
								<a href="{{ route('logout') }}"
									onclick="event.preventDefault();
												  document.getElementById('logout-form').submit();">
									 {{ __('Logout') }}
								 </a>
	
								 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									 @csrf
								 </form>
								</li>
								



						@endif
						
						
						
			
					</ul><!-- sign-in -->					

					
					
						<div class="dropdown language-dropdown">
								
							<a data-toggle="dropdown" href="#" class="btn">Post Your Ad</a>						
							<ul class="dropdown-menu language-change">
								<li><a href="{{ route('cars.create') }}">Sell Car</a></li>
								<li><a href="{{ route('bikes.create') }}"> Sell Bikes</a></li>
								<li><a href="{{ route('accessories.create') }}">Sell Accessories</a></li>
								
							</ul>								
						</div>				
				
						
			</div><!-- container -->
		</nav><!-- navbar -->
	</header><!-- header -->
<section class="home-banner">
    <div class="banner-overlay"></div>
    <div class="container">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row">
                
            <div class="col-md-6">
                <div class="car-info">
                    <ul class="socail list-inline">
                        <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" title="Youtube"><i class="fa fa-youtube"></i></a></li>
                    </ul>					
                    <h1> Car Rental In your City</h1>
                    <h2>Mate Black <span>Starting: Rs.1000</span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
            <div class="col-md-4 offset-md-2">
                <div class="contact-form">
                    <h1>Find Your Car</h1>
                    <div class="contact-info">
                        <form action="{{ route('rental.store') }}" method="POST">
                            @csrf
             <div class="form-group">
                 <label for="car_type">Car Type</label>
                 <select id="car_type" class="custom-select" name="car_type">
                        <option selected>Slect your car</option>

                     <option value="economy_cars">Economy Cars</option>
                     <option value="executive_cars">Executive Cars</option>
                     <option value="luxury_cars">Luxury Cars</option>
                 </select>
             </div>
                            
                            <div class="form-group">
                                    <label for="city">City</label>
                                    <select id="city" class="custom-select" name="city">
                                           <option selected>Slect your City</option>
                   
                                        <option value="islamabad">Islamabad</option>
                                        <option value="rawalpindi">Rawalpindi</option>
                                        <option value="lahore">Lahore</option>
                                        <option value="karachi">Karachi</option>

                                    </select>
                                </div>

                                <div class="form-group">
                                        <label for="driver">Dirver</label>
                                        <select id="driver" class="custom-select" name="driver">
                                               <option selected>Driver?</option>
                       
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                            
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="starting_date">Set Pickup time & date</label>
                                        <input name="starting_date" type="text" class="datepicker-here" data-language="en" data-timepicker="true" data-time-format='hh:ii aa'>

                                    </div>
                                    <div class="form-group">
                                            <label for="ending_date">Set Drop time & date</label>

                                            <input type="text" name="ending_date" class="datepicker-here" data-language="en" data-timepicker="true" data-time-format='hh:ii aa'>
                                    </div>
                            <button type="submit" class="form-control">Book</button>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- row -->	
    </div><!-- container -->	
</section><!-- home banner -->

<div class="page">
    <div class="container">
        <div class="category-section">
            <div class="section-title">
                <h4>Browse Cars By Makes</h4>
                <h5>We currently have 94 cars available</h5>
            </div>
            <div class="cars-category">
                <div class="category-menu">
                    <ul>
                        <li><a href="categories-main.html">Audi (10)</a></li>
                        <li><a href="categories-main.html">BMW (4)</a></li>
                        <li><a href="categories-main.html">Chevrolet (5)</a></li>
                        <li><a href="categories-main.html">Daihatsu (4)</a></li>
                    </ul>
                </div>
                <div class="category-menu">
                    <ul>
                        <li><a href="categories-main.html">Datsun (3)</a></li>
                        <li><a href="categories-main.html">FAW (5)</a></li>
                        <li><a href="categories-main.html">Fiat (5)</a></li>
                        <li><a href="categories-main.html">Ford (5)</a></li>
                    </ul>
                </div>
                <div class="category-menu">
                    <ul>
                        <li><a href="categories-main.html">Honda (5)</a></li>
                        <li><a href="categories-main.html">Hyundai (5)</a></li>
                        <li><a href="categories-main.html">Mahindra (6)</a></li>
                        <li><a href="categories-main.html">Mercedes Benz (5)</a></li>
                    </ul>
                </div>
                <div class="category-menu">
                    <ul>
                        <li><a href="categories-main.html">Tesla (5)</a></li>
                        <li><a href="categories-main.html">Porsche (6)</a></li>
                        <li><a href="categories-main.html">Range Rover (8)</a></li>
                        <li><a href="categories-main.html">Renault (5)</a></li>
                    </ul>
                </div>
                <div class="category-menu">
                    <ul>
                        <li><a href="categories-main.html">Suzuki (3)</a></li>
                        <li><a href="categories-main.html">Toyota (5)</a></li>
                        <li><a href="categories-main.html">Ferrari (10)</a></li>
                        <li><a href="categories-main.html">Jaguar (12)</a></li>
                    </ul>
                </div>
                <div class="category-menu">
                    <ul>
                        <li><a href="categories-main.html">Lamborghini (03)</a></li>
                        <li><a href="categories-main.html">Nissan (07)</a></li>
                    </ul>
                </div>
            </div><!-- cars category -->
        </div><!-- category section -->

        <div class="section featureds">
            <div class="section-title featured-top">
                <h4>Featured Car Deals</h4>
            </div>			
            
            <div class="featured-slider">
                <div id="featured-slider-two">
                    <div class="featured">
                        <div class="featured-image">
                            <a href="details.html"><img src="{{ asset('theme/images/car/1.jpg') }}" alt="Image" class="img-fluid"></a>
                        </div>

                        <div class="ad-info">
                            <div class="item-cat">
                                <span><a href="#">Audi</a></span> 
                            </div>								
                            <h4 class="item-title"><a href="#">Audi Fortaman F40</a></h4>
                            <h3 class="item-price">$800.00</h3>
                        </div><!-- ad-info -->
                        
                        <!-- ad-meta -->
                        <div class="ad-meta">
                            <div class="meta-content">
                                <span class="dated"><a href="#">7 Jan 10:10 pm </a></span>
                            </div>									
                            <!-- item-info-right -->
                            <div class="user-option pull-right">
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Individual"><i class="fa fa-suitcase"></i> </a>											
                            </div><!-- item-info-right -->
                        </div><!-- ad-meta -->
                    </div><!-- featured -->
                    
                    <div class="featured">
                        <div class="featured-image">
                            <a href="details.html"><img src="{{ asset('theme/images/car/2.jpg') }}" alt="Image" class="img-fluid"></a>
                        </div>
                        
                        <div class="ad-info">
                            <div class="item-cat">
                                <span><a href="#">Ford</a></span> 
                            </div>								
                            <h4 class="item-title"><a href="#">Ford Royal Kings 458</a></h4>
                            <h3 class="item-price">$800.00</h3>
                        </div><!-- ad-info -->
                        
                        <!-- ad-meta -->
                        <div class="ad-meta">
                            <div class="meta-content">
                                <span class="dated"><a href="#">7 Jan 10:10 pm </a></span>
                            </div>									
                            <!-- item-info-right -->
                            <div class="user-option pull-right">
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Individual"><i class="fa fa-user"></i> </a>											
                            </div><!-- item-info-right -->
                        </div><!-- ad-meta -->
                    </div><!-- featured -->
                    
                    <div class="featured">
                        <div class="featured-image">
                            <a href="details.html"><img src="{{ asset('theme/images/car/3.jpg') }}" alt="Image" class="img-fluid"></a>
                        </div>
                        
                        <div class="ad-info">
                            <div class="item-cat">
                                <span><a href="#">Lamborghini</a></span> 
                            </div>								
                            <h4 class="item-title"><a href="#">Green Hornet 219scaX</a></h4>
                            <h3 class="item-price">$800.00</h3>
                        </div><!-- ad-info -->
                        
                        <!-- ad-meta -->
                        <div class="ad-meta">
                            <div class="meta-content">
                                <span class="dated"><a href="#">7 Jan 10:10 pm </a></span>
                            </div>									
                            <!-- item-info-right -->
                            <div class="user-option pull-right">
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Individual"><i class="fa fa-suitcase"></i> </a>			
                            </div><!-- item-info-right -->
                        </div><!-- ad-meta -->
                    </div><!-- featured -->
                    
                    <div class="featured">
                        <div class="featured-image">
                            <a href="details.html"><img src="{{ asset('theme/images/car/4.jpg') }}" alt="Image" class="img-fluid"></a>
                            <a href="#" class="verified" data-toggle="tooltip" data-placement="left" title="Verified"><i class="fa fa-check-square-o"></i></a>
                        </div>
                        
                        <div class="ad-info">
                            <div class="item-cat">
                                <span><a href="#">BMW</a></span> 
                            </div>								
                            <h4 class="item-title"><a href="#">BMW M3 E92 2018</a></h4>
                            <h3 class="item-price">$800.00</h3>
                        </div><!-- ad-info -->
                        
                        <!-- ad-meta -->
                        <div class="ad-meta">
                            <div class="meta-content">
                                <span class="dated"><a href="#">7 Jan 10:10 pm </a></span>
                            </div>									
                            <!-- item-info-right -->
                            <div class="user-option pull-right">
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Individual"><i class="fa fa-user"></i> </a>											
                            </div><!-- item-info-right -->
                        </div><!-- ad-meta -->
                    </div><!-- featured -->
                    <div class="featured">
                        <div class="featured-image">
                            <a href="details.html"><img src="{{ asset('theme/images/car/1.jpg') }}" alt="Image" class="img-fluid"></a>
                        </div>

                        <div class="ad-info">
                            <div class="item-cat">
                                <span><a href="#">Audi</a></span> 
                            </div>								
                            <h4 class="item-title"><a href="#">Audi Fortaman F40</a></h4>
                            <h3 class="item-price">$800.00</h3>
                        </div><!-- ad-info -->
                        
                        <!-- ad-meta -->
                        <div class="ad-meta">
                            <div class="meta-content">
                                <span class="dated"><a href="#">7 Jan 10:10 pm </a></span>
                            </div>									
                            <!-- item-info-right -->
                            <div class="user-option pull-right">
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Individual"><i class="fa fa-suitcase"></i> </a>											
                            </div><!-- item-info-right -->
                        </div><!-- ad-meta -->
                    </div><!-- featured -->
                    
                    <div class="featured">
                        <div class="featured-image">
                            <a href="details.html"><img src="{{ asset('theme/images/car/2.jpg') }}" alt="Image" class="img-fluid"></a>
                        </div>
                        
                        <div class="ad-info">
                            <div class="item-cat">
                                <span><a href="#">Ford</a></span> 
                            </div>								
                            <h4 class="item-title"><a href="#">Ford Royal Kings 458</a></h4>
                            <h3 class="item-price">$800.00</h3>
                        </div><!-- ad-info -->
                        
                        <!-- ad-meta -->
                        <div class="ad-meta">
                            <div class="meta-content">
                                <span class="dated"><a href="#">7 Jan 10:10 pm </a></span>
                            </div>									
                            <!-- item-info-right -->
                            <div class="user-option pull-right">
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Individual"><i class="fa fa-user"></i> </a>											
                            </div><!-- item-info-right -->
                        </div><!-- ad-meta -->
                    </div><!-- featured -->
                    
                    <div class="featured">
                        <div class="featured-image">
                            <a href="details.html"><img src="{{ asset('theme/images/car/3.jpg') }}" alt="Image" class="img-fluid"></a>
                        </div>
                        
                        <div class="ad-info">
                            <div class="item-cat">
                                <span><a href="#">Lamborghini</a></span> 
                            </div>								
                            <h4 class="item-title"><a href="#">Green Hornet 219scaX</a></h4>
                            <h3 class="item-price">$800.00</h3>
                        </div><!-- ad-info -->
                        
                        <!-- ad-meta -->
                        <div class="ad-meta">
                            <div class="meta-content">
                                <span class="dated"><a href="#">7 Jan 10:10 pm </a></span>
                            </div>									
                            <!-- item-info-right -->
                            <div class="user-option pull-right">
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Individual"><i class="fa fa-suitcase"></i> </a>			
                            </div><!-- item-info-right -->
                        </div><!-- ad-meta -->
                    </div><!-- featured -->
                    
                    <div class="featured">
                        <div class="featured-image">
                            <a href="details.html"><img src="images/car/4.jpg" alt="Image" class="img-fluid"></a>
                            <a href="#" class="verified" data-toggle="tooltip" data-placement="left" title="Verified"><i class="fa fa-check-square-o"></i></a>
                        </div>
                        
                        <div class="ad-info">
                            <div class="item-cat">
                                <span><a href="#">BMW</a></span> 
                            </div>								
                            <h4 class="item-title"><a href="#">BMW M3 E92 2018</a></h4>
                            <h3 class="item-price">$800.00</h3>
                        </div><!-- ad-info -->
                        
                        <!-- ad-meta -->
                        <div class="ad-meta">
                            <div class="meta-content">
                                <span class="dated"><a href="#">7 Jan 10:10 pm </a></span>
                            </div>									
                            <!-- item-info-right -->
                            <div class="user-option pull-right">
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
                                <a href="#" data-toggle="tooltip" data-placement="top" title="Individual"><i class="fa fa-user"></i> </a>											
                            </div><!-- item-info-right -->
                        </div><!-- ad-meta -->
                    </div><!-- featured -->
                    
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

<footer id="footer" class="clearfix">
        <!-- footer-top -->
        <section class="footer-top clearfix">
            <div class="container">
                <div class="row">
                    <!-- footer-widget -->
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-widget">
                            <h3>Quik Links</h3>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">All Cities</a></li>
                                <li><a href="#">Help & Support</a></li>
                                <li><a href="#">Advertise With Us</a></li>
                                <li><a href="#">Blog</a></li>
                            </ul>
                        </div>
                    </div><!-- footer-widget -->
    
                    <!-- footer-widget -->
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-widget">
                            <h3>How to sell fast</h3>
                            <ul>
                                <li><a href="#">How to sell fast</a></li>
                                <li><a href="#">Membership</a></li>
                                <li><a href="#">Banner Advertising</a></li>
                                <li><a href="#">Promote your ad</a></li>
                                <li><a href="#">Trade Delivers</a></li>
                                <li><a href="#">FAQ</a></li>
                            </ul>
                        </div>
                    </div><!-- footer-widget -->
    
                    <!-- footer-widget -->
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-widget social-widget">
                            <h3>Follow us on</h3>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook-official"></i>Facebook</a></li>
                                <li><a href="#"><i class="fa fa-twitter-square"></i>Twitter</a></li>
                                <li><a href="#"><i class="fa fa-google-plus-square"></i>Google+</a></li>
                                <li><a href="#"><i class="fa fa-youtube-play"></i>youtube</a></li>
                            </ul>
                        </div>
                    </div><!-- footer-widget -->
    
                    <!-- footer-widget -->
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-widget news-letter">
                            <h3>Newsletter</h3>
                            <p>Trade is Worldest leading classifieds platform that brings!</p>
                            <!-- form -->
                            <form action="#">
                                <input type="email" class="form-control" placeholder="Your email id">
                                <button type="submit" class="btn btn-primary">Sign Up</button>
                            </form><!-- form -->			
                        </div>
                    </div><!-- footer-widget -->
                </div><!-- row -->
            </div><!-- container -->
        </section><!-- footer-top -->
    
        
        <div class="footer-bottom clearfix text-center">
            <div class="container">
                <p>Copyright &copy; 2018. Developed by <a href="http://themeregion.com/">ThemeRegion</a></p>
            </div>
        </div><!-- footer-bottom -->
    </footer><!-- footer -->
    
    
    
    <!--/Preset Style Chooser--> 
    <div class="style-chooser">
        <div class="style-chooser-inner">
            <a href="#" class="toggler"><i class="fa fa-life-ring fa-spin"></i></a>
            <h4>Presets</h4>
            <ul class="preset-list clearfix">
                <li class="preset1 active" data-preset="1"><a href="#" data-color="preset1"></a></li>
                <li class="preset2" data-preset="2"><a href="#" data-color="preset2"></a></li>
                <li class="preset3" data-preset="3"><a href="#" data-color="preset3"></a></li>        
                <li class="preset4" data-preset="4"><a href="#" data-color="preset4"></a></li>
            </ul>
        </div>
    </div>
    <!--/End:Preset Style Chooser-->
    
    <!-- JS -->
    <script src="{{ asset('theme/js/jquery.min.js') }}"></script>
    <script src="{{ asset('theme/js/popper.min.js') }}"></script>
    <script src="{{ asset('theme/js/modernizr.min.js') }}"></script>
    <script src="{{ asset('theme/js/bootstrap.min.js') }}"></script>
    
    <script src="{{ asset('theme/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('theme/js/scrollup.min.js') }}"></script>
    <script src="{{ asset('theme/js/price-range.js') }}"></script> 
    <script src="{{ asset('theme/js/jquery.countdown.js') }}"></script>    
    <script src="{{ asset('theme/js/switcher.js') }}"></script>
    <script src="{{ asset('theme/js/custom.js') }}"></script>
    
    <script src="https://js.stripe.com/v3/"></script>
    <script src="{{ asset('js/finance.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    {{-- date picker --}}
    <script src="{{ asset('assets/air-datepicker/dist/js/datepicker.min.js') }}"></script>
    @include('sweetalert::alert')

    
    {{-- <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-73239902-1', 'auto');
      ga('send', 'pageview');
    
    </script> --}}
    </body>
    </html>