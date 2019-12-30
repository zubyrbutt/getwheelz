
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
<section class="home-banner-inspection">
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
                    <h1> Car Inspection</h1>
                    <h2>GetWheelz</span></h2>
                    <p>Get a detailed 200+ check points inspection report and buy used cars with complete peace of mind.</p>
                </div>
            </div>
            <div class="col-md-4 offset-md-2">
                <div class="contact-form">
                    <h2>Schedule GetWheelz Car Inspection</h2>
                    <div class="contact-info">
                        <form action="{{ route('inspection.store') }}" method="POST">
                            @csrf
             <div class="form-group">
                 <label for="car_type">Model Year</label>
                 <select id="model" class="custom-select" name="model">
                        <option selected>Slect Car Model</option>

                     <option value="2019">2019</option>
                     <option value="2018">2018</option>
                     <option value="2017">2017</option>
                     <option value="2016">2016</option>
                     <option value="2015">2015</option>
                     <option value="2014">2014</option>
                     <option value="2013">2013</option>
                     <option value="2012">2012</option>
                     <option value="2011">2011</option>
                     <option value="2010">2010</option>

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
                                        <label for="car_info">Car Info</label>
                                        <input id="car_info" class="form-control" type="text" name="car_info" placeholder="ex, Hunda, GLi 2019">
                                    </div>
                                    <div class="form-group">
                                            <label for="name">Full Name</label>
                                            <input id="name" class="form-control" type="text" name="name" placeholder="ex, Adil, john ..">
                                        </div>
                                        <div class="form-group">
                                                <label for="name">Phone number</label>
                                                <input id="phone" class="form-control" type="text" name="phone" placeholder="03123456789">
                                            </div>
                                        <div class="form-group">
                                                <label for="email">Email</label>
                                                <input id="email" class="form-control" type="email" name="email">
                                            </div>
                                            
                                    <div class="form-group">
                                        <label for="starting_date">Set date & time</label>
                                        <input name="schedule" type="text" class="datepicker-here" data-language="en" data-timepicker="true" data-time-format='hh:ii aa'>

                                    </div>
              
                            <button type="submit" class="form-control btn btn-success">Book Date</button>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- row -->	
    </div><!-- container -->	
</section><!-- home banner -->

<div class="page">
    <div class="container">
       
        
    
        
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
                        <p>Detailed digital report includes road test, photos and car condition report</p>
                    </div>
                </div><!-- single-cta -->

                <!-- single-cta -->
                <div class="col-md-4">
                    <div class="single-cta">
                        <!-- cta-icon -->
                        <div class="cta-icon icon-support">
                            <img src="{{ asset('theme/images/icon/14.png') }}" alt="Icon" class="img-fluid">
                        </div><!-- cta-icon -->

                        <h4>Qualified Technicians</h4>
                        <p>Specialist technicians providing comprehensive vehicle inspection across Pakistan.</p>
                    </div>
                </div><!-- single-cta -->

                <!-- single-cta -->
                <div class="col-md-4">
                    <div class="single-cta">
                        <!-- cta-icon -->
                        <div class="cta-icon icon-trading">
                            <img src="{{ asset('theme/images/icon/15.png') }}" alt="Icon" class="img-fluid">
                        </div><!-- cta-icon -->

                        <h4>Peace of Mind</h4>
                        <p>Get the information you need to make an informed decision on your next vehicle purchase.</p>
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