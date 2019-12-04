@extends('layouts.admin.master')
@section('contant')
<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-7">
                    <h2>Dashboard</h2>                    
                    <ul class="breadcrumb">                        
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Dashboard 1</li>
                    </ul>
                </div>            
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="card widget-stat">
                    <div class="body">
                        <div class="media">
                            <div class="media-icon bg-cyan">
                                <i class="zmdi zmdi-shopping-basket zmdi-hc-2x"></i>
                            </div>
                            <div class="media-text">
                                <span class="title">Total Sales</span>
                                <span class="value">$34000</span>
                            </div>
                        </div>
                        <p class="media-footer text-success"><i class="zmdi zmdi-trending-up"></i> 13%
                            <span>Progress</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="card widget-stat">
                    <div class="body">
                        <div class="media">
                            <div class="media-icon bg-amber">
                                <i class="zmdi zmdi-account-o zmdi-hc-2x"></i>
                            </div>
                            <div class="media-text">
                                <span class="title">Visitors </span>
                                <span class="value">2,105</span>
                            </div>
                        </div>
                        <p class="media-footer text-success"><i class="zmdi zmdi-trending-up"></i> 18%
                            <span>Progress</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="card widget-stat">
                    <div class="body">
                        <div class="media">
                            <div class="media-icon bg-blue">
                                <i class="zmdi zmdi-label zmdi-hc-2x"></i>
                            </div>
                            <div class="media-text">
                                <span class="title">Pageviews</span>
                                <span class="value">4,054</span>
                            </div>
                        </div>
                        <p class="media-footer text-danger"><i class="zmdi zmdi-trending-down"></i> 12%
                            <span>Progress</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="card widget-stat">
                    <div class="body">
                        <div class="media">
                            <div class="media-icon bg-green">
                                <i class="zmdi zmdi-money zmdi-hc-2x"></i>
                            </div>
                            <div class="media-text">
                                <span class="title">Total Revenue</span>
                                <span class="value">$63.23M</span>
                            </div>
                        </div>
                        <p class="media-footer text-success"><i class="zmdi zmdi-trending-up"></i> 21%
                            <span>Progress</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>        
                
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <div class="row clearfix">
            <div class="col-sm-12 col-md-12">
                <div class="card" >
                    <div class="header">
                        <h2>Latest orders</h2>
                        <form action="{{ route('certified.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="city" class="form-control" placeholder="City" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="car_info" class="form-control" placeholder="Car Information .." />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="registration_city" class="form-control" placeholder="Car Registration City" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" name="mileage" class="form-control" placeholder="Like, (3450000)" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="color" class="form-control" placeholder="Red, White or black" />
                                </div>
                            </div>
                            <div class="body">
                                    <div class="dz-message">
                                        <div class="drag-icon-cph"> <i class="material-icons">touch_app</i> </div>
                                        <h3>Drop image here or click to upload.</h3>
                                    <div class="fallback">
                                        <input name="image" type="file" />
                                    </div>
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="engine" class="form-control" placeholder="CNG, Petrol,.." />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="transmission" class="form-control" placeholder="Transmission,.." />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="assembly" class="form-control" placeholder="Assembly,.." />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" name="model" class="form-control" placeholder="ex, 2019,2018.." />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="description" class="form-control" placeholder="ex, description about car" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="price" class="form-control" placeholder="Rs.9900000" />
                                </div>
                            </div>
                            <button type="submit" class="btn btn-raised btn-primary waves-effect">Post</button>
                        </form>
                    </div>
                    
                    
                </div>
            </div>       
        
    </div>
</section>
@endsection