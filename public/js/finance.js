

function calculate(){


  var amount = document.getElementById('amount').value;
  var interest_rate = document.getElementById('interest_rate').value;
  var month = document.getElementById('month').value;
  var initial_deposit = document.getElementById('initial_deposit').value;

  var totalAmount = amount - initial_deposit;

  var interest = (totalAmount * (interest_rate * .01)) / month;
  var payment =  ((totalAmount / month) + interest).toFixed(2);
  payment = payment.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");

	document.getElementById('payment').innerHTML = "PKR."+payment;





}
function price(){


  var make = document.getElementById('make').value;
  var version = document.getElementById('version').value;
  var mileage = document.getElementById('mileage').value;
  var city = document.getElementById('city').value;

  
 
  if(city == "Islamabad"){
    var city = 50000;
  }else{
    var city = 5000;

  }
  if(version == "vx"){
    var version = 100000;
  }else{
    var version = 80000;

  }
  if(mileage > 1000000)
  {
    mileage = 12000;
  }
  else{
    mileage = 1000;
  }
  if(make == "2019"){
    var make = 1300000;

  }else{
    var make = 1100000;

  }
  var totalAmount =  make+mileage+version+city;

  payment = totalAmount;

	document.getElementById('payment').innerHTML = "PKR."+totalAmount;





}
  function populate(s1,s2){
    var s1 = document.getElementById(s1);
    var s2 = document.getElementById(s2);
    s2.innerHTML = "";
    if(s1.value == "Toyota"){
      var optionArray = ["|","Corolla XLi VVTi|Corolla XLi VVTi","Corolla GLi 1.3 VVTi|Corolla GLi 1.3 VVTi","Corolla Altis Grande CVT-i 1.8|Corolla Altis Grande CVT-i 1.8"];
    } else if(s1.value == "Honda"){
      var optionArray = ["|","Civic Oriel 1.8 i-VTEC CVT|Civic Oriel 1.8 i-VTEC CVT","Civic 1.8 i-VTEC CVT|Civic 1.8 i-VTEC CVT","Civic 1.5 RS Turbo|Civic 1.5 RS Turbo"];
    } else if(s1.value == "Suzuki"){
      var optionArray = ["|","Alto VX|Alto VX","Cultus VXR|Cultus VXR", "Wagon-R VXR|Wagon-R VXR"];
    }
    for(var option in optionArray){
      var pair = optionArray[option].split("|");
      var newOption = document.createElement("option");
      newOption.value = pair[0];
      newOption.innerHTML = pair[1];
      s2.options.add(newOption);
    }
  
}