@include('layouts.partial.partial')


<section id="main" class="clearfix contact-us">
  <div class="container">
        
    <h2 class="title">Shipping Info</h2>


    <div class="corporate-info">
      <div class="row">
        <!-- contact-info -->
        <div class="col-md-4">
          <div class="contact-info">

            <h2>your Info</h2>
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
            <h2>Your Card Detail Please ..</h2>

<form action="{{ route('payment.store') }}" method="POST" id="payment-form">
  @csrf
  <div class="form-row">
    <label for="card-element">
      Credit or debit card
    </label>
    <div id="card-element">
      <!-- A Stripe Element will be inserted here. -->
    </div>

    <!-- Used to display form errors. -->
    <div id="card-errors" role="alert"></div>
  </div>

  <button class="btn btn-primary m-2">Submit Payment</button>
</form>
          </div>				
        </div><!-- feedback -->				
      </div><!-- row -->
    </div>
  </div><!-- container -->
</section><!-- main -->

@include('layouts.footer')