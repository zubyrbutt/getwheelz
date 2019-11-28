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
                                <span class="value">1,305</span>
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
            <div class="col-sm-12 col-md-8">
                <div class="card" >
                    <div class="header">
                        <h2>Add New Product</h2>
                        
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-striped table-borderless m-b-5">
                           
                            <tbody class="no-border-x">
                                <div class="body">
                                    <div class="row clearfix">
                                        <div class="col-sm-12">
                                    <form action="{{ route('shop.store') }}" method="POST" enctype="multipart/form-data" id="frmFileUpload" class="dropzone">
                                          @csrf
                                        <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="name" class="form-control" placeholder="product name .." />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" name="city" class="form-control" placeholder="city" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" name="condition" class="form-control" placeholder="Used or New?" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" name="engine" class="form-control" placeholder="petrol CNG ..." />
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                                <div class="form-line">
                                                                    <input type="text" name="model" class="form-control" placeholder="model 2019 .." />
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                    <div class="form-line">
                                                                            <input type="text" name="registration_city" class="form-control" placeholder="Registration city .." />
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="text" name="exterior_color" class="form-control" placeholder="Silver .." />
                                                                    </div>
                                                                </div>
                                                            <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="text" name="interior_color" class="form-control" placeholder="black .." />
                                                                    </div>
                                                                </div>
                                                <div class="fallback">
                                                    <input name="image" type="file" multiple />
                                                
                                            <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" name="price" class="form-control" placeholder="price"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                        <div class="form-line">
                                                                <input type="text" name="description" class="form-control" placeholder="description about product ."/>

                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-raised btn-primary waves-effect">Add Product</button>
                                                           
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>       
        
    </div>
</section>
@endsection