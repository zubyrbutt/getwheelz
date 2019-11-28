@include('layouts.nav')

<section id="main" class="clearfix ad-details-page">
    <div class="container">

        <div class="breadcrumb-section">
            <!-- breadcrumb -->
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li>Ad Post</li>
            </ol>
            <!-- breadcrumb -->
            <h2 class="title">Cars</h2>
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
                    <form action="{{ route('discussions.store') }}" method="POST">
                        <fieldset>
                            @csrf
                            <div class="section postdetails">
                                <h4>Sell an item or service </h4>

                                <div class="row form-group add-title">
                                    <label class="col-sm-3 label-title">Title<span class="required">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="text" name="title" class="form-control" id="text">
                                    </div>
                                </div>

                                <div class="row form-group item-description">
                                    <label class="col-sm-3 label-title">Description<span class="required">*</span></label>
                                    <div class="col-sm-9">
                                        <textarea name="content" class="form-control" maxlength="5000"  id="textarea" placeholder="Write few lines about your products" rows="8"></textarea>
                                    </div>
                                </div>

                                <div class="row form-group brand-name">
                                    <label class="col-sm-3 label-title">Select Topic<span class="required">*</span></label>
                                    <div class="col-sm-9">
                                        <select id="channel" name="channel" aria-placeholder="Select engine tpye" class="form-control">
                                            @foreach ($channels as $channel)
                                            <option value="{{ $channel->id }}">{{ $channel->name }}</option>

                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                                <div class="section postdetails">
                                    <span class="pull-right"><button type="submit" class="btn btn-success" >Post Discussion</button></span>
                                </div>

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
                                @foreach ($channels as $channel)
                                <li> <a href="#">{{ $channel->name }}</a> </li>

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