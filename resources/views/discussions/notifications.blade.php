@include('layouts.nav')

<section id="main" class="clearfix ad-details-page">
    <div class="container">

        <div class="breadcrumb-section">
            <!-- breadcrumb -->
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li>Discussion</li>
            </ol>
            <!-- breadcrumb -->
            <h2 class="title">Discussion</h2>
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
                            <img width="40px" height="40px" style="border-radius:50%; border-color: coral;" src="{{ Gravatar::src($discussion->user->email ) }}" alt=""> <span> User Name: <strong>{{ ucwords($discussion->user->name) }}</strong></span>
                            <span class="pull-right"> {{ $discussion->created_at->diffForHumans() }}</span>
                        </div>

                        <div class="section postdetails">

                            <div class="slider-text mb-1">
                                   
                                <h4 class="text-success"> {{ $discussion->title }} </h4>

                            </div>
                           
                            <div class="card text-accent-1"></div>
                            <div class="card-body">
                                {{ $discussion->content }}
                            </div>
                            
                        
                                @if ($discussion->bestReply)
                                <div class="card text-white bg-success " style="">
                                        <div class="card-header mb-2 p-2" style="background-color: #28A745">
                                           
                                            <span> <img width="40px" height="40px" style="border-radius: 50%;"  src="{{ Gravatar::src($discussion->bestReply->owner->email)  }}" alt=""> </span>
                                           <span> {{ ucwords($discussion->bestReply->owner->name) }} </span>
                                            <span class="pull-right"><strong>Best Reply</strong></span>
                                        </div>
                                        <div class="card-body" style="background-color:#28A745">
                                          
                                          <p class="card-text">{{ $discussion->bestReply->content }}</p>
                                        </div>
                                      </div>
                                @endif
                                   
                        
                        </div>
                        @foreach ($discussion->replies()->paginate(4) as $reply)
                            
                        
                        <div class="section postdetails"  style="background-color: #E9F0ED; color:#222222;">
                                <div class="slider-text mb-1">

                                    @if (auth()->user()->id == $discussion->user_id)
                                    
                                    <form action="{{ route('discussions.best-reply', ['discussion' => $discussion->slug, 'reply' => $reply->id]) }}" method="post">
                                        @csrf
                                        <span class="pull-right" > <button type="submit" class="btn btn-info">Mark as Best Reply</button></span>

                                    </form>                                        
                                    @endif
                                    

                                    <p>Reply by</p>
                                      <img width="40px" height="40px" style="border-radius:50%;"  src="{{ Gravatar::src($reply->owner->email) }}" alt="">
                                <span><strong>{{ ucwords($reply->owner->name) }}</strong></span>
                                
                                </span>
                                <p class="mt-2" style="color:#222222;  font-weight: 600;">{{ $reply->content }}</p>
                                <span class="pull-right"> <p style="color:#222222;">{{ $reply->owner->created_at->diffForHumans() }}</p>
                                    
                            </div>
                        </div>
                        @endforeach

                        {{  $discussion->replies()->paginate(4)->links() }}

                        <div class="section postdetails">
                                
                            @auth
                            <form action="{{ route('replies.store', $discussion->slug) }}" method="POST">
                                @csrf
                            <div class="slider-text mb-1">
                                <div class="text text-success">
                                    <h3><strong>Post Reply</strong></h3></div>

                            </div>
                            <div class="row form-group item-description">
                                <div class="col-sm-9">
                                    <label name="content" for="content" id="content" ></label>
                                    <textarea name="content" class="form-control" maxlength="5000" id="textarea" placeholder="write reply here .." rows="5"></textarea>
                                </div>
                            </div>
                            <div class="section postdetails">
                                <span class="pull-right"><button type="submit" class="btn btn-success" >Post Reply</button></span>
                            </div>
                        </form>
                        @else
                        <div class="section postdetails">
                            <span class="pull-center"><a href="{{ route('login') }}" class="btn btn-success" >Login to Post Reply</a></span>
                        </div>
                        
                        </div>
                        @endauth
                        

                    </fieldset>

                </div>

                <!-- quick-rules -->
                <div class="col-lg-4">
                    <div class="section quick-rules">
                        <h4>Quick rules <span class="pull-right"><a href="{{ route('discussions.create') }}" class="btn btn-success" >Add Discussion</a></span></h4>
                        <p class="lead">Posting an ad on <a href="#">Trade.com</a> is free! However, all ads must follow our rules:</p>

                        <ul>
                            @foreach ($channels as $channel)
                            <li> <a href="#">{{ $channel->name }}</a> </li>

                            @endforeach
                        </ul>
                    </div>
                    <strong><span class="pull-right my-1"><a href="{{ URL::previous() }}">Go Back</a></span></strong>

                </div>

                <!-- quick-rules -->
            </div>

            <!-- photos-ad -->
        </div>
    </div>
    <!-- container -->
</section>

@include('layouts.footer')