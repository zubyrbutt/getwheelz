@include('layouts.nav')

<body>
    <!-- header -->

    <!-- main -->
    <section id="main" class="clearfix ad-details-page">
        <div class="container">

            <div class="breadcrumb-section">
                <!-- breadcrumb -->
                <ol class="breadcrumb">
                    <li><a href="">Review</a></li>
                    <li>cars reivew</li>
                </ol>
                <!-- breadcrumb -->
                <h2 class="title">Cars Review</h2>
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
                        <form action="{{ route('review.store') }}" method="POST" enctype="multipart/form-data">
                            <fieldset>
								@csrf
                                <div class="section postdetails">
                                    <h4>Write Review</h4>
                                    
                                    <div class="row form-group brand-name">
                                        <label class="col-sm-3 label-title">Model Year<span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <select id="year" name="year" aria-placeholder="Select model year" class="form-control">
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

                                    <div class="row form-group brand-name">
                                        <label class="col-sm-3 label-title">Make<span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <select id="make" name="make" aria-placeholder="Select make" class="form-control">
                                                <option value="Suzuki">Suzuki</option>
                                            </select>
                                        </div>
                                    </div>

                                    
                                    <div class="row form-group brand-name">
                                        <label class="col-sm-3 label-title">model<span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <select id="model" name="model" aria-placeholder="Select model" class="form-control">
                                                <option value="Aulto">Aulto</option>
                                                <option value="Cultus">Cultus</option>
                                                <option value="Every">Every</option>
                                                <option value="WagnoR">WagnoR</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group brand-name">
                                        <label class="col-sm-3 label-title">rating<span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <select id="rating" name="rating" aria-placeholder="Select rating" class="form-control">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row form-group add-title">
                                        <label class="col-sm-3 label-title">Title<span class="required">* </span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="title" class="form-control" id="text" placeholder="ex, type title of reivew car..">
                                        </div>
                                    </div>

                                    <div class="row form-group item-description">
                                        <label class="col-sm-3 label-title">Description<span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" maxlength="5000" name="description" id="textarea" placeholder="Write few lines about your products" rows="8"></textarea>
                                        </div>
                                    </div>
                                    <div class="row form-group brand-name">
                                            <label class="col-sm-3 label-title">How you know?<span class="required">*</span></label>

                                        <div class="col-sm-9">
                                            <select id="relation" name="relation" aria-placeholder="Select relation" class="form-control">
                                                <option value="I woned this car">I woned this car</option>
                                                <option value="I did not owned this car, just driven this car">I did not owned this car, just driven this car</option>
                                                <option value="Not owned & not driven">Not owned & not driven</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group add-title">
                                            <label class="col-sm-3 label-title">Image<span class="required">* </span></label>
                                            <div class="col-sm-9">
                                                <input type="file" name="image"  class="form-control">
                                            </div>
                                    </div>
                                <div class="checkbox section agreement">
                                    
                                    <button type="submit" class="btn btn-primary pull-right">Submit this Review</button>
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