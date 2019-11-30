
	<!-- header -->
	@include('layouts.nav')

	<!-- main -->
	<section id="main" class="clearfix home-default">
		<div class="container">
			<!-- banner -->
			<div class="banner-section text-center">
				<h1 class="title">World's Largest Classifieds Portal </h1>
				<h3>Search from over 15,00,000 classifieds & Post unlimited classifieds free!</h3>
				<!-- banner-form -->
				@if (session('status'))
				<div class="alert alert-success" role="alert">
					{{ session('status') }}
				</div>
			@endif
				<div class="banner-form">
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
					
						<input type="text" class="form-control" placeholder="Type Your key word">
						<button type="submit" class="form-control" value="Search">Search</button>
					</form>
				</div><!-- banner-form -->
				
				<!-- banner-socail -->
				<ul class="banner-socail list-inline">
					<li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#" title="Youtube"><i class="fa fa-youtube"></i></a></li>
				</ul><!-- banner-socail -->
			</div><!-- banner -->
			
			<!-- main-content -->
			<div class="main-content">
				<!-- row -->
				<div class="row">
					<div class="d-none d-md-block col-md-2 text-center">
						<div class="advertisement">
						</div>
					</div>
					
					<!-- product-list -->
					<div class="col-md-8">
						<!-- categorys -->
						<div class="section category-ad text-center">
							<ul class="category-list">	
								<li class="category-item">
									<a href="{{ route('cars.index') }}">
										<div class="category-icon"><img src="{{ asset('theme/images/icon/1.png') }}" alt="images" class="img-fluid"></div>
										<span class="category-title">Cars & Vehicles</span>
										<span class="category-quantity">(1298)</span>
									</a>
								</li><!-- category-item -->
								
								<li class="category-item">
									<a href="categories.html">
										<div class="category-icon"><img src="{{ asset('theme/images/icon/2.png') }}" alt="images" class="img-fluid"></div>
										<span class="category-title">Electrics & Gedgets</span>
										<span class="category-quantity">(76212)</span>
									</a>
								</li><!-- category-item -->
								
								<li class="category-item">
									<a href="categories.html">
										<div class="category-icon"><img src="{{ asset('theme/images/icon/3.png') }}" alt="images" class="img-fluid"></div>
										<span class="category-title">Real Estate</span>
										<span class="category-quantity">(212)</span>
									</a>
								</li><!-- category-item -->
								
								<li class="category-item">
									<a href="categories.html">
										<div class="category-icon"><img src="{{ asset('theme/images/icon/4.png') }}" alt="images" class="img-fluid"></div>
										<span class="category-title">Sports & Games</span>
										<span class="category-quantity">(972)</span>
									</a>
								</li><!-- category-item -->
								
								<li class="category-item">
									<a href="categories.html">
										<div class="category-icon"><img src="{{ asset('theme/images/icon/5.png') }}" alt="images" class="img-fluid"></div>
										<span class="category-title">Fshion & Beauty</span>
										<span class="category-quantity">(1298)</span>
									</a>
								</li><!-- category-item -->
								
								<li class="category-item">
									<a href="categories.html">
										<div class="category-icon"><img src="{{ asset('theme/images/icon/6.png') }}" alt="images" class="img-fluid"></div>
										<span class="category-title">Pets & Animals</span>
										<span class="category-quantity">(76212)</span>
									</a>
								</li><!-- category-item -->
								
								<li class="category-item">
									<a href="categories.html">
										<div class="category-icon"><img src="{{ asset('theme/images/icon/9.png') }}" alt="images" class="img-fluid"></div>
										<span class="category-title">Home Appliances</span>
										<span class="category-quantity">(1298)</span>
									</a>
								</li><!-- category-item -->
								
								<li class="category-item">
									<a href="categories.html">
										<div class="category-icon"><img src="{{ asset('theme/images/icon/10.png') }}" alt="images" class="img-fluid"></div>
										<span class="category-title">Matrimony Services</span>
										<span class="category-quantity">(76212)</span>
									</a>
								</li><!-- category-item -->
								
								<li class="category-item">
									<a href="categories.html">
										<div class="category-icon"><img src="{{ asset('theme/images/icon/11.png') }}" alt="images" class="img-fluid"></div>
										<span class="category-title">Music & Arts</span>
										<span class="category-quantity">(212)</span>
									</a>
								</li><!-- category-item -->
								
								<li class="category-item">
									<a href="#">
										<div class="category-icon"><img src="{{ asset('theme/images/icon/12.png') }}" alt="images" class="img-fluid"></div>
										<span class="category-title">Miscellaneous </span>
										<span class="category-quantity">(1298)</span>
									</a>
								</li><!-- category-item -->
								
								<li class="category-item">
									<a href="categories.html">
										<div class="category-icon"><img src="{{ asset('theme/images/icon/7.png') }}" alt="images" class="img-fluid"></div>
										<span class="category-title">Job Openings </span>
										<span class="category-quantity">(124)</span>
									</a>
								</li><!-- category-item -->
								
								<li class="category-item">
									<a href="categories.html">
										<div class="category-icon"><img src="{{ asset('theme/images/icon/8.png') }}" alt="images" class="img-fluid"></div>
										<span class="category-title">Books & Magazines</span>
										<span class="category-quantity">(972)</span>
									</a>
								</li><!-- category-item -->					
							</ul>				
						</div><!-- category-ad -->	
						
						<!-- featureds -->
						<div class="section featureds">
							<div class="row">
								<div class="col-sm-12">
									<div class="section-title featured-top">
										<h4>Featured Ads</h4>
									</div>
								</div>
							</div>
							
							<!-- featured-slider -->
							<div class="featured-slider">
								<div id="featured-slider" >
									<!-- featured -->
									<div class="featured">
										<div class="featured-image">
											<a href="details.html"><img src="{{ asset('theme/images/featured/1.jpg') }}" alt="" class="img-fluid"></a>
											<a href="#" class="verified" data-toggle="tooltip" data-placement="left" title="Verified"><i class="fa fa-check-square-o"></i></a>
										</div>
										
										<!-- ad-info -->
										<div class="ad-info">
											<h3 class="item-price">$800.00</h3>
											<h4 class="item-title"><a href="#">Apple MacBook Pro with Retina Display</a></h4>
											<div class="item-cat">
												<span><a href="#">Electronics & Gedgets</a></span> 
											</div>
										</div><!-- ad-info -->
										
										<!-- ad-meta -->
										<div class="ad-meta">
											<div class="meta-content">
												<span class="dated"><a href="#">7 Jan 10:10 pm </a></span>
											</div>									
											<!-- item-info-right -->
											<div class="user-option pull-right">
												<a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
												<a href="#" data-toggle="tooltip" data-placement="top" title="Dealer"><i class="fa fa-suitcase"></i> </a>											
											</div><!-- item-info-right -->
										</div><!-- ad-meta -->
									</div><!-- featured -->
									
									<div class="featured">
										<div class="featured-image">
											<a href="details.html"><img src="{{ asset('theme/images/featured/2.jpg"') }}" class="img-fluid"></a>
										</div>
										
										<!-- ad-info -->
										<div class="ad-info">
											<h3 class="item-price">$25000.00</h3>
											<h4 class="item-title"><a href="#">2018 Bugatti Veyron Sport Middlecar</a></h4>
											<div class="item-cat">
												<span><a href="#">Cars & Vehicles</a></span> 
											</div>
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
											<a href="details.html"><img src="{{ asset('theme/images/featured/3.jpg') }}" alt="" class="img-fluid"></a>
											<a href="#" class="verified" data-toggle="tooltip" data-placement="left" title="Verified"><i class="fa fa-check-square-o"></i></a>
										</div>
										
										<!-- ad-info -->
										<!-- ad-info -->
										<div class="ad-info">
											<h3 class="item-price">$250.00 <span class="negotiable">(Negotiable)</span></h3>
											<h4 class="item-title"><a href="#">Vivster Acoustic Guitar</a></h4>
											<div class="item-cat">
												<span><a href="#">Music & Art</a></span> 
											</div>
										</div><!-- ad-info -->
										
										<!-- ad-meta -->
										<div class="ad-meta">
											<div class="meta-content">
												<span class="dated"><a href="#">7 Jan 10:10 pm </a></span>
											</div>									
											<!-- item-info-right -->
											<div class="user-option pull-right">
												<a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
												<a href="#" data-toggle="tooltip" data-placement="top" title="Dealer"><i class="fa fa-suitcase"></i> </a>											
											</div><!-- item-info-right -->
										</div><!-- ad-meta -->
									</div><!-- featured -->
									<div class="featured">
										<div class="featured-image">
											<a href="details.html"><img src="{{ asset('theme/images/trending/4.jpg') }}" alt="" class="img-fluid"></a>
										</div>
										
										<!-- ad-info -->
										<div class="ad-info">
											<h3 class="item-price">$50.00</h3>
											<h4 class="item-title"><a href="#">Rick Morton- Magicius Chase</a></h4>
											<div class="item-cat">
												<span><a href="#">Books & Magazines</a></span> 
											</div>
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
											<a href="details.html"><img src="{{ asset('theme/images/trending/3.jpg') }}" alt="" class="img-fluid"></a>
										</div>
										
										<!-- ad-info -->
										<div class="ad-info">
											<h3 class="item-price">$380.00</h3>
											<h4 class="item-title"><a href="#">Samsung Galaxy S6 Edge</a></h4>
											<div class="item-cat">
												<span><a href="#">Electronics & Gedgets</a></span> 
											</div>
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
							</div><!-- #featured-slider -->
						</div><!-- featureds -->

						<!-- ad-section -->						
						<div class="ad-section text-center">
						</div><!-- ad-section -->

						<!-- trending-ads -->
						<div class="section trending-ads">
							<div class="section-title tab-manu">
								<h4>Trending Ads</h4>
								 <!-- Nav tabs -->      
								<ul class="nav nav-tabs" role="tablist">
									<li role="presentation"><a class="active" href="#recent-ads"  data-toggle="tab">Recent Ads</a></li>
									<li role="presentation"><a href="#popular" data-toggle="tab">Popular Ads</a></li>
									<li role="presentation"><a href="#hot-ads"  data-toggle="tab">Hot Ads</a></li>
								</ul>
							</div>

				  			<!-- Tab panes -->
							<div class="tab-content">
								<!-- tab-pane -->
								<div role="tabpanel" class="tab-pane fade in active show" id="recent-ads">
									<!-- ad-item -->
									@foreach ($cars as $car)
										
									
									<div class="ad-item row">
										<!-- item-image -->
										<div class="item-image-box col-lg-4">
											<div class="item-image">
												<a href="details.html"><img src="{{ asset('theme/images/trending/1.jpg') }}" alt="Image" class="img-fluid"></a>
												<a href="#" class="verified" data-toggle="tooltip" data-placement="left" title="Verified"><i class="fa fa-check-square-o"></i></a>
											</div><!-- item-image -->
										</div>
										
											<!-- rending-text -->
										<div class="item-info col-lg-8">
											<!-- ad-info -->
											<div class="ad-info">
												<h3 class="item-price">Rs.{{ $car->price}}</h3>
												<h4 class="item-title"><a href="{{ url('cars/'.$car->id) }}">{{ ucwords($car->car_info) }}</a></h4>
												<div class="item-cat">
													<span><a href="#">{{ ucwords($car->city) }}</a></span> / Registraion City
													<span><a href="#">/ {{ ucwords($car->registration_city) }} </a></span>
												</div>	
											</div><!-- ad-info -->
											
											<!-- ad-meta -->
											<div class="ad-meta">
												<div class="meta-content">
													<span class="dated"><a href="#">{{ date('D, d M Y g:i A', strtotime($car->created_at))}} </a></span>
													<a href="#" class="tag"><i class="fa fa-tags"></i> Used</a>
												</div>									
												<!-- item-info-right -->
												<div class="user-option pull-right">
													<a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
													<a class="online" href="#" data-toggle="tooltip" data-placement="top" title="Dealer"><i class="fa fa-suitcase"></i> </a>											
												</div><!-- item-info-right -->
											</div><!-- ad-meta -->
										</div>
										
										<!-- item-info -->
									</div><!-- ad-item -->
									@endforeach
									<!-- ad-item -->
									{{-- <div class="ad-item row">
										<div class="item-image-box col-lg-4">
											<!-- item-image -->
											<div class="item-image">
												<a href="details.html"><img src="{{ asset('theme/images/trending/2.jpg') }}" alt="Image" class="img-fluid"></a>
											</div><!-- item-image -->
										</div><!-- item-image-box -->
										
										<!-- rending-text -->
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
													<a class="online" href="#" data-toggle="tooltip" data-placement="top" title="Dealer"><i class="fa fa-suitcase"></i> </a>											
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
												<a href="#" class="verified" data-toggle="tooltip" data-placement="left" title="Verified"><i class="fa fa-check-square-o"></i></a>
											</div><!-- item-image -->
										</div><!-- item-image-box -->
										
										<!-- rending-text -->
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

									<!-- ad-item -->
									<div class="ad-item row">
										<div class="item-image-box col-lg-4">
											<!-- item-image -->
											<div class="item-image">
												<a href="details.html"><img src="{{ asset('theme/images/trending/3.jpg') }}" alt="Image" class="img-fluid"></a>
											</div><!-- item-image -->
										</div><!-- item-image-box -->
										
										<!-- rending-text -->
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
									
								</div><!-- tab-pane --> --}}
								
								<!-- tab-pane -->
								<div role="tabpanel" class="tab-pane fade" id="popular">

									<div class="ad-item row">
										<!-- item-image -->
										<div class="item-image-box col-lg-4">
											<div class="item-image">
												<a href="details.html"><img src="images/trending/1.jpg" alt="Image" class="img-fluid"></a>
												<a href="#" class="verified" data-toggle="tooltip" data-placement="left" title="Verified"><i class="fa fa-check-square-o"></i></a>
											</div><!-- item-image -->
										</div>
										
										<!-- rending-text -->
										<div class="item-info col-lg-8">
											<!-- ad-info -->
											<div class="ad-info">
												<h3 class="item-price">$50.00</h3>
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
													<a href="#" class="tag"><i class="fa fa-tags"></i> Used</a>
												</div>									
												<!-- item-info-right -->
												<div class="user-option pull-right">
													<a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
													<a class="online" href="#" data-toggle="tooltip" data-placement="top" title="Dealer"><i class="fa fa-suitcase"></i> </a>											
												</div><!-- item-info-right -->
											</div><!-- ad-meta -->
										</div><!-- item-info -->
									</div><!-- ad-item -->
									
									<div class="ad-item row">
										<div class="item-image-box col-lg-4">
											<!-- item-image -->
											<div class="item-image">
												<a href="details.html"><img src="images/trending/3.jpg" alt="Image" class="img-fluid"></a>
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
												<a href="details.html"><img src="images/trending/2.jpg" alt="Image" class="img-fluid"></a>
											</div><!-- item-image -->
										</div><!-- item-image-box -->
										
										<!-- rending-text -->
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
													<a class="online" href="#" data-toggle="tooltip" data-placement="top" title="Dealer"><i class="fa fa-suitcase"></i> </a>											
												</div><!-- item-info-right -->
											</div><!-- ad-meta -->
										</div><!-- item-info -->
									</div><!-- ad-item -->

									<!-- ad-item -->
									<div class="ad-item row">
										<div class="item-image-box col-lg-4">
											<!-- item-image -->
											<div class="item-image">
												<a href="details.html"><img src="images/trending/4.jpg" alt="Image" class="img-fluid"></a>
												<a href="#" class="verified" data-toggle="tooltip" data-placement="left" title="Verified"><i class="fa fa-check-square-o"></i></a>
											</div><!-- item-image -->
										</div><!-- item-image-box -->
										
										<!-- rending-text -->
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
								</div><!-- tab-pane -->

								<!-- tab-pane -->
								<div role="tabpanel" class="tab-pane fade" id="hot-ads">
									<!-- ad-item -->
									<div class="ad-item row">
										<!-- item-image -->
										<div class="item-image-box col-lg-4">
											<div class="item-image">
												<a href="details.html"><img src="images/trending/1.jpg" alt="Image" class="img-fluid"></a>
												<a href="#" class="verified" data-toggle="tooltip" data-placement="left" title="Verified"><i class="fa fa-check-square-o"></i></a>
											</div><!-- item-image -->
										</div>
										
										<!-- rending-text -->
										<div class="item-info col-lg-8">
											<!-- ad-info -->
											<div class="ad-info">
												<h3 class="item-price">$50.00</h3>
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
													<a href="#" class="tag"><i class="fa fa-tags"></i> Used</a>
												</div>									
												<!-- item-info-right -->
												<div class="user-option pull-right">
													<a href="#" data-toggle="tooltip" data-placement="top" title="Los Angeles, USA"><i class="fa fa-map-marker"></i> </a>
													<a class="online" href="#" data-toggle="tooltip" data-placement="top" title="Dealer"><i class="fa fa-suitcase"></i> </a>											
												</div><!-- item-info-right -->
											</div><!-- ad-meta -->
										</div><!-- item-info -->
									</div><!-- ad-item -->
									<!-- ad-item -->
									<div class="ad-item row">
										<div class="item-image-box col-lg-4">
											<!-- item-image -->
											<div class="item-image">
												<a href="details.html"><img src="images/trending/4.jpg" alt="Image" class="img-fluid"></a>
												<a href="#" class="verified" data-toggle="tooltip" data-placement="left" title="Verified"><i class="fa fa-check-square-o"></i></a>
											</div><!-- item-image -->
										</div><!-- item-image-box -->
										
										<!-- rending-text -->
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

									<div class="ad-item row">
										<div class="item-image-box col-lg-4">
											<!-- item-image -->
											<div class="item-image">
												<a href="details.html"><img src="images/trending/3.jpg" alt="Image" class="img-fluid"></a>
											</div><!-- item-image -->
										</div><!-- item-image-box -->
										
										<!-- ad-item -->
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
												<a href="details.html"><img src="images/trending/2.jpg" alt="Image" class="img-fluid"></a>
											</div><!-- item-image -->
										</div><!-- item-image-box -->
										
										<!-- rending-text -->
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
													<a class="online" href="#" data-toggle="tooltip" data-placement="top" title="Dealer"><i class="fa fa-suitcase"></i> </a>											
												</div><!-- item-info-right -->
											</div><!-- ad-meta -->
										</div><!-- item-info -->
									</div><!-- ad-item -->									
								</div><!-- tab-pane -->
							</div>
						</div><!-- trending-ads -->		

						<!-- cta -->
						<div class="section cta text-center">
							<div class="row">
								<!-- single-cta -->
								<div class="col-lg-4">
									<div class="single-cta">
										<!-- cta-icon -->
										<div class="cta-icon icon-secure">
											<img src="images/icon/13.png" alt="Icon" class="img-fluid">
										</div><!-- cta-icon -->

										<h4>Secure Trading</h4>
										<p>Duis autem vel eum iriure dolor in hendrerit in</p>
									</div>
								</div><!-- single-cta -->

								<!-- single-cta -->
								<div class="col-lg-4">
									<div class="single-cta">
										<!-- cta-icon -->
										<div class="cta-icon icon-support">
											<img src="images/icon/14.png" alt="Icon" class="img-fluid">
										</div><!-- cta-icon -->

										<h4>24/7 Support</h4>
										<p>Duis autem vel eum iriure dolor in hendrerit in</p>
									</div>
								</div><!-- single-cta -->

								<!-- single-cta -->
								<div class="col-lg-4">
									<div class="single-cta">
										<!-- cta-icon -->
										<div class="cta-icon icon-trading">
											<img src="images/icon/15.png" alt="Icon" class="img-fluid">
										</div><!-- cta-icon -->

										<h4>Easy Trading</h4>
										<p>Duis autem vel eum iriure dolor in hendrerit in</p>
									</div>
								</div><!-- single-cta -->
							</div><!-- row -->
						</div><!-- cta -->
					</div><!-- product-list -->

					<!-- advertisement -->
					<div class="d-none d-md-block col-md-2">
						<div class="advertisement text-center">
						</div>
					</div><!-- advertisement -->
				</div><!-- row -->
			</div><!-- main-content -->
		</div><!-- container -->
	</section><!-- main -->
	
	<!-- download -->
	<section id="download" class="clearfix parallax-section">
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
						<img src="images/icon/16.png" alt="Image" class="img-fluid">
						<span class="pull-left">
							<span>available on</span>
							<strong>Google Play</strong>
						</span>
					</a>
				</div><!-- download-app -->

				<!-- download-app -->
				<div class="col-md-4">
					<a href="#" class="download-app">
						<img src="images/icon/17.png" alt="Image" class="img-fluid">
						<span class="pull-left">
							<span>available on</span>
							<strong>App Store</strong>
						</span>
					</a>
				</div><!-- download-app -->

				<!-- download-app -->
				<div class="col-md-4">
					<a href="#" class="download-app">
						<img src="images/icon/18.png" alt="Image" class="img-fluid">
						<span class="pull-left">
							<span>available on</span>
							<strong>Windows Store</strong>
						</span>
					</a>
				</div><!-- download-app -->
			</div><!-- row -->
		</div><!-- contaioner -->
	</section><!-- download -->
	
	<!-- footer -->
	@include('layouts.footer')
	{{-- end footer --}}
  </body>

<!-- Mirrored from demo.themeregion.com/trade/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 Nov 2019 16:53:32 GMT -->
</html>