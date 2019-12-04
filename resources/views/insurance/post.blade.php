@include('layouts.nav')

<section id="main" class="clearfix about-us page">
    <div class="container">

<h1 class="mt-3" style="color:white;"><b>Car Insurance in Pakistan</b></h1>
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
                    <form action="{{ route('insurance.store') }}" method="POST">
                        <fieldset>
                            @csrf
                            <div class="section postdetails">
                                
                                <span style="color:teal; font-weight:100px;">Welcome! 
                                <strong>{{ Auth::user()->name }}</b></strong></span>
                                <p>Fill this form for Insurance</p>
                            
                                <div class="row form-group brand-name">
                                        <label class="col-sm-3 label-title">Slect insurance Company<span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <select id="city" name="company" class="form-control">
                                                <option selected>Companies</option>
                                                <option value="adamjee">AdamJee</option>
                                                <option value="Jubliee">Jubilee</option>
                                                <option value="askari">Askari</option>
                                                <option value="Efu">EFU</option>                                              
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

                                <div class="row form-group add-title">
                                    <label class="col-sm-3 label-title">Car Value<span class="required">*</span></label>
                                    <div class="col-sm-9">
                                        <input type="text" name="value" class="form-control" id="text" placeholder="Car Value ..">
                                    </div>
                                </div>

                                <div class="row form-group brand-name">
                                    <label class="col-sm-3 label-title">Manufactured year<span class="required">*</span></label>
                                    <div class="col-sm-9">
                                        <select id="year" name="year" class="form-control">
                                            <option selected>Select year</option>
                                            <option value="2019">2019</option>
                                            <option value="2018">2018</option>
                                            <option value="2017">2017</option>
                                            <option value="2016">2016</option>
                                            <option value="2015">2015</option>
                                            <option value="2014">2014</option>                                              
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group brand-name">
                                        <label class="col-sm-3 label-title">Tracker<span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <select id="year" name="tracker" class="form-control">
                                                <option selected>Tracker</option>
                                                <option value="yes">Yes</option>
                                                <option value="No">No</option>
                                                                                            
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group brand-name">
                                            <label class="col-sm-3 label-title">Condition<span class="required">*</span></label>
                                            <div class="col-sm-9">
                                                <select id="year" name="condition" class="form-control">
                                                    <option selected>Condition</option>
                                                    <option value="New">New</option>
                                                    <option value="Used">Used</option>
                                                                                                
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