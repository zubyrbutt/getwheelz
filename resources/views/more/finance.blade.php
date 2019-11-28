@include('layouts.nav')
<section id="main" class="clearfix ad-details-page">
   <div class="container">
   <div class="main-content">
      <div class="adpost-details">
         <div class="row">
            <div class="col-lg-8">
               <form action="#">
                  <fieldset>
                     <div class="section postdetails">
                        <h4>Interest Rates & Financing Options for <strong>New </strong>&<strong> Used Car</strone><span class="pull-right">* Mandatory Fields</span></h4>
                        <div class="row form-group brand-name">
                           <label class="col-sm-3 label-title">Tenure<span class="required">*</span> (Year)</label>
                           <div class="col-sm-9">
                              <select id="month" name="" onchange="calculate()" class="form-control">
                                 <option selected>Select Tenure</option>
                                 <option value="12">1 year</option>
                                 <option value="24">2 year</option>
                                 <option value="36">3 year</option>
                                 <option value="48">4 year</option>
                              </select>
                           </div>
                        </div>
                        <div class="row form-group brand-name">
                           <label class="col-sm-3 label-title">Annual interest (%):<span class="required">*</span></label>
                           <div class="col-sm-9">
                              <select id="interest_rate" name="" onchange="calculate()" class="form-control">
                                 <option selected>Select Annual interest </option>
                                 <option value="5">5%</option>
                                 <option value="10">10%</option>
                                 <option value="15">15%</option>
                                 <option value="20">20%</option>
                                 <option value="25">25%</option>
                                 <option value="30">30%</option>
                              </select>
                           </div>
                        </div>
                        <div class="row form-group add-title">
                           <label class="col-sm-3 label-title">Amount<span class="required">*</span></label>
                           <div class="col-sm-9">
                              <input type="text" class="form-control" id="amount"  onchange="calculate()">
                           </div>
                        </div>
                        <div class="row form-group add-title">
                           <label class="col-sm-3 label-title">Intial Deposit:<span class="required">*</span></label>
                           <div class="col-sm-9">
                              <input type="text" class="form-control" id="initial_deposit" onchange="calculate()">
                           </div>
                        </div>
                        <tr>
                           <div class="slider-text text-right">
                              <h2 id="payment">PKR.0</h2>
                              <p>Monthly payment:</p>
                           </div>
                        </tr>
                  </fieldset>
               </form>
               <!-- form -->	
               </div>
            </div>
            <!-- photos-ad -->				
         </div>
      </div>
   </div>
</section>
@include('layouts.footer')