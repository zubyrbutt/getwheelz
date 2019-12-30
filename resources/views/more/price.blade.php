@include('layouts.nav')
<section id="main" class="clearfix ad-details-page">
   <div class="container">
   <div class="main-content">
      <div class="adpost-details">
         <div class="row">
            <div class="col-lg-10">
               <form action="#">
                  <fieldset>
                     <div class="section postdetails">
                        <h4>Price Calculator ..</h4>
                        <div class="row form-group brand-name">
                                <label class="col-sm-3 label-title">Version:<span class="required">*</span></label>
                                <div class="col-sm-9">
                                   <select id="version" name="" onchange="price()" class="form-control">
                                      <option selected>Select Version </option>
                                      <option value="vx">VX</option>
                                      <option value="vxr">VXR</option>

                                   </select>
                                </div>
                             </div>
                        <div class="row form-group brand-name">
                           <label class="col-sm-3 label-title">Make-(Company):<span class="required">*</span></label>
                           <div class="col-sm-9">
                              <select id="company" name="" onchange="price()" class="form-control">
                                 <option selected>Select make </option>
                                 <option value="Suzuki">Suzuki</option>
                              </select>
                           </div>
                        </div>
                        <div class="row form-group brand-name">
                                <label class="col-sm-3 label-title">Model year<span class="required">*</span> (Year)</label>
                                <div class="col-sm-9">
                                   <select id="make" name="" onchange="price()" class="form-control">
                                      <option selected>slect model year</option>
                                      <option value="2019">2019</option>
                                      <option value="2018">2018</option>
                                      
                                   </select>
                                </div>
                             </div>
                        <div class="row form-group brand-name">
                                <label class="col-sm-3 label-title">Model:<span class="required">*</span></label>
                                <div class="col-sm-9">
                                   <select id="modle" name="" onchange="price()" class="form-control">
                                      <option selected>Select Model </option>
                                      <option value="Alto">Alto</option>
                                   </select>
                                </div>
                             </div>
                  
                        <div class="row form-group add-title">
                           <label class="col-sm-3 label-title">Mileage<span class="required">*</span></label>
                           <div class="col-sm-9">
                              <input type="number" class="form-control" id="mileage"  onchange="price()">
                           </div>
                        </div>
                        <div class="row form-group brand-name">
                                <label class="col-sm-3 label-title">Registration City:<span class="required">*</span></label>
                                <div class="col-sm-9">
                                   <select id="city" name="" onchange="price()" class="form-control">
                                      <option selected>slect city </option>
                                      <option value="Islamabad">Islamabad</option>
                                      <option value="Rawalpindi">Rawalpindi</option>

                                   </select>
                                </div>
                             </div>
                        <tr>
                           <div class="slider-text text-right">
                              <h2 id="payment">PKR.0</h2>
                              <p>it's just dummy data:</p>
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