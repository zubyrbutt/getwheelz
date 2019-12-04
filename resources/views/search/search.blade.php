@include('layouts.nav')

<section id="main" class="clearfix category-page main-categories">
    <div class="container">
        <div class="breadcrumb-section">
            <!-- breadcrumb -->
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li>Serach</li>
            </ol><!-- breadcrumb -->						
            <h2 class="title">Search Result</h2>
        </div>
        <div class="banner">
        
            <!-- banner-form -->
            <div class="banner-form banner-form-full">
                <form action="{{ route('search') }}">
                   
                    <input type="text" name="query" class="form-control" placeholder="Type Your key word">
                    <button type="submit" class="form-control" value="Search">Search</button>
                </form>
            </div><!-- banner-form -->
        </div>

        <div class="category-info">	
            <div class="row">
                <!-- accordion-->
                

                <!-- recommended-ads -->
                <div class="col-md-8 col-lg-12">				
                    <div class="section recommended-ads">
                        <!-- featured-top -->
                        <div class="featured-top">
                            <h4>{{ $searchResults->count() }} results found for "{{ request('query') }}"</h4>
                            							
                        </div><!-- featured-top -->	

                        <!-- ad-item -->
                        @foreach($searchResults->groupByType() as $type => $modelSearchResults)
                        @foreach($modelSearchResults as $searchResult)
                        
                        <div class="ad-item row">
                            <!-- item-image -->
                            <div class="item-image-box col-lg-4">
                                <div class="item-image">
                                    <a href="{{ $searchResult->url }}"><img src="{{ asset('storage/'.$searchResult->image) }}" alt="Image" class="img-fluid"></a>
                                </div><!-- item-image -->
                            </div>
                            
                            <!-- rending-text -->
                            <div class="item-info col-lg-8">
                                <!-- ad-info -->
                                <div class="ad-info">
                                    <h3 class="item-price">$ {{ $searchResult->price }}</h3>
                                    <h4 class="item-title"><a href="{{ $searchResult->url }}">{{ $searchResult->title }}</a></h4>
                                    <div class="item-cat">
                                        <span><a href="#">Category: </a></span> 
                                        <span><a href="{{ $searchResult->type }}">{{ $searchResult->type }}</a></span>
                                    </div>										
                                </div><!-- ad-info -->
                                
                                <!-- ad-meta -->
                                <div class="ad-meta">
                                    <div class="meta-content">
                                        <span class="dated"><a href="#">{{ $searchResult->created_at }} </a></span>
                                        <a href="#" class="tag"><i class="fa fa-tags"></i> {{ $searchResult->engine }}</a>
                                    </div>										
                                    <!-- item-info-right -->
                                    <div class="user-option pull-right">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="{{ $searchResult->city }}, Pakistan"><i class="fa fa-map-marker"></i> </a>
                                        <a class="online" href="#" data-toggle="tooltip" data-placement="top" title="Individual"><i class="fa fa-user"></i> </a>											
                                    </div><!-- item-info-right -->
                                </div><!-- ad-meta -->
                            </div><!-- item-info -->
                        </div><!-- ad-item -->
                        @endforeach
                        @endforeach
                       				
                    </div>
                </div><!-- recommended-ads -->

                <div class="col-md-2 d-none d-lg-block">
                    <div class="advertisement text-center">
                        <a href="#"><img src="images/ads/2.jpg" alt="" class="img-fluid"></a>
                    </div>
                </div>
            </div>	
        </div>
    </div><!-- container -->
</section><!-- main -->


<section id="something-sell" class="clearfix parallax-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="title">Do you have something-sell?</h2>
                <h4>Post your ad for free on Trade.com</h4>
                <a href="ad-post.html" class="btn btn-primary">Post Your Ad</a>
            </div>
        </div><!-- row -->
    </div><!-- contaioner -->
</section><!-- something-sell -->


@include('layouts.footer')
    @include('sweetalert::alert')
 