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
                           <label class="col-sm-3 label-title">Make<span class="required">*</span></label>
                           <div class="col-sm-9">
                              <select id="slect1" name="" onchange="populate(this.id, 'slect2')" class="form-control">
                                 <option selected>Make Model</option>
                                 <option value="Toyota">Toyota</option>
                                 <option value="Honda">Honda</option>
                                 <option value="Suzuki">Suzuki</option>
                                
                              </select>
                           </div>
                        </div>
                        <div class="row form-group brand-name">
                           <label class="col-sm-3 label-title">Model and Version:<span class="required">*</span></label>
                           <div class="col-sm-9">
                              <select id="slect2" class="form-control">
                                 
                                 
                              </select>
                           </div>
						</div>
						
						<div class="row form-group brand-name">
							<label class="col-sm-3 label-title">City<span class="required">*</span></label>
							<div class="col-sm-9">
							   <select id="slect2" class="form-control">
								  
								  <option value="Islamabad">Islamabad</option>
							   </select>
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