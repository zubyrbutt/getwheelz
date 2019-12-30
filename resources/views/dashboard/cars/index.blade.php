@extends('layouts.admin.master')
@section('contant')
<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
           
        </div>
        @include('layouts.admin.report')
     
                
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