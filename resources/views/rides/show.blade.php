@include('layouts.nav')

<section id="main" class="clearfix ad-details-page">
    <div class="container">

        <div class="breadcrumb-section">
            <!-- breadcrumb -->
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li>Rides</li>
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
                <div class="col-lg-12">
                    <fieldset>
                        @csrf
                        <div class="section postdetails">
                            <img width="40px" height="40px" style="border-radius:50%; border-color: coral;" src="" alt=""> <span> Posted By: <strong>{{ ucwords($ride->user->name) }}</strong></span>
                            <span class="pull-right"> {{ $ride->created_at->diffForHumans() }}</span>
                        </div>

                        <div class="section postdetails">

                            <div class="slider-text mb-1">
                                   
                                <h4 class="text-success"><b> {{ $ride->title }}</b> </h4>

                            </div>
                           
                            <div class="card text-accent-1"></div>
                            <div class="card-body">
                                <img  src="{{ asset('storage/'.$ride->image) }}" />
                                {{ $ride->description }}
                            </div>
                        {{ $ride->like() }}
                        </div>
                        @comments(['model' => $ride])
                        



                    </fieldset>

                </div>

               
                <!-- quick-rules -->
            </div>

            <!-- photos-ad -->
        </div>
    </div>
    <!-- container -->
</section>

@include('layouts.footer')