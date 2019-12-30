@extends('layouts.admin.master')
@section('contant')
<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            
        </div>
        @include('layouts.admin.report')
        
             
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="card" >
                    <div class="header">
                        <h2>Latest Cars Posts</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-striped table-borderless m-b-5">
                            <thead>
                                <tr>
                                    <th style="width:20%;">Cars</th>
                                    <th style="width:10%;">Seller</th>

                                    <th style="width:10%;">Price(Rs)</th>
                                    <th style="width:10%;">City</th>
                                    <th style="width:10%;">Engine</th>
                                    <th style="width:10%;">Color</th>
                                    <th style="width:10%;">Model</th>

                                    <th style="width:10%;">New/Used</th>
                                    <th style="width:10%;">Mileage</th>
                                    <th style="width:10%;" class="actions"></th>
                                </tr>
                            </thead>
                            <tbody class="no-border-x">
                                <tr>
                                    @foreach($cars as $car)
                            <td><a href="{{ route('admin.cars',$car->id) }}">{{ ucwords($car->car_info) }}</a> </td>
                                <td>{{ $car->user->name }}</td>

                                    <td class="number"><strong>Rs.</strong>{{ $car->price }}</td>
                                    <td>{{ $car->city }}</td>
                                    
                                    <td class="text-success">{{ $car->engine }}</td>
                                    <td class="text-success">{{ $car->color }}</td>
                                    <td class="text-success">{{ $car->model }}</td>
                                    <td class="text-success">New/Used</td>
                                    
                                    <td >{{ $car->mileage }}</td>
                                    <td>
                                        @if($car->certifieded)
                                        <a href="admin/cars/{{ $car->id }}/certified">Certified</a>
                                        @endif
                                    </td>
                                    
                                </tr>
           
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card" >
                    <div class="header">
                        <h2>Latest Bikes Posts</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body table-responsive">
                        <table class="table table-striped table-borderless m-b-5">
                            <thead>
                                <tr>
                                    <th style="width:10%;">Bikes</th>
                                    <th style="width:10%;">Seller</th>
                                    <th style="width:10%;">Price(Rs)</th>
                                    <th style="width:10%;">City</th>
                                    <th style="width:10%;">Model</th>
                                    <th style="width:10%;">State</th>
                                    <th style="width:10%;" class="actions"></th>
                                </tr>
                            </thead>
                            <tbody class="no-border-x">
                                <tr>
                                    @foreach($bikes as $bike)
                                <td><a href="{{ route('admin.bike',$bike->id) }}">{{  $bike->bike_info }}</a></td>
                                <td>Rs.{{ $bike->user->name }}</td>
                                <td class="number">Rs.{{ $bike->price }}</td>
                                    <td>{{ ucwords($bike->city) }}</td>
                                    <td>{{ $bike->created_at->diffForHumans() }}</td>
                                    <td class="text-success">Completed</td>
                                    <td class="actions"><a href="#" class="icon"><i class="zmdi zmdi-plus-circle-o"></i></a></td>
                                </tr>
           
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            {{-- <div class="col-sm-12 col-md-6">
                <div class="card" data-aos-duration="400" data-aos-delay="200" data-aos="fade-up">
                    <div class="header">
                        <h2>INBOX</h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                    <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <ul class="inbox-widget list-unstyled clearfix">
                            <li class="inbox-inner" data-aos-duration="400" data-aos-delay="100" data-aos="fade-down"> <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-img"> <img src="assets/images/random-avatar3.jpg" alt=""> </div>
                                    <div class="inbox-item-info">
                                        <p class="author">John Doe</p>
                                        <p class="inbox-message">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                        <p class="inbox-date">13:34 PM</p>
                                    </div>
                                </div>
                                </a> </li>
                            <li class="inbox-inner" data-aos-duration="400" data-aos-delay="200" data-aos="fade-down"> <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-img"> <img src="assets/images/random-avatar2.jpg" alt=""> </div>
                                    <div class="inbox-item-info">
                                        <p class="author">John Doe</p>
                                        <p class="inbox-message">Lorem Ipsum is simply dummy text oftting industry. Lorem Ipsum has been the industry's</p>
                                        <p class="inbox-date">13:34 PM</p>
                                    </div>
                                </div>
                                </a> </li>
                            <li class="inbox-inner" data-aos-duration="400" data-aos-delay="300" data-aos="fade-down"> <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-img"> <img src="assets/images/random-avatar4.jpg" alt=""> </div>
                                    <div class="inbox-item-info">
                                        <p class="author">John Doe</p>
                                        <p class="inbox-message">text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                        <p class="inbox-date">13:34 PM</p>
                                    </div>
                                </div>
                                </a> </li>
                            <li class="inbox-inner" data-aos-duration="400" data-aos-delay="400" data-aos="fade-down"> <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-img"> <img src="assets/images/random-avatar3.jpg" alt=""> </div>
                                    <div class="inbox-item-info">
                                        <p class="author">John Doe</p>
                                        <p class="inbox-message">simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                        <p class="inbox-date">13:34 PM</p>
                                    </div>
                                </div>
                                </a> </li>
                             <li class="inbox-inner" data-aos-duration="400" data-aos-delay="500" data-aos="fade-down"> <a href="#">
                                <div class="inbox-item">
                                    <div class="inbox-img"> <img src="assets/images/random-avatar4.jpg" alt=""> </div>
                                    <div class="inbox-item-info">
                                        <p class="author">John Doe</p>
                                        <p class="inbox-message">text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                        <p class="inbox-date">13:34 PM</p>
                                    </div>
                                </div>
                                </a> </li>
                        </ul>
                    </div>
                </div>
            </div> --}}
        </div>        
        
    </div>
</section>
@endsection