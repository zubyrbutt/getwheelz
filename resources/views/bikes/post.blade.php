@include('layouts.nav')

<body>
    <!-- header -->

    <!-- main -->
    <section id="main" class="clearfix ad-details-page">
        <div class="container">

            <div class="breadcrumb-section">
                <!-- breadcrumb -->
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li>Ad Post</li>
                </ol>
                <!-- breadcrumb -->
                <h2 class="title">Bikes</h2>
            </div>
            <!-- banner -->
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <div class="adpost-details">
                <div class="row">
                    <div class="col-lg-8">
                        <form action="{{ route('bikes.store') }}" method="POST" enctype="multipart/form-data">
                            <fieldset>
								@csrf
                                <div class="section postdetails">
                                    <h4>Sell an item or service</h4>
                                    <div class="form-group selected-product">
                                        <ul class="select-category list-inline">
                                            <li>
                                                <a href="ad-post.html">
                                                    <span class="select">
														<img src="{{ asset('theme/images/icon/1.png') }}" alt="Images" class="img-fluid">
													</span>Vehicles
                                                </a>
                                            </li>

                                            <li class="active">
                                                <a href="#">Bikes</a>
                                            </li>
                                        </ul>
                                        {{-- <a class="edit" href="#"><i class="fa fa-pencil"></i>Edit</a> --}}
                                    </div>
                                    {{--
                                    <div class="row form-group">
                                        <label class="col-sm-3">Type of ad<span class="required">*</span></label>
                                        <div class="col-sm-9 user-type">
                                            <input type="radio" name="sellType" value="newsell" id="newsell">
                                            <label for="newsell">I want to sell </label>
                                            <input type="radio" name="sellType" value="newbuy" id="newbuy">
                                            <label for="newbuy">want to buy</label>
                                        </div>
                                    </div> --}}
                                    <div class="row form-group brand-name">
                                        <label class="col-sm-3 label-title">City<span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <select id="city" name="city" class="form-control">
                                                <option selected>Select your city</option>
                                                <option value="Islamabad">Islamabad</option>
                                                <option value="Rawalpindi">Rawalpindi</option>
                                                <option value="Lahore">Lahore</option>
                                                <option value="Karachi">Karachi</option>                                              
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row form-group add-title">
                                        <label class="col-sm-3 label-title">Bike Info<span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="bike_info" class="form-control" id="text" placeholder="ex, Honda CG 125 ">
                                        </div>
                                    </div>

                                    <div class="row form-group brand-name">
                                        <label class="col-sm-3 label-title">Registration City<span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <select id="registration_city" name="registration_city" class="form-control">
                                                <option selected>Select your Registration City</option>
                                                <option value="Islamabad">Islamabad</option>
                                                <option value="Rawalpindi">Rawalpindi</option>
                                                <option value="Lahore">Lahore</option>
                                                <option value="Karachi">Karachi</option>                                              
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group add-title">
                                        <label class="col-sm-3 label-title">Mileage<span class="required">* </span><small> km</small></label>
                                        <div class="col-sm-9">
                                            <input type="number" name="mileage" class="form-control" id="text" placeholder="ex,  (1-1000000) ">
                                        </div>
                                    </div>

                                    
                                    <div class="row form-group brand-name">
                                        <label class="col-sm-3 label-title">Engine Type<span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <select id="engine" name="engine"  class="form-control">
                                                <option selected>Engine Tpye</option>
                                                <option value="2 Stroke">2 Stroke</option>
                                                <option value="4 Sroke">4 Stroke</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group brand-name">
                                        <label class="col-sm-3 label-title">Model<span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <select id="model" name="model"  class="form-control">
                                                <option selected>Bike Model</option>
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
                                    </div>
    
                                    <div class="row form-group item-description">
                                        <label class="col-sm-3 label-title">Description<span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="description" id="textarea" placeholder="Write few lines about your products" rows="8"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-9 offset-sm-3">
                                            <p>5000 characters left</p>
                                        </div>
                                    </div>
                                    
                                    <div class="section seller-info">
                                        <h4>Upload Photos - and Adnatioanl feature</h4>
                                        <div class="row form-group add-image">
                                            <label class="col-sm-3 label-title">Photos for your ad <span>(This will be your cover photo )</span> </label>
                                            <div class="col-sm-9">
                                                <h5><i class="fa fa-upload" aria-hidden="true"></i>Select Files to Upload / Drag and Drop Files <span>You can add multiple images.</span></h5>
                                                <div class="upload-section">
                                                    <label class="upload-image" for="upload-image-one">
                                                        <input type="file" id="upload-image-one">
                                                    </label>
    
                                                    <label class="upload-image" for="upload-image-two">
                                                        <input type="file" id="upload-image-two">
                                                    </label>
                                                    <label class="upload-image" for="upload-image-three">
                                                        <input type="file" id="upload-image-three">
                                                    </label>
    
                                                    <label class="upload-image" for="upload-imagefour">
                                                        <input type="file" id="upload-imagefour">
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
    
                                    
                                </div>

                                
                                    {{--
                                    <div class="row form-group select-condition">
                                        <label class="col-sm-3">Condition<span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="radio" name="itemCon" value="new" id="new">
                                            <label for="new">New</label>
                                            <input type="radio" name="itemCon" value="used" id="used">
                                            <label for="used">Used</label>
                                        </div>
                                    </div> --}}

                                   
                                </div>
                            
                                <!-- section -->

                                <div class="section seller-info">
                                    <h4>Expected Selling Price</h4>
                                    <div class="row form-group select-price">
                                        <label class="col-sm-2 label-title">Price<span class="required">*</span><small>Rs.</small></label>
                                        <div class="col-sm-9">
                                            <input type="number" name="price" class="form-control" placeholder="ex, 24000" id="text1">                                                 
                                                    <input type="radio" name="negotiable" value="0" id="Negotiable"> 
                                                    <label for="Negotiable">Negotiable</label>
                                                    <input type="radio" name="negotiable" value="1" id="Final_Price"> 
                                                    <label for="Final_Price">Final Price</label>
                                               
                                            </div>
                                        
                                    </div>
                                </div>
                                <div class="section seller-info">
                                    <h4>Your Information</h4> {{--
                                    <div class="row form-group">
                                        <label class="col-sm-3 label-title">Condition<span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="radio" name="sellerType" value="individual" id="individual">
                                            <label for="individual">Individual</label>
                                            <input type="radio" name="sellerType" value="dealer" id="dealer">
                                            <label for="dealer">Dealer</label>
                                        </div>
                                    </div> --}}
                                    <div class="row form-group">
                                        <label class="col-sm-3 label-title">Your Name<span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="name" class="form-control" placeholder="ex, Jhon Doe">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-sm-3 label-title">Your Email ID<span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="email" name="email" class="form-control" placeholder="ex, jhondoe@mail.com">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-sm-3 label-title">Mobile Number<span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="mobileNumber" class="form-control" placeholder="ex, +912457895">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <label class="col-sm-3 label-title">Address</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="address" class="form-control" placeholder="ex, alekdera House, coprotec, usa">
                                        </div>
                                    </div>
                                </div>
                                <!-- section -->

                                <div class="section">
                                    <h4>Make your Ad Premium </h4>
                                    <p>More replies means more interested buyers. With lots of interested buyers, you have a better chance of selling for the price that you want. <a href="#">Learn more</a></p>
                                    <ul class="premium-options">
                                        <li class="premium">
                                            <input type="radio" name="premiumOption" value="day-one" id="day-one">
                                            <label for="day-one">Regular Ad Per Day</label>
                                            <span>$20.00</span>
                                        </li>
                                        <li class="premium">
                                            <input type="radio" name="premiumOption" value="day-two" id="day-two">
                                            <label for="day-two">Top Ad for 3 days</label>
                                            <span>$30.00</span>
                                        </li>
                                        <li class="premium">
                                            <input type="radio" name="premiumOption" value="day-three" id="day-three">
                                            <label for="day-three">Top Ad for 7 days</label>
                                            <span>$50.00</span>
                                        </li>
                                        <li class="premium">
                                            <input type="radio" name="premiumOption" value="day-four" id="day-four">
                                            <label for="day-four">Daily Bump Up for 7 days</label>
                                            <span>$100.00</span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- section -->

                                <div class="checkbox section agreement">
                                    <label for="send">
                                        <input type="checkbox" name="send" id="send"> Send me Trade Email/SMS Alerts for people looking to buy mobile handsets in www By clicking "Post", you agree to our <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a> and acknowledge that you are the rightful owner of this item and using Trade to find a genuine buyer.
                                    </label>
                                    <button type="submit" class="btn btn-primary">Post Your Ad</button>
                                </div>
                                <!-- section -->

                            </fieldset>
                        </form>
                        <!-- form -->
                    </div>

                    <!-- quick-rules -->
                    <div class="col-lg-4">
                        <div class="section quick-rules">
                            <h4>Quick rules</h4>
                            <p class="lead">Posting an ad on <a href="#">Trade.com</a> is free! However, all ads must follow our rules:</p>

                            <ul>
                                <li>Make sure you post in the correct category.</li>
                                <li>Do not post the same ad more than once or repost an ad within 48 hours.</li>
                                <li>Do not upload pictures with watermarks.</li>
                                <li>Do not post ads containing multiple items unless it's a package deal.</li>
                                <li>Do not put your email or phone numbers in the title or description.</li>
                                <li>Make sure you post in the correct category.</li>
                                <li>Do not post the same ad more than once or repost an ad within 48 hours.</li>
                                <li>Do not upload pictures with watermarks.</li>
                                <li>Do not post ads containing multiple items unless it's a package deal.</li>
                            </ul>
                        </div>
                    </div>
                    <!-- quick-rules -->
                </div>
                <!-- photos-ad -->
            </div>
        </div>
        <!-- container -->
    </section>
    <!-- main -->

    @include('layouts.footer')