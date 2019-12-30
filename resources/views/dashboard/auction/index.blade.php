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
                        <form action="{{ route('auction.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="chassis_no" class="form-control" placeholder="eg: ZZT240-123456." />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="grade" class="form-control" placeholder="Grade." />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="transmission" class="form-control" placeholder="Transmission .." />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="auction" class="form-control" placeholder="Auction ex, CAA Chubu .." />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" name="mileage" class="form-control" placeholder="ex, 3450" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="color" class="form-control" placeholder="Red, White or black" />
                                </div>
                            </div>
                            <div class="body">
                                    <div class="dz-message">
                                    <div class="fallback">
                                        <input name="image" type="file" />
                                    </div>
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