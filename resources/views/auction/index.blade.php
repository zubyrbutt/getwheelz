
@include('layouts.nav')
<section class="home-banner">
    <div class="banner-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="car-info">
                    					
                    <h2>Auction | Get Wheelz </h2>
                    <span>Get the original Auction Sheet Verified by GetWheelz to buy the Japanese car with complete peace of mind!</span>
                     <div class="row form-group add-title">
                        <div class="col-sm-9">
                            <input type="text" name="search"  class="form-control" placeholder="Enter Chassis number (eg:ZZT240-45234)">
                        </div>
                </div>
                    <span><button type="submit" class="btn btn-primary">Search</button></span>
                </div>
            </div>
            
        </div><!-- row -->	
    </div><!-- container -->	
</section><!-- home banner -->


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
@include('layouts.footer')