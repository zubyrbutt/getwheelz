
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
	
	<!-- font -->
	<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Signika+Negative:400,300,600,700' rel='stylesheet' type='text/css'>
	@include('layouts.partial.stripe')
	<!-- icons -->
	<link rel="icon" href="">	
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('theme/images/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('theme/images/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('theme/images/ico/apple-touch-icon-72-precomposed.html') }}">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{ asset('theme/images/ico/apple-touch-icon-57-precomposed.png') }}">
    <!-- icons -->

    
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

                <a class="navbar-brand" href="{{ url('/') }}"><img class="img-fluid" height="100px" width="100px" src="{{ asset('/theme/images/logo.png') }}" alt="Logo"></a>
				
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
                            <li><a href="{{ route('rental.index') }}">Car Rent</a></li>
                            <li><a href="{{ route('review.index') }}">Car Reviews</a></li>
                            <li><a href="{{ route('inspection.index') }}">Inspection</a></li>
                            <li><a href="{{ route('insurance.index') }}">Insurance</a></li>
                            <li><a href="{{ route('verification.car') }}">MTMIS Punjab</a></li>
                            <li><a href="{{ route('verification.license') }}">DLIMS Punjab</a></li>
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

