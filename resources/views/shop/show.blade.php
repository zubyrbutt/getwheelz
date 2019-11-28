
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
    <link rel="stylesheet" href="http://127.0.0.1:8000/theme/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://127.0.0.1:8000/theme/css/icofont.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/theme/css/owl.carousel.css">  
    <link rel="stylesheet" href="http://127.0.0.1:8000/theme/css/slidr.css">     
    <link rel="stylesheet" href="http://127.0.0.1:8000/theme/css/main.css">  
	<link id="preset" rel="stylesheet" href="http://127.0.0.1:8000/theme/css/presets/preset1.css">	
    <link rel="stylesheet" href="http://127.0.0.1:8000/theme/css/responsive.css">
	
	<!-- font -->
	<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Signika+Negative:400,300,600,700' rel='stylesheet' type='text/css'>

	<!-- icons -->
	<link rel="icon" href="">	
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://127.0.0.1:8000/theme/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://127.0.0.1:8000/theme/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://127.0.0.1:8000/theme/images/ico/apple-touch-icon-72-precomposed.html">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="http://127.0.0.1:8000/theme/images/ico/apple-touch-icon-57-precomposed.png">
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

                <a class="navbar-brand" href="{{ url('/') }}"><img class="img-fluid" src="{{ asset('/theme/images/logo.png') }}" alt="Logo"></a>
				
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
								

								<li>
										<a href="{{ route('cart.index') }}">
										
											<i class="fa fa-shopping-cart"></i>
												 Cart
												 <span>1</span>
										</a>
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

	<!-- main -->
	<section id="main" class="clearfix details-page">
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
			<div class="breadcrumb-section">
				<!-- breadcrumb -->
				<ol class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li><a href="#">Vehicles</a></li>
					<li>Cars</li>
				</ol><!-- breadcrumb -->						
				<h2 class="title">Cars</h2>
			</div>
						
			<div class="section banner">				
				<!-- banner-form -->
				<div class="banner-form banner-form-full">
					<form action="#">
						<!-- category-change -->
						<div class="dropdown category-dropdown">						
							<a data-toggle="dropdown" href="#"><span class="change-text">Select Category</span> <i class="fa fa-angle-down"></i></a>
							<ul class="dropdown-menu category-change">
								<li><a href="#">Fashion & Beauty</a></li>
								<li><a href="#">Cars & Vehicles</a></li>
								<li><a href="#">Electronics & Gedgets</a></li>
								<li><a href="#">Real Estate</a></li>
								<li><a href="#">Sports & Games</a></li>
							</ul>								
						</div><!-- category-change -->

						<!-- language-dropdown -->
						<div class="dropdown category-dropdown language-dropdown ">						
							<a data-toggle="dropdown" href="#"><span class="change-text">United Kingdom</span> <i class="fa fa-angle-down"></i></a>
							<ul class="dropdown-menu  language-change">
								<li><a href="#">United Kingdom</a></li>
								<li><a href="#">United States</a></li>
								<li><a href="#">China</a></li>
								<li><a href="#">Russia</a></li>
							</ul>								
						</div><!-- language-dropdown -->
					
						<input type="text" class="form-control" placeholder="Type Your key word">
						<button type="submit" class="form-control" value="Search">Search</button>
					</form>
				</div><!-- banner-form -->
			</div><!-- banner -->
	

			<div class="section slider">					
				<div class="row">
					<!-- carousel -->
					<div class="col-lg-7">
						<div id="product-carousel" class="carousel slide" data-ride="carousel">
							<!-- Indicators -->
							<ol class="carousel-indicators">
								<li data-target="#product-carousel" data-slide-to="0" class="active">
									<img src="" alt="Carousel Thumb" class="img-fluid">
								</li>
								<li data-target="#product-carousel" data-slide-to="1">
									<img src="{{ asset('theme/images/slider/list-2.jpg') }}" alt="Carousel Thumb" class="img-fluid">
								</li>
								<li data-target="#product-carousel" data-slide-to="2">
									<img src="{{ asset('theme/images/slider/list-3.jpg') }}" alt="Carousel Thumb" class="img-fluid">
								</li>
								<li data-target="#product-carousel" data-slide-to="3">
									<img src="{{ asset('theme/images/slider/list-4.jpg') }}" alt="Carousel Thumb" class="img-fluid">
								</li>
								<li data-target="#product-carousel" data-slide-to="4">
									<img src="{{ asset('theme/images/slider/list-5.jpg') }}" alt="Carousel Thumb" class="img-fluid">
								</li>
							</ol>

							<!-- Wrapper for slides -->
							<div class="carousel-inner" role="listbox">
								<!-- item -->
								<div class="item carousel-item active">
									<div class="carousel-image">
										<!-- image-wrapper -->
										<img src="{{ asset('theme/images/slider/1.jpg') }}" alt="Featured Image" class="img-fluid">
									</div>
								</div><!-- item -->

								<!-- item -->
								<div class="item carousel-item">
									<div class="carousel-image">
										<!-- image-wrapper -->
										<img src="{{ asset('theme/images/slider/2.jpg') }}" alt="Featured Image" class="img-fluid">
									</div>
								</div><!-- item -->

								<!-- item -->
								<div class="item carousel-item">
									<div class="carousel-image">
										<!-- image-wrapper -->
										<img src="{{ asset('theme/images/slider/3.jpg') }}" alt="Featured Image" class="img-fluid">
									</div>
								</div><!-- item -->

								<!-- item -->
								<div class="item carousel-item">
									<div class="carousel-image">
										<!-- image-wrapper -->
										<img src="{{ asset('theme/images/slider/4.jpg') }}" alt="Featured Image" class="img-fluid">
									</div>
								</div><!-- item -->

								<!-- item -->
								<div class="item carousel-item">
									<div class="carousel-image">
										<!-- image-wrapper -->
										<img src="{{ asset('theme/images/slider/5.jpg') }}" alt="Featured Image" class="img-fluid">
									</div>
								</div><!-- item -->
							</div><!-- carousel-inner -->

							<!-- Controls -->
							<a class="left carousel-control" href="#product-carousel" role="button" data-slide="prev">
								<i class="fa fa-chevron-left"></i>
							</a>
							<a class="right carousel-control" href="#product-carousel" role="button" data-slide="next">
								<i class="fa fa-chevron-right"></i>
							</a><!-- Controls -->
						</div>
					</div><!-- Controls -->	

					<!-- slider-text -->
					<div class="col-lg-5">
						<div class="slider-text">
                            
                            <h2>Rs.{{ $product->price }}</h2>
                            <input type="hidden" name="price" value="{{ $product->price }}">
							<h3 class="title"></h3>
                            <p><span>Offered by: <a href="#">{{ $product->user->name }}</a></span>
                                <input type="hidden" name="name" value="{{ $product->user->name }}">
							<span> Ad ID:<a href="#" class="time"> 4343434</a></span></p>
							<span class="icon"><i class="fa fa-clock-o"></i><a href="#">{{ date('D, d M Y g:i A', strtotime($product->created_at))}}</a></span>
							<span class="icon"><i class="fa fa-map-marker"></i><a href="#">{{ $product->city }}, Pakistan</a></span>
							<span class="icon"><i class="fa fa-suitcase online"></i><a href="#">Dealer <strong>(online)</strong></a></span>
							
							<!-- short-info -->
							<div class="short-info">
								<h4>Short Info</h4>
								<p><strong>Model: </strong><a href="#">{{ $product->model }}</a> </p>
								<p><strong>Registration city: </strong><a href="#"> {{ $product->registration_city }}</a> </p>
								<p><strong>Engine: </strong><a href="#">{{ $product->engine }}</a></p>
                                
								<p><strong>Condition: </strong><a href="#">{{ $product->condition }}</a></p>
								<p><strong>Condition: </strong><a href="#">{{ $product->condition }}</a></p>
								<p><strong>Condition: </strong><a href="#">{{ $product->condition }}</a></p>
                                
							</div><!-- short-info -->
							
                            <!-- contact-with -->
                            
							<div class="contact-with">
                                    
                                        @csrf

								<h4>Contact with </h4>
                                <input type="hidden" name="quantity" value="1">
                                <input type="hidden" name="prd_id" value="{{ $product->id }}">
                                    

                                <a href="{{ route('cart.edit', $product->id) }}" class="btn btn-red">
                                        Add to Cart
                                    </a>
                                
                            </div><!-- contact-with -->
                        
							<!-- social-links -->
							<div class="social-links">
                                   
							</div><!-- social-links -->						
						</div>
					</div><!-- slider-text -->				
				</div>				
			</div><!-- slider -->

			<div class="description-info">
				<div class="row">
					<!-- description -->
					<div class="col-md-8">
						<div class="description">
							<h4>Description</h4>
							<p></p>
						</div>
					</div><!-- description -->

					<!-- description-short-info -->
					<div class="col-md-4">					
						<div class="short-info">
							<h4>Short Info</h4>
							<!-- social-icon -->
							<ul>
								<li><i class="fa fa-shopping-cart"></i><a href="#">Delivery: Meet in person</a></li>
								<li><i class="fa fa-user-plus"></i><a href="#">More ads by <span>Yury Corporation</span></a></li>
								<li><i class="fa fa-print"></i><a href="#">Print this ad</a></li>
								<li><i class="fa fa-reply"></i><a href="#">Send to a friend</a></li>
								<li><i class="fa fa-heart-o"></i><a href="#">Save ad as Favorite</a></li>
								<li><i class="fa fa-exclamation-triangle"></i><a href="#">Report this ad</a></li>
							</ul><!-- social-icon -->
						</div>
					</div>
				</div><!-- row -->
			</div><!-- description-info -->	
			
			<div class="recommended-info">
				<div class="row">
					<div class="col-md-8">				
						<div class="section recommended-ads">
							<div class="featured-top">
								<h4>Recommended Ads for You</h4>
							</div>
							<!-- ad-item -->
							<div class="ad-item row">
								<!-- item-image -->
								<div class="item-image-box col-lg-4">
									<div class="item-image">
										<a href="details.html"><img src="{{ asset('theme/images/trending/1.jpg') }}" alt="Image" class="img-fluid"></a>
									</div><!-- item-image -->
								</div>								
								
								<div class="item-info col-lg-8">
									<!-- ad-info -->
									<div class="ad-info">
										<h3 class="item-price">$800.00</h3>
										<h4 class="item-title"><a href="#">Apple TV - Everything you need to know!</a></h4>
										<div class="item-cat">
											<span><a href="#">Electronics & Gedgets</a></span> /
											<span><a href="#">Tv & Video</a></span>
										</div>										
									</div><!-- ad-info -->
									
									<!-- ad-meta -->
									<div class="ad-meta">
										<div class="meta-content">
											<span class="dated"><a href="#">7 Jan, 16  10:10 pm </a></span>
											<a href="#" class="tag"><i class="fa fa-tags"></i> New</a>
										</div>										
										<!-- item-info-right -->
										<div class="user-option pull-right">
											<a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
											<a class="online" href="#" data-toggle="tooltip" data-placement="top" title="Individual"><i class="fa fa-user"></i> </a>
										</div><!-- item-info-right -->
									</div><!-- ad-meta -->
								</div><!-- item-info -->
							</div><!-- ad-item -->

							<!-- ad-item -->
							<div class="ad-item row">
								<div class="item-image-box col-lg-4">
									<!-- item-image -->
									<div class="item-image">
										<a href="details.html"><img src="{{ asset('theme/images/trending/2.jpg') }}" alt="Image" class="img-fluid"></a>
									</div><!-- item-image -->
								</div><!-- item-image-box -->
								
								
								<div class="item-info col-lg-8">
									<!-- ad-info -->
									<div class="ad-info">
										<h3 class="item-price">$250.00 <span>(Negotiable)</span></h3>
										<h4 class="item-title"><a href="#">Bark Furniture, Handmade Bespoke Furniture</a></h4>
										<div class="item-cat">
											<span><a href="#">Home Appliances</a></span> /
											<span><a href="#">Sofa</a></span>
										</div>										
									</div><!-- ad-info -->
									
									<!-- ad-meta -->
									<div class="ad-meta">
										<div class="meta-content">
											<span class="dated"><a href="#">7 Jan, 16  10:10 pm </a></span>
											<a href="#" class="tag"><i class="fa fa-tags"></i> Used</a>
										</div>									
										<!-- item-info-right -->
										<div class="user-option pull-right">
											<a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Individual"><i class="fa fa-user"></i> </a>
										</div><!-- item-info-right -->
									</div><!-- ad-meta -->
								</div><!-- item-info -->
							</div><!-- ad-item -->
							
							<!-- ad-item -->
							<div class="ad-item row">
								<div class="item-image-box col-lg-4">
									<!-- item-image -->
									<div class="item-image">
										<a href="details.html"><img src="{{ asset('theme/images/trending/3.jpg') }}" alt="Image" class="img-fluid"></a>
									</div><!-- item-image -->
								</div><!-- item-image-box -->
								
								
								<div class="item-info col-lg-8">
									<!-- ad-info -->
									<div class="ad-info">
										<h3 class="item-price">$890.00 <span>(Negotiable)</span></h3>
										<h4 class="item-title"><a href="#">Samsung Galaxy S6 Edge</a></h4>
										<div class="item-cat">
											<span><a href="#">Electronics & Gedgets</a></span> /
											<span><a href="#">Mobile Phone</a></span>
										</div>										
									</div><!-- ad-info -->									
																	
									<!-- ad-meta -->
									<div class="ad-meta">
										<div class="meta-content">
											<span class="dated"><a href="#">7 Jan, 16  10:10 pm </a></span>
											<a href="#" class="tag"><i class="fa fa-tags"></i> Used</a>
										</div>									
										<!-- item-info-right -->
										<div class="user-option pull-right">
											<a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Dealer"><i class="fa fa-suitcase"></i> </a>
										</div><!-- item-info-right -->
									</div><!-- ad-meta -->
								</div><!-- item-info -->
							</div><!-- ad-item -->	
							
							<!-- ad-item -->
							<div class="ad-item row">
								<div class="item-image-box col-lg-4">
									<!-- item-image -->
									<div class="item-image">
										<a href="details.html"><img src="{{ asset('theme/images/trending/4.jpg') }}" alt="Image" class="img-fluid"></a>
									</div><!-- item-image -->
								</div><!-- item-image-box -->
								
								
								<div class="item-info col-lg-8">
									<!-- ad-info -->
									<div class="ad-info">
										<h3 class="item-price">$800.00</h3>
										<h4 class="item-title"><a href="#">Rick Morton- Magicius Chase</a></h4>
										<div class="item-cat">
											<span><a href="#">Books & Magazines</a></span> /
											<span><a href="#">Story book</a></span>
										</div>										
									</div><!-- ad-info -->
																		
									<!-- ad-meta -->
									<div class="ad-meta">
										<div class="meta-content">
											<span class="dated"><a href="#">7 Jan, 16  10:10 pm </a></span>
											<a href="#" class="tag"><i class="fa fa-tags"></i> Used</a>
										</div>									
										<!-- item-info-right -->
										<div class="user-option pull-right">
											<a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
											<a href="#" data-toggle="tooltip" data-placement="top" title="Individual"><i class="fa fa-user"></i> </a>
										</div><!-- item-info-right -->
									</div><!-- ad-meta -->
								</div><!-- item-info -->
							</div><!-- ad-item -->
						</div>
					</div><!-- recommended-ads -->

					<div class="col-md-4 text-center">
						<div class="recommended-cta">					
							<div class="cta">
								<!-- single-cta -->						
								<div class="single-cta">
									<!-- cta-icon -->
									<div class="cta-icon icon-secure">
										<img src="{{ asset('theme/images/icon/13.png') }}" alt="Icon" class="img-fluid">
									</div><!-- cta-icon -->

									<h4>Secure Trading</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
								</div><!-- single-cta -->
								
								<!-- single-cta -->
								<div class="single-cta">
									<!-- cta-icon -->
									<div class="cta-icon icon-support">
										<img src="{{ asset('theme/images/icon/14.png') }}" alt="Icon" class="img-fluid">
									</div><!-- cta-icon -->

									<h4>24/7 Support</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
								</div><!-- single-cta -->
							

								<!-- single-cta -->
								<div class="single-cta">
									<!-- cta-icon -->
									<div class="cta-icon icon-trading" >
										<img src="{{ asset('theme/images/icon/15.png') }}" alt="Icon" class="img-fluid">
									</div><!-- cta-icon -->

									<h4>Easy Trading</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
								</div><!-- single-cta -->

								<!-- single-cta -->
								<div class="single-cta">
									<h5>Need Help?</h5>
									<p><span>Give a call on</span><a href="tellto:08048100000"> 08048100000</a></p>
								</div><!-- single-cta -->
							</div>
						</div><!-- cta -->
					</div><!-- recommended-cta-->
				</div><!-- row -->
			</div><!-- recommended-info -->
		</div><!-- container -->
	</section><!-- main -->
	
	<!-- download -->
	<section id="something-sell" class="clearfix parallax-section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<h2 class="title">Do you have something-sell?</h2>
					<h4>Post your ad for free on Trade.com</h4>
					<a href="ad-post.html" class="btn btn-primary">Post Your Ad</a>
				</div>
			</div><!-- row -->
		</div><!-- contaioner -->
	</section><!-- download -->
	
	<!-- footer -->
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
  @include('layouts.footer')
  </body>

<!-- Mirrored from demo.themeregion.com/trade/details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Nov 2019 16:54:34 GMT -->
</html>