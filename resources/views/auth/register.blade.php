
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

<!-- signup-page -->
<section id="main" class="clearfix user-page">
		<div class="container">
			<div class="row text-center">
				<!-- user-login -->			
				<div class="col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
					<div class="user-account">
						<h2>Create a Trade Account</h2>
                        <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                            @csrf
							<div class="form-group">
								<input type="text" name="name" class="form-control" placeholder="Name" >
							</div>
							<div class="form-group">
								<input type="email" name="email" class="form-control" placeholder="Email Id">
							</div>
							<div class="form-group">
								<input type="tel" name="phone" pattern='^\+?\d{0,13}' class="form-control" placeholder="Phone number">
                            </div>
                            <div class="form-group">
								<input type="file" name="image"  class="form-control">
							</div>
							<div class="form-group">
								<input type="password" name="password" class="form-control" placeholder="Password">
							</div>
                            <div class="form-group">
                                    <input type="password" name="password_confirmation"  class="form-control" placeholder="Password">
                                </div>
                           
							<!-- select -->
						
							
							<div class="checkbox">
								<label class="pull-left checked" for="signing"><input type="checkbox" name="signing" id="signing"> By signing up for an account you agree to our Terms and Conditions </label>
                            </div><!-- checkbox -->	
                            
							<button type="submit" class="btn">{{ __('Register') }}</button>	
						</form>
						<!-- checkbox -->
										
					</div>
				</div><!-- user-login -->			
			</div><!-- row -->	
		</div><!-- container -->
	</section><!-- signup-page -->


    
<!-- JS -->
<script src="{{ asset('theme/js/jquery.min.js') }}"></script>
<script src="{{ asset('theme/js/popper.min.js') }}"></script>
<script src="{{ asset('theme/js/modernizr.min.js') }}"></script>
<script src="{{ asset('theme/js/bootstrap.min.js') }}"></script>

<script src="{{ asset('theme/js/gmaps.min.js') }}"></script>
<script src="{{ asset('theme/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('theme/js/scrollup.min.js') }}"></script>
<script src="{{ asset('theme/js/price-range.js') }}"></script> 
<script src="{{ asset('theme/js/jquery.countdown.js') }}"></script>    
<script src="{{ asset('theme/js/switcher.js') }}"></script>
<script src="{{ asset('theme/js/custom.js') }}"></script>

<script src="{{ asset('js/finance.js') }}"></script>

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


{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
