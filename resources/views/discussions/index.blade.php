@include('layouts.nav')

<section id="main" class="clearfix ad-details-page">
    <div class="container">

        <div class="breadcrumb-section">
            <!-- breadcrumb -->
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="{{ route('discussions.index') }}"> Discussion</a></li>
            </ol>
            <!-- breadcrumb -->
            <h2 class="title">Discussions Forum</h2>
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
                    <fieldset>
                        @csrf
                        <div class="section postdetails">
                            <h4>Sell an item or service </h4> @foreach ($discussions as $discussion)
                            <div class="">
                                
                                <div class="slider-text mb-1">
                                    <img width="40px" height="40px" style="border-radius:50%; border-color: coral;" src="{{ Gravatar::src($discussion->user->email ) }}" alt="">
                                    
                                    <span> User Name: <strong>{{ ucwords($discussion->user->name) }}</strong>
                                        @if ($discussion->bestReply)
                                    <span class="pull-right badge badge-primary" style="color:white"> <strong>Best Answer Available</strong></span>
                                        
                                    @endif
                                    
                                    <strong class="text-success"><p><a href="{{ route('discussions.show', $discussion->slug) }}"> {{ Str::words($discussion->title, 10, ' ....') }}</a>
                                    </strong>
                                    <small class="pull-right">{{ $discussion->created_at->diffForHumans() }}</small></span>

                                </p></div>
                                <hr>
                            </div>
                            @endforeach

                        </fieldset>
                        <span class="pull-right">
                        
                            <strong> <a href="{{ URL::previous() }}">Go Back</a></strong>

                        </span>
                        {{ $discussions->links() }}

                </div>

                <!-- quick-rules -->
                <div class="col-lg-4">
                    <div class="section quick-rules">
                            
                        <h4>Quick rules <span class="pull-right">
                                @auth
                            <a href="{{ route('discussions.create') }}" class="btn btn-success" >Add Discussion</a></span></h4>

                            @else
                            <a href="{{ route('login') }}" class="btn btn-success" >Sign in for discussions</a></span></h4>

                            @endauth
                                    <p class="lead">Posting an ad on <a href="#">Trade.com</a> is free! However, all ads must follow our rules:</p>

                                    <ul>
                                        @foreach ($channels as $channel)
                                        <li> <a href="{{ route('discussions.index') }}?channel={{ $channel->slug }}">{{ $channel->name }}</a> </li>

                                        @endforeach
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

@include('layouts.footer')