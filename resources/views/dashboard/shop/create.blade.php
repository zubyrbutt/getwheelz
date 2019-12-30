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