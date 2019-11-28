

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