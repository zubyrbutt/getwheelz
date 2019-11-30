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
<<<<<<< HEAD
                                <span class="value">$34000</span>
=======
                                <span class="value">1,305</span>
>>>>>>> 9e9fa048b7a198e1c7340746bbe023771a299fc6
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
                
             
        <div class="row clearfix">
<<<<<<< HEAD
            <div class="col-sm-12 col-md-12">
=======
            <div class="col-sm-12 col-md-8">
>>>>>>> 9e9fa048b7a198e1c7340746bbe023771a299fc6
                <div class="card" >
                    <div class="header">
                        <h2>Latest orders</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body table-responsive">
<<<<<<< HEAD
                            @foreach ($orders as $order)

                        <table class="table table-striped table-borderless m-b-5">
                           
                              <tr>
                                   

                              </tr>

                            <tbody class="no-border-x">
                               
                                <tr>
                                <th style="width:20%;">Order By</th>
                                <th style="width:20%;">Product</th>
                                <th class="number">Total Quantity</th>
                                <th class="number">Total Price</th>
                                <th style="width:5%;" class="actions"></th>
                            </tr>
                           
                                @foreach ($order->shops as $item)
                                
                                <tr>
                                    <td>{{ $order->user->name }}</td> 
                            
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->pivot->qty }}</td>

                                    <td>{{ $item->pivot->total }}</td>
                                    <td>
                                        <form action="{{ route('toggle.deliver', $order->id) }}" method="post">
                                        @csrf
                                        <input type="checkbox" value="1" name="delivered" {{ $order->delivered==1?"checked":"" }} id="md_checkbox_30" class="filled-in chk-col-green" />
                                        <label for="md_checkbox_30">Delivered</label>
                                        <button type="submit">Delivere</button>
                                    </form>
                                    </td>
                                </tr>
                                @endforeach
                                
                                
                                
                            </tbody>
                        </table>
                        @endforeach
=======
                        <table class="table table-striped table-borderless m-b-5">
                            <thead>
                                <tr>
                                    <th style="width:40%;">Images</th>
                                    <th style="width:40%;">Product</th>
                                    <th class="number">Price</th>
                                    <th style="width:20%;">Date</th>
                                    <th style="width:20%;">State</th>
                                    <th style="width:5%;" class="actions"></th>
                                </tr>
                            </thead>
                            <tbody class="no-border-x">
                                @foreach ($products as $product)
                                <tr>
                                        <td><img width="40px" height="40px" src="{{ asset('storage/'.$product->image) }}" alt="" srcset=""></td>

                                        <td>{{ $product->name }}</td>
                                        <td class="number">Rs.{{ $product->price }}</td>
                                        <td>{{ $product->created_at->diffForHumans() }}</td>
                                        <td class="text-success">Completed</td>
                                        <td class="actions"><a href="#" class="icon"><i class="zmdi zmdi-plus-circle-o"></i></a></td>
                                    </tr>
                                @endforeach
                                
                                
                            </tbody>
                        </table>
>>>>>>> 9e9fa048b7a198e1c7340746bbe023771a299fc6
                    </div>
                    
                </div>
            </div>       
        
    </div>
</section>
@endsection