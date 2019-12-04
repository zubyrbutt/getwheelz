@include('layouts.nav')

<section id="main" class="clearfix about-us page">
    <div class="container">

<h1 class="mt-3" style="color:white;"><b>Fill this form for your favourite CAr</b></h1>
<div class="section about">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="about-info">
        <div class="row">
    
            <div class="col-lg-12">
                    <form action="{{ route('import.store') }}" method="POST">
                        <fieldset>
                            @csrf
                            <div class="section postdetails">
                               
                                <div class="row form-group brand-name">
                                        <label class="col-sm-3 label-title">Make<span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <select id="make" name="make" class="form-control">
                                                <option selected>Make</option>
                                                <option value="suzuki">Suzuki</option>
                                                                                              
                                            </select>
                                        </div>
                                    </div>
                            
                                <div class="row form-group brand-name">
                                    <label class="col-sm-3 label-title">Model<span class="required">*</span></label>
                                    <div class="col-sm-9">
                                        <select id="model" name="model" class="form-control">
                                            <option selected>Select model</option>
                                            <option value="alto">Alto</option>
                                            <option value="wagonr">Wagon R</option>
                                            <option value="every">Every</option>
                                            <option value="FX">FX</option>                                              
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="row form-group brand-name">
                                    <label class="col-sm-3 label-title">City<span class="required">*</span></label>
                                    <div class="col-sm-9">
                                        <select id="city" name="city" class="form-control">
                                            <option selected>Select your city</option>
                                            <option value="Islamabad">Islamabad</option>
                                            <option value="Rawalpindi">Rawalpindi</option>
                                            <option value="Lahore">Lahore</option>
                                            <option value="Karachi">Karachi</option>                                              
                                        </select>
                                    </div>
                                </div>
                    

                                <div class="row form-group brand-name">
                                    <label class="col-sm-3 label-title">year<span class="required">*</span></label>
                                    <div class="col-sm-9">
                                        <select id="year" name="year" class="form-control">
                                            <option selected>Select car model</option>
                                            <option value="2019">2019</option>
                                            <option value="2018">2018</option>
                                            <option value="2017">2017</option>
                                            <option value="2016">2016</option>
                                            <option value="2015">2015</option>
                                            <option value="2014">2014</option>                                              
                                        </select>
                                    </div>
                                </div>
                               
                                   
                                <button type="submit" class="btn btn-primary pull-right">Submit</button>

                            </div>
                        

                        </fieldset>
                    </form>
            </div>
    </div><!-- about-info -->

</div>

    </div>

</section>


@include('layouts.footer')