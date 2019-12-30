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
                        <h2>Car rent</h2>
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
                                    <th style="width:20%;">Name</th>
                                    <th style="width:10%;">Phone No</th>
                                    <th style="width:10%;">Driver</th>
                                    <th style="width:10%;">City</th>
                                    <th style="width:10%;">Picup Time</th>
                                    <th style="width:10%;">Drop Time</th>
                                   
                                    <th style="width:10%;" class="actions"></th>
                                </tr>
                            </thead>
                            <tbody class="no-border-x">
                                <tr>
                                    
                                    @foreach($rentals as $rental)
                                <td>{{ $rental->user->name }}</td>
                                <td>{{ $rental->user->phone }}</td>
                                <td>{{ $rental->driver }}</td>
                                <td>{{ $rental->city }}</td>
                                <td>{{ $rental->starting_date }}</td>
                                <td>{{ $rental->ending_date }}</td>
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