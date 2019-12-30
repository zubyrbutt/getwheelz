@include('layouts.nav')

<section id="main" class="clearfix ad-details-page">
    <div class="container">

        <div class="breadcrumb-section">
            <!-- breadcrumb -->
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="{{ route('rides.index') }}"> Rides</a></li>
            </ol>
            <!-- breadcrumb -->
            <h2 class="title">Rides</h2>
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
                <div class="col-lg-10">
                    <fieldset>
                        @csrf
                        <div class="section postdetails">
                            <h4>Your All Cool Rides </h4> @foreach ($rides as $ride)
                            <div class="">
                                
                                <div class="slider-text mb-1">
                                    <img width="40px" height="40px" style="border-radius:50%; border-color: coral;" src="" alt="">
                                    
                                    <span> Posted By: <strong>{{ ucwords($ride->user->name) }}</strong>
                                       
                                    
                                    <strong class="text-success"><p><a href="{{ route('rides.show', $ride->id) }}"> {{ Str::words($ride->title, 10, ' ....') }}</a>
                                    </strong>
                                    <small class="pull-right">{{ $ride->created_at->diffForHumans() }}</small></span>

                                </p></div>
                                <hr>
                            </div>
                            @endforeach

                        </fieldset>
                        <span class="pull-right">
                        
                            <strong> <a href="{{ URL::previous() }}">Go Back</a></strong>

                        </span>
                        {{ $rides->links() }}

                </div>

               
                            <!-- quick-rules -->
                        </div>
                        <!-- photos-ad -->
                </div>
            </div>
            <!-- container -->
</section>

@include('layouts.footer')