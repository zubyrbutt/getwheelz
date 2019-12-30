<div class="row clearfix">
    <div class="col-lg-3 col-md-3 col-sm-6">
        <div class="card widget-stat">
            <div class="body">
                <div class="media">
                    <div class="media-icon bg-cyan">
                    </div>
                    <div class="media-text">
                        <span class="title">Total Cars Post</span>
                        <span class="value">
                            @if($cars->count()>0)
                            {{ $cars->count() }}
                            @else
                            0 post yet
                            @endif
                        </span>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6">
        <div class="card widget-stat">
            <div class="body">
                <div class="media">
                    <div class="media-icon bg-amber">
                    </div>
                    <div class="media-text">
                        <span class="title">Total Bikes Post</span>
                        <span class="value">
                            @if($bikes->count()>0)

                            {{ $bikes->count() }}
                            @else
                            0 post yet
                            @endif
                        </span>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6">
        <div class="card widget-stat">
            <div class="body">
                <div class="media">
                    <div class="media-icon bg-blue">
                    </div>
                    <div class="media-text">
                        <span class="title">Total Subscribers</span>
                        <span class="value">
                            @if($Users->count()>0)
                            {{ $Users->count() }}
                            @else
                                0 users yet
                            @endif
                        </span>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6">
        <div class="card widget-stat">
            <div class="body">
                <div class="media">
                    <div class="media-icon bg-green">
                    </div>
                    <div class="media-text">
                        <span class="title">Total Rental Order</span>
                        <span class="value">
                            @if ($rentals->count()>0)
                                {{ $rentals->count() }}
                            @else
                                Not yet
                            @endif
                        </span>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>