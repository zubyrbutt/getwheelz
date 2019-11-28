@include('layouts.partial.partial')
    <section id="main" class="clearfix contact-us">
		<div class="container">
					
			<h2 class="title">Shipping Info</h2>


			<div class="corporate-info">
				<div class="row">
					<!-- contact-info -->
					<div class="col-md-4">
						<div class="contact-info">

							<h2>Corporate Info</h2>
							<address>
								<p><strong>adress: </strong>1234 Street Name, City Name, Country</p>
								<p><strong>Phone:</strong> <a href="#">(123) 456-7890</a></p>
								<p><strong>Email: </strong><a href="#"><span class="__cf_email__" data-cfemail="92fbfcf4fdd2f1fdffe2f3fcebbcf1fdff">[email&#160;protected]</span></a></p>
							</address>

							<ul class="social">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div><!-- contact-info -->
					
					<!-- feedback -->
					<div class="col-md-8">
						<div class="feedback">
								@if ($errors->any())
								<div class="alert alert-danger">
									<ul>
										@foreach ($errors->all() as $error)
											<li>{{ $error }}</li>
										@endforeach
									</ul>
								</div>
							@endif
							<h2>Your shipping information</h2>
							<form  action="{{ route('address.store') }}" id="contact-form" class="contact-form" name="contact-form" method="post">
								@csrf
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" name="addressLine" class="form-control" required="required" placeholder="Address line">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" name="city" class="form-control" required="required" placeholder="City">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" name="state" class="form-control" required="required" placeholder="state">
										</div> 
									</div> 
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" name="zip" class="form-control" required="required" placeholder="zip">
										</div> 
                                    </div> 
                                    <div class="col-md-12">
										<div class="form-group">
											<input type="text" name="country" class="form-control" required="required" placeholder="country">
										</div> 
                                    </div> 
                                    <div class="col-md-12">
										<div class="form-group">
											<input type="string" name="phone" class="form-control" required="required" placeholder="phone number">
										</div> 
									</div> 
									   
								</div>
								<div class="form-group">
									<button type="submit" class="btn">Proceed to Checkout</button>
								</div>
							</form>
						</div>				
					</div><!-- feedback -->				
				</div><!-- row -->
			</div>
		</div><!-- container -->
	</section><!-- main -->


@include('layouts.footer')