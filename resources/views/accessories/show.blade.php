@include('layouts.nav')
	<!-- main -->
	<section id="main" class="clearfix details-page">
		<div class="container">
			<div class="breadcrumb-section">
				<!-- breadcrumb -->
				<ol class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li><a href="#">Vehicles</a></li>
					<li>Accessory</li>
				</ol><!-- breadcrumb -->						
				<h2 class="title">Accessory</h2>
			</div>
						
			<div class="section banner">				
				<!-- banner-form -->
				
			</div><!-- banner -->
	

			<div class="section slider">					
				<div class="row">
					<!-- carousel -->
					<div class="col-lg-7">
						<div id="product-carousel" class="carousel slide" data-ride="carousel">
							<!-- Indicators -->
							<ol class="carousel-indicators">
								<li data-target="#product-carousel" data-slide-to="0" class="active">
									<img src="{{ asset('storage/'.$accessory->image) }}" alt="Carousel Thumb" class="img-fluid">
								</li>
								<li data-target="#product-carousel" data-slide-to="1">
									<img src="{{ asset('storage/'.$accessory->image) }}" alt="Carousel Thumb" class="img-fluid">
								</li>
								<li data-target="#product-carousel" data-slide-to="2">
									<img src="{{ asset('storage/'.$accessory->image) }}" alt="Carousel Thumb" class="img-fluid">
								</li>
								<li data-target="#product-carousel" data-slide-to="3">
									<img src="{{ asset('storage/'.$accessory->image) }}" alt="Carousel Thumb" class="img-fluid">
								</li>
								<li data-target="#product-carousel" data-slide-to="4">
									<img src="{{ asset('storage/'.$accessory->image) }}" alt="Carousel Thumb" class="img-fluid">
								</li>
							</ol>

							<!-- Wrapper for slides -->
							<div class="carousel-inner" role="listbox">
								<!-- item -->
								<div class="item carousel-item active">
									<div class="carousel-image">
										<!-- image-wrapper -->
										<img src="{{ asset('storage/'.$accessory->image) }}" alt="Featured Image" class="img-fluid">
									</div>
								</div><!-- item -->

								<!-- item -->
								<div class="item carousel-item">
									<div class="carousel-image">
										<!-- image-wrapper -->
										<img src="{{ asset('storage/'.$accessory->image) }}" alt="Featured Image" class="img-fluid">
									</div>
								</div><!-- item -->

								<!-- item -->
								<div class="item carousel-item">
									<div class="carousel-image">
										<!-- image-wrapper -->
										<img src="{{ asset('storage/'.$accessory->image) }}" alt="Featured Image" class="img-fluid">
									</div>
								</div><!-- item -->

								<!-- item -->
								<div class="item carousel-item">
									<div class="carousel-image">
										<!-- image-wrapper -->
										<img src="{{ asset('storage/'.$accessory->image) }}" alt="Featured Image" class="img-fluid">
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
							<h2>Rs.{{ $accessory->price }}</h2>
							<h3 class="title">{{ ucwords($accessory->accessory_info) }}</h3>
							<span> Ad ID:<a href="#" class="time"> {{ uniqid() }}</a></span></p>
							<span class="icon"><i class="fa fa-clock-o"></i><a href="#">{{ date('D, d M Y g:i A', strtotime($accessory->created_at))}}</a></span>
							<span class="icon"><i class="fa fa-map-marker"></i><a href="#">{{ $accessory->city }}, Pakistan</a></span>
							<span class="icon"><i class="fa fa-dollar"></i><a href="#"> Price:
                                    @if($accessory->negotiable > 0)
                                    Negotiable
                                    @else
                                    Fix
                                    @endif
                                </a></span>
							
							<!-- short-info -->
							<div class="short-info">
								<h4>Short Info</h4>
								<p><strong>Condition: </strong><a href="#">{{ $accessory->condition }}</a> </p>
								<p><strong>Mileage: </strong><a href="#">{{ $accessory->mileage }} Km</a> </p>
								<p><strong>Category: </strong><a href="#">{{ $accessory->category }}</a></p>
								<p><strong>City: </strong><a href="#">{{ $accessory->city }}</a></p>
							</div><!-- short-info -->
							
							<!-- contact-with -->
							<div class="contact-with">
								
							</div><!-- contact-with -->
							
							<!-- social-links -->
							<div class="social-links">
								<h4>Share this ad</h4>
								<ul class="list-inline">
									<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
									<li><a href="#"><i class="fa fa-tumblr-square"></i></a></li>
								</ul>
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
							<p>{{ $accessory->description }}</p>
						</div>
					</div><!-- description -->

					<!-- description-short-info -->
					<div class="col-md-4">					
						<div class="short-info">
							<h4>Short Info</h4>
							<!-- social-icon -->
							<ul>
								<li><i class="fa fa-shopping-biket"></i><a href="#">Delivery: Meet in person</a></li>
								<li><i class="fa fa-user-plus"></i><a href="#">Top ads by <span>GetWheelz</span></a></li>
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
							@foreach ($bikes as $bike)
								
							
							<div class="ad-item row">
								<!-- item-image -->
								<div class="item-image-box col-lg-4">
									<div class="item-image">
										<a href="{{ route('bikes.show', $bike->id) }}"><img src="{{ asset('storage/'. $bike->image) }}" alt="Image" class="img-fluid"></a>
									</div><!-- item-image -->
								</div>								
								
								<div class="item-info col-lg-8">
									<!-- ad-info -->
									<div class="ad-info">
										<h3 class="item-price">Rs.{{ $bike->price }}</h3>
										<h4 class="item-title"><a href="#">{{ $bike->bike_info }}</a></h4>
										<div class="item-cat">
											<span><a href="#">{{ $bike->engine }}</a></span> 
										</div>										
									</div><!-- ad-info -->
									
									<!-- ad-meta -->
									<div class="ad-meta">
										<div class="meta-content">
											<span class="dated"><a href="#">{{ $bike->created_at->diffForHumans() }} </a></span>
                                            <a href="#" class="tag"><i class="fa fa-dollar"></i> Price: 
                                            @if($bike->negotiable > 0)
                                            Negotiable
                                            @else
                                            Fix
                                            @endif
                                            </a>
										</div>										
										<!-- item-info-right -->
										<div class="user-option pull-right">
											<a href="#" data-toggle="tooltip" data-placement="top" title="{{ $bike->city }}, Pakistan"><i class="fa fa-map-marker"></i> </a>
											<a class="online" href="#" data-toggle="tooltip" data-placement="top" title="Individual"><i class="fa fa-user"></i> </a>
										</div><!-- item-info-right -->
									</div><!-- ad-meta -->
								</div><!-- item-info -->
							</div><!-- ad-item -->
							@endforeach
							
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
					<a href="{{ route('bikes.create') }}" class="btn btn-primary">Post Your Ad</a>
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