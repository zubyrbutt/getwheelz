
	<!-- header -->
	@include('layouts.nav')

	<!-- main -->
	<section id="main" class="clearfix home-default">
		<div class="container">
			<!-- banner -->
			<div class="banner-section text-center">
				<h1 class="title">Get Wheelz Pakistan's Classifieds Portal </h1>
				<h3>Search from over 15,00,000 classifieds & Post unlimited classifieds free!</h3>
				<!-- banner-form -->
				@if (session('status'))
				<div class="alert alert-success" role="alert">
					{{ session('status') }}
				</div>
			@endif
				<div class="banner-form">
					<form action="{{ route('search') }}">
						<input type="text" name="query" class="form-control" placeholder="Type Your key word">
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
						<div class="section category-ad text-center" style="width:100%">
							<ul class="category-list">	
								<li class="category-item">
									<a href="{{ route('cars.index') }}">
										<div class="category-icon"><img width="40px" height="40px" src="{{ asset('theme/images/icon/1.png') }}" alt="images" class="img-fluid"></div>
										<span class="category-title">Cars & Vehicles</span>
										<span class="category-quantity">
											@if($cars->count()>0)
											({{ ($cars->count()) }})
											@else
											(0)
											@endif
										</span>
									</a>
								</li><!-- category-item -->
								
								<li class="category-item">
									<a href="categories.html">
										<div class="category-icon"><img width="40px" height="40px" src="{{ asset('theme/images/icon/2.png') }}" alt="images" class="img-fluid"></div>
										<span class="category-title">Bikes</span>
										<span class="category-quantity">
											
										
									@if($bikes->count()>0)
									({{ $bikes->count() }})
									@else
									(0)
									@endif
									</span>
									</a>
								</li><!-- category-item -->
								
								<li class="category-item">
									<a href="categories.html">
										<div class="category-icon"><img width="40px" height="40px" src="{{ asset('theme/images/icon/3.png') }}" alt="images" class="img-fluid"></div>
										<span class="category-title">Vehicles Parts</span>
										<span class="category-quantity">

											@if($accessories->count() >0)
											({{ $accessories->count() }})
											@else
											(0)
											@endif
										</span>
									</a>
								</li><!-- category-item -->
								
								<li class="category-item">
									<a href="categories.html">
										<div class="category-icon"><img height="40px" width="40px" src="{{ asset('theme/images/icon/4.png') }}" alt="images" class="img-fluid"></div>
										<span class="category-title">Car Rental</span>
										<span class="category-quantity">
											(0)
										</span>
									</a>
								</li><!-- category-item -->
								
								
								<li class="category-item">
									<a href="{{ route('cars.index') }}">
										<div class="category-icon"><img width="40px" height="40px" src="{{ asset('theme/images/icon/5.png') }}" alt="images" class="img-fluid"></div>
										<span class="category-title">Discussions </span>
										<span class="category-quantity">(1298)</span>
									</a>
								</li><!-- category-item -->
								<li class="category-item">
									<a href="{{ route('cars.index') }}">
										<div class="category-icon"><img width="40px" height="40px" src="{{ asset('theme/images/icon/6.png') }}" alt="images" class="img-fluid"></div>
										<span class="category-title">Finace </span>
										<span class="category-quantity">(1298)</span>
									</a>
								</li><!-- category-item -->
								<li class="category-item">
									<a href="categories.html">
										<div class="category-icon"><img width="40px" height="40px" src="{{ asset('theme/images/icon/7.png') }}" alt="images" class="img-fluid"></div>
										<span class="category-title">Inspection </span>
										<span class="category-quantity"></span>
									</a>
								</li><!-- category-item -->
								
								<li class="category-item">
									<a href="categories.html">
										<div class="category-icon"><img width="40px" height="40px" src="{{ asset('theme/images/icon/8.png') }}" alt="images" class="img-fluid"></div>
										<span class="category-title">Cool Rides</span>
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
										<h4>Certified Ads</h4>
									</div>
								</div>
							</div>
							
							<!-- featured-slider -->
							<div class="featured-slider">
								<div id="featured-slider" >
									<!-- featured -->
									@foreach ($certified as $item)
									<div class="featured">
										
											
										
										<div class="featured-image">
											<a href="details.html"><img src="{{ asset('storage/'.$item->image) }}" alt="" class="img-fluid"></a>
											<a href="#" class="verified" data-toggle="tooltip" data-placement="left" title="Certified"><i class="fa fa-check-square-o"></i></a>
										</div>
										
										<!-- ad-info -->
										<div class="ad-info">
											<h3 class="item-price">${{ $item->price }}</h3>
											<h4 class="item-title"><a href="#">{{ $item->car_info }}</a></h4>
											<div class="item-cat">
												<span><a href="#">Transmission: {{ $item->transmission }}</a></span> 
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
												<a href="#" data-toggle="tooltip" data-placement="top" title="GetWheelz Dealer"><i class="fa fa-suitcase"></i> </a>											
											</div><!-- item-info-right -->
										</div><!-- ad-meta -->
									</div><!-- featured -->
									@endforeach
									
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
										<!-- ad-item -->
	
										<!-- ad-item -->@foreach ($cars as $car)
										<div class="ad-item row">
												
											<div class="item-image-box col-lg-4">
												<!-- item-image -->

												<div class="item-image">
													<a href="{{ route('cars.show', $car->id) }}"><img src="{{ asset('storage/'.$car->image) }}" alt="Image" class="img-fluid"></a>
												</div><!-- item-image -->
											</div><!-- item-image-box -->
											
											<!-- rending-text -->
											<div class="item-info col-lg-8">
												<!-- ad-info -->
												{{-- starting foreach --}}
												
													
												
												<div class="ad-info">
													<h3 class="item-price">${{ $car->price }} </h3>
													<h4 class="item-title"><a href="{{ route('cars.show',$car->id) }}">{{ ucwords($car->car_info) }}</a></h4>
													<div class="item-cat">
														<span>Posted By: {{ ucwords($car->user->name) }}</span> 
														
													</div>										
												</div><!-- ad-info -->
												
												<!-- ad-meta -->
												<div class="ad-meta">
													<div class="meta-content">
														<span class="dated"><a href="#">{{ $car->created_at->diffForHumans() }} </a></span>
														<a href="#" class="tag"><i class="fa fa-info"></i> {{ $car->engine }}</a>
													</div>									
													<!-- item-info-right -->
													<div class="user-option pull-right">
														<a href="#" data-toggle="tooltip" data-placement="top" title="{{ $car->city }}, Pakistan"><i class="fa fa-map-marker"></i> </a>
														<a class="online" href="#" data-toggle="tooltip" data-placement="top" title="Dealer"><i class="fa fa-suitcase"></i> </a>											
													</div><!-- item-info-right -->
												</div><!-- ad-meta -->
											</div>
											
											{{-- end foreach --}}

											<!-- item-info -->
										</div>		
										@endforeach
									</div><!-- tab-pane -->
									
									<!-- tab-pane -->
									<div role="tabpanel" class="tab-pane fade" id="popular">
											@foreach ($bikes as $bike)
										<div class="ad-item row">
											<!-- item-image -->
											<div class="item-image-box col-lg-4">
												<div class="item-image">
													<a href="{{ route('bikes.show', $bike->id) }}"><img src="{{ asset('storage/'.$bike->image) }}" alt="Image" class="img-fluid"></a>
													<a href="#" class="verified" data-toggle="tooltip" data-placement="left" title="Verified"><i class="fa fa-check-square-o"></i></a>
												</div><!-- item-image -->
											</div>
											
											<!-- rending-text -->
											<div class="item-info col-lg-8">
												<!-- ad-info -->
												
													
												
												<div class="ad-info">
													<h3 class="item-price">${{ $bike->price }}
															@if($bike->negotiable == 0 )
															<span>(Negotiable)</span>
															@else
															<span>(Final Price)</span>
														@endif
													</h3>
													<h4 class="item-title"><a href="{{ route('bikes.show', $bike->id) }}">{{ $bike->bike_info }}</a></h4>
													<div class="item-cat">
														<span><a href="#">Posted By: {{ ucwords($bike->user->name) }}</a></span>
													</div>	
												</div><!-- ad-info -->
												
												<!-- ad-meta -->
												<div class="ad-meta">
													<div class="meta-content">
														<span class="dated"><a href="#">{{ $bike->created_at->diffForHumans() }} </a></span>
														<a href="#" class="tag"><i class="fa fa-info"></i> ({{ $bike->engine }})</a>
													</div>									
													<!-- item-info-right -->
													<div class="user-option pull-right">
														<a href="#" data-toggle="tooltip" data-placement="top" title="{{ $bike->city }}, Pakistan"><i class="fa fa-map-marker"></i> </a>
														<a class="online" href="#" data-toggle="tooltip" data-placement="top" title="Dealer"><i class="fa fa-suitcase"></i> </a>											
													</div><!-- item-info-right -->
												</div>
											</div><!-- item-info -->
										</div><!-- ad-item -->
										@endforeach<!-- ad-meta -->
										
																		
									</div><!-- tab-pane -->
	
									<!-- tab-pane -->
									<div role="tabpanel" class="tab-pane fade" id="hot-ads">
										<!-- ad-item -->
										@foreach($accessories as $accessory)

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
													<h3 class="item-price">${{ $accessory->price }}
														@if($accessory->negotiable == 0 )
														<span>(Negotiable)</span>
														@else
														<span>(Final Price)</span>
													@endif
													</h3>
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
												</div>
												<!-- ad-meta -->
											</div><!-- item-info -->
										</div><!-- ad-item -->
										<!-- ad-item -->
										@endforeach							
									</div><!-- tab-pane -->
								</div>
							</div>
						<!-- cta -->
						<div class="section cta text-center">
							<div class="row">
								<!-- single-cta -->
								<div class="col-lg-4">
									<div class="single-cta">
										<!-- cta-icon -->
										<div class="cta-icon icon-secure">
											<img src="{{ asset('theme/images/icon/13.png') }}" alt="Icon" class="img-fluid">
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
											<img src="{{ asset('theme/images/icon/14.png') }}" alt="Icon" class="img-fluid">
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
											<img src="{{ asset('theme/images/icon/15.png') }}" alt="Icon" class="img-fluid">
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
	
	<!-- footer -->
	@include('layouts.footer')
	@include('sweetalert::alert')
	{{-- end footer --}}
  </body>

</html>