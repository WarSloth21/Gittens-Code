var nID = document.getElementById('nID').value;
var fname = document.getElementById('fName').value;
var lname = document.getElementById('lName').value;
var add1 = document.getElementById('add1').value;
var add2 = document.getElementById('add2').value;

function isIdValid(id) {
    var num = /[0-9]/g;

    var IDErr = document.getElementById("nIDErr");
    var nID = document.getElementById('nID').value;
     hyp = nID.charAt(6);

    if (nID == ""){
        IDErr.innerHTML = "Error: Information Missing";
        document.getElementById('nID').style.borderColor = "red";
        return false;
    }

    if (!nID.match(num)){
        IDErr.innerHTML = "Error: Invalid National ID Format";
        return false;
    }

    if ((nID.length <11) || (nID.length >11)){
        IDErr.innerHTML = "Error: Invalid National ID Format";
        return false;
    }

    if (!hyp == '-'){
        IDErr.innerHTML = "Error: Invalid NAtional ID Format";
        return false;
    }
    sessionStorage.setItem('ID', 'Valid');
    return true;

}

function isNameValid(){
    var fname = document.getElementById('fName').value;
    var lname = document.getElementById('lName').value;
    var firstErr = document.getElementById("fNameErr");
    var lastErr = document.getElementById("lNameErr");
    var name =/[A-Za-z]/;

    if( (fname == "") && (lname == "") ) {
        firstErr.innerHTML = "Error: Missing Information";
        lastErr.innerHTML = "Error: Missing Information";
        document.getElementById('fName').style.borderColor = "red";
        document.getElementById('lName').style.borderColor = "red";
        return false;
    }

  

    
    
}

function isLicenseValid() {
    var lic = document.getElementById('license').value;
    var licErr = document.getElementById("licenseErr");

    if( lic == ""){
        licErr.innerHTML = "Error: Information Missing";
        document.getElementById('license').style.borderColor = "red";
        return false;
    }
}


function isAdressValid(){
    var A1 = document.getElementById('add1').value;
    var A2 = document.getElementById('add2').value;
    var A1Err = document.getElementById("add1Err");
    var A2Err = document.getElementById("add2Err");

    var address = /^([a-zA-Z])([0-9])/;

    if ( (A1 == "") && (A2 == "") ) {
        A1Err.innerHTML = "Error: Missing Information";
        A2Err.innerHTML = "Error: Missing Information";
        document.getElementById('add1').style.borderColor = "red";
        document.getElementById('add2').style.borderColor = "red";
        return false;
    }


}

function newDriver(driver){
    
   // isIdValid();
    //isLicenseValid();
    //isNameValid();
    //isAdressValid();

    var nID = document.getElementById('nID').value;
    var fname = document.getElementById('fName').value;
    var lname = document.getElementById('lName').value;
    var add = document.getElementById('add1').value + document.getElementById('add2').value;

    
  if (isIdValid() && isLicenseValid() && isNameValid() && isAdressValid() == false) {
      return false;
    }
    else{
        var drivers = { drivers:
            {NID: nID, firstName: fname, "lastName":lname, "address": add}
        } ;
        localStorage.setItem('Driver', JSON.stringify(drivers));
        location = "index.html";
        return true;
    }
}

