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
                <h2 class="title">Accessories</h2>
            </div>
            <!-- banner -->

            <div class="adpost-details">
                <div class="row">
                    <div class="col-lg-8">
                        <form action="{{ route('accessories.store') }}" method="POST" enctype="multipart/form-data">
                            <fieldset>
								@csrf
                                <div class="section postdetails">
                                    <h4>Sell an item or service </h4>
                    

                                    <div class="row form-group add-title">
                                        <label class="col-sm-3 label-title">Title<span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="title" class="form-control" id="text" placeholder="">
                                        </div>
                                    </div>

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

                                    

                                    <div class="row form-group brand-name">
                                        <label class="col-sm-3 label-title">Category<span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <select id="category" name="category" class="form-control">
                                                <option selected>Select your accessories category</option>
                                                <option value="Car Door">Car Door</option>
                                                <option value="Bumpers & Components">Bumpers & Components</option>
                                                <option value="Chrome Accessories">Chrome Accessories</option>
                                                <option value="Grills">Grills</option> 
                                                <option value="Brake Parts">Brake Parts</option>                                              
                                                <option value="Complete Engines">Complete Engines</option>                                              

                                            </select>
                                        </div>
                                    </div>


                                    <div class="row form-group select-condition">
                                        <label class="col-sm-3">Condition<span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="radio" name="condition" value="new" id="new">
                                            <label for="new">New</label>
                                            <input type="radio" name="condition" value="used" id="used">
                                            <label for="used">Used</label>
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
                                    
                                  
                                    <div class="row form-group add-title">
                                            <label class="col-sm-3 label-title">Image<span class="required">* </span></label>
                                            <div class="col-sm-9">
                                                <input type="file" name="image"  class="form-control">
                                            </div>
                                    </div>
                                   
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
                                

                               

                                <div class="checkbox section agreement">
                                    <label for="send">
                                        <input type="checkbox" name="send" id="send"> Send me GetWheelz Email/SMS Alerts for people looking to buy mobile handsets in www By clicking "Post", you agree to our <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a> and acknowledge that you are the rightful owner of this item and using GetWheelz to find a genuine buyer.
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
                            <p class="lead">Posting an ad on <a href="{{ url('/') }}">GetWheelz.com</a> is free! However, all ads must follow our rules:</p>

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