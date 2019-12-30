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
                        <h2>Post New Blog</h2>
                        <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" name="title" class="form-control" placeholder="title" />
                                </div>
                            </div>
                            
                                <div class="form-line">
                                    <input type="text" name="description" class="form-control" placeholder="ex, description about car" />
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
                            
                            <div class="form-group pull-right">

                            <button type="submit" class="btn btn-raised btn-primary waves-effect">Post</button>
                            </div>
                        </form>
                    </div>
                    
                    
                </div>
            </div>       
        
    </div>
</section>
@endsection