@include('layouts.nav')
<!-- ad-profile-page -->
<section id="main" class="clearfix  ad-profile-page">
		<div class="container">
		
			<div class="breadcrumb-section">
				<!-- breadcrumb -->
				<ol class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li>Ad Post</li>
				</ol><!-- breadcrumb -->						
				<h2 class="title">My Profile</h2>
			</div><!-- banner -->
			
			<div class="ad-profile section">	
				<div class="user-profile">
					<div class="user-images">
						<img src="{{ asset('theme/images/user.jpg') }}" width="100" height="100" alt="User Images" class="img-fluid">
					</div>
					<div class="user">
						<h2>Hello, <a href="#">{{ ucwords(Auth::user()->name) }}</a></h2>
						<h5>Your account was created at: {{ Auth::user()->created_at->diffForHumans() }}</h5>
					</div>

					<div class="favorites-user">
						<div class="my-ads">
							<a href="my-ads.html">
								@if(Auth::user()->cars->count()>0)
								{{ $cars->count() }}
					
								<small>My ADS</small></a>
								@endif
							
						</div>
						<div class="favorites">
							<a href="#">18<small>Favorites</small></a>
						</div>
					</div>								
				</div><!-- user-profile -->
						
				<ul class="user-menu">
					<li class="active"><a href="my-profile.html">Cars ads list</a></li>
					<li><a href="my-ads.html">My ads</a></li>
					<li><a href="favourite-ads.html">Favourite ads</a></li>
					<li><a href="archived-ads.html">Archived ads </a></li>
					<li><a href="pending-ads.html">Pending approval</a></li>
					<li><a href="delete-account.html">Close account</a></li>
				</ul>
			</div><!-- ad-profile -->	

			<div class="profile">
				<div class="row">
					<div class="col-md-8">
						<div class="user-pro-section">
							<!-- profile-details -->
							<div class="profile-details section">
								<h3>cars Ads</h3>
								
					</div><!-- profile -->
						</div>
					</div>
					<div class="col-md-4 text-center">
						<div class="recommended-cta">					
							<div class="cta">
								<!-- single-cta -->						
								<div class="single-cta">
									<!-- cta-icon -->
									<div class="cta-icon icon-secure">
										<img src="images/icon/13.png" alt="Icon" class="img-fluid">
									</div><!-- cta-icon -->

									<h4>Secure Trading</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
								</div><!-- single-cta -->

								<!-- single-cta -->
								<div class="single-cta">
									<!-- cta-icon -->
									<div class="cta-icon icon-support">
										<img src="images/icon/14.png" alt="Icon" class="img-fluid">
									</div><!-- cta-icon -->

									<h4>24/7 Support</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
								</div><!-- single-cta -->
							

								<!-- single-cta -->
								<div class="single-cta">
									<!-- cta-icon -->
									<div class="cta-icon icon-trading">
										<img src="images/icon/15.png" alt="Icon" class="img-fluid">
									</div><!-- cta-icon -->

									<h4>Easy Trading</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
								</div><!-- single-cta -->

								<!-- single-cta -->
								<div class="single-cta">
									<h5>Need Help?</h5>
                                    GetWheelz					<p><span>Give a call on</span><a href="tellto:08048100000"> 08048100000</a></p>
								</div><!-- single-cta -->
							</div>
						</div><!-- cta -->
					</div><!-- recommended-cta-->
				</div><!-- row -->	
			</div>				
		</div><!-- container -->
	</section><!-- ad-profile-page -->
	


@include('layouts.footer')