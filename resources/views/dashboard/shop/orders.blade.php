@extends('layouts.admin.master')
@section('contant')
<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
          
        </div>
        @include('layouts.admin.report')

        <div class="row clearfix">
            <div class="col-sm-12 col-md-12">
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
                    </div>
                    
                </div>
            </div>       
        
    </div>
</section>
@endsection