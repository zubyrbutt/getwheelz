@extends('layouts.admin.master')
@section('contant')
<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            
        </div>
        @include('layouts.admin.report')
        
        <div class="row clearfix">
            <div class="col-sm-12 col-md-8">
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
                    </div>
                    
                </div>
            </div>       
        
    </div>
</section>
@endsection