

// Code for Drop Down Menu Side
   /* When the user clicks on the button, toggle between hiding and showing the dropdown content */
   function dropDownMenu() {
    document.getElementById("myDropdown").classList.toggle("show");

    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
             openDropdown.classList.remove('show');
          }
        }
      }
    }
    
  }


// JavaScript Function to Log User Out
  function logOut()
  {
    localStorage.removeItem('email');
    localStorage.removeItem('psw');
    sessionStorage.setItem('Status', 'false');
    location = "index.php";
}

function adLogOut()
{
    sessionStorage.setItem('Admin Status', 'false');
    location = "/test2/admin/index.html";
}



//Java Script to Validate Sing In Info And Log In User
localStorage.setItem('Username', 'test1001');
localStorage.setItem('Password', 'password1');
var theUser = localStorage.getItem('Username');
var thePassword = localStorage.getItem('Password');




function validateUser() {
    var usernameErr = document.getElementById("usernameErr");
    var passwordErr = document.getElementById("passwordErr");
    var uname = document.getElementById('username').value;
    var pass = document.getElementById('psw').value;

    if ((uname.value == " ") && (pass.value == " ")) {
        usernameErr.innerHTML = "Invalid Username";
        passwordErr.innerHTML = "Invalid Password";
        return false;
    }

     if ( (isUsernameFormatValid(uname) == true) && (isPasswordFormatValid() == true) ) {
        

            
        if ((!uname.match(theUser)) && (!pass.match(thePassword))) {
            usernameErr.innerHTML = "Invalid Username";
            passwordErr.innerHTML = "Invalis Password";
            sessionStorage.setItem('Status', 'false');
            return false;
        }
        else {
            sessionStorage.setItem('Status', 'true');
            location = "/public_console.php";
            return true;
        }
    }
}



function isUsernameFormatValid(uname){
    var usernameErr = document.getElementById("usernameErr");
    var input = document.getElementById('username').value;
    var reUser = /^([a-zA-Z])/;
    var num = /[0-9]/g;

    if ( !input.match(reUser) ) {
        usernameErr.innerHTML = "Invalid Username";
        return false;
    }

    if (!input.match(num)) {
        usernameErr.innerHTML = "Invalid Username";
        return false;
    }

    if(input.length <8 ) {
        usernameErr.innerHTML = "Invalid Username";
        return false;
    }

    return true;
}

function isPasswordFormatValid(){
    var passwordErr = document.getElementById("passwordErr");
    var inputpw = document.getElementById('psw').value;
    var rePassword = /^([a-zA-Z])/;
    var numbers = /[0-9]/g;

    if (!inputpw.match(rePassword)) {
        passwordErr.innerHTML = "Invalid Password";
        return false;
    }

    if (!inputpw.match(numbers)) {
        passwordErr.innerHTML = "Invalid Password";
        return false;
    }

    if ((inputpw.length <8 ) || (inputpw.length >16) ) {
        passwordErr.innerHTML = "Invalid Password";
        return false;
    }
return true;
}


// Java Script to Validate Sing Up Info
function isIdValid(id) {
    var num = /[0-9]/g;

    var IDErr = document.getElementById("nIDErr");
    var nID = document.getElementById('nID').value;
    var hyp = nID.charAt(6);

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

function  isEmailValid(email){
    var email = document.getElementById('email');
    var emailErr = document.getElementById('emailErr');
    var filter = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-
                    9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        
    if (!filter.test(email.value)) {
        emailErr.innerHTML = "Error: Invaild EMail Format";
        email.focus;
        return false
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

        return false;
    }


}

function newDriver(){
    
   // isIdValid();
    //isLicenseValid();
    //isNameValid();
    //isAdressValid();

    var nID = document.getElementById('nID').value;
    var fname = document.getElementById('fName').value;
    var lname = document.getElementById('lName').value;
    var add1 = document.getElementById('add1').value;
    var add2 = document.getElementById('add2').value;
    var parish = document.getElementById('Parishes').value;
    var license = document.getElementById('license').value;
    
  if (isIdValid() && isLicenseValid() && isNameValid() && isAdressValid() == false) {
      return false;
    }
    else{
        driverArray.push(
            {nationalId: nID, licenseNo: license, 
                firstName: fname, lastName:lname, 
                address1: add1, address2: add2,
                parish: parish}
              );
                
        location = "index.html";
        return true;
    }
}





// Java Script for Load Data
function loadData()
{
  var driverArray = [
     {
        nationalId: "730209-3043",
        licenseNo: "135686819730209",
        firstName: "Andrew",
        lastName: "Pryor",
        address1: "31 ",
        address2: "Prior Park",
        parish: "St. James",
        username: "qwer1234",
        password:"andrewpryor123"
     },

     {
        nationalId: "671212-0404",
        licenseNo: "143647819671212",
        firstName: "Jennifer",
        surname: "Davis",
        address1: "Wavell Ave",
        address2: "Black Rock",
        parish: "St. Michael",
        username: "geju7593",
        password:"anoth3rpass"
   },

   {
      nationalId: "790422-1209",
      licenseNo: "100893419790422",
      firstName: "Anderson",
      surname: "Alleyne",
      address1: "Lascelles Terrace",
      address2: "The Pine",
      parish: "St. Michael",
      username: "oyqb4789",
      password:"thepassw0rd"
   }
  ]

  var employeeArray = [
   {
      employeeId: "545-700-593",
      firstName: "Merissa",
      lastName: "Halliwall",
      password:"f1rstpa55"
   },

   {
      employeeId: "090-728-221",
      firstName: "Terold",
      lastName: "Bostwick",
      password:"secur3acc3s5"
 },

 {
   employeeId: "147-830-662",
   firstName: "Vanda",
   lastName: "Marshall",
   password:"oll1p0ps"
 }
]

  //add to localStorage 
  if(!localStorage.getItem("driverInfo"))
  {
     localStorage.setItem("driverInfo", JSON.stringify(driverArray));
  }
  if(!localStorage.getItem("employeeinfo"))
  {
     localStorage.setItem("employeeinfo", JSON.stringify(employeeArray));
  }

}



function checkStatus()
{
    var status = sessionStorage.getItem("Status");
    //alert(status);

    if ((status == "false") ||(status == null) ) 
    {
        location = "index.html";
        return true;
    }   
}

function checkAdStatus()
{
    var adStatus = sessionStorage.getItem("Admin Status");
    //alert(adStatus);

    if ((adStatus == "false") || (adStatus == null) ) 
    {
        location = "/test2/admin/index.html";
        return true;
    }
}
    


function validateEmployee()
{
    var empid = document.getElementById('emplyID').value;
    var emIdErr = document.getElementById("employIDErr");
    var pass = document.getElementById('psw').value;
    var pswErr = document.getElementById("passwordErr");


    if ((empid.value == " ") && (pass.value == " ")) {
        usernameErr.innerHTML = "Invalid Username";
        passwordErr.innerHTML = "Invalid Password";
        return false;
    }


    if ( (isEmployeeIdFormatValid(empid) == true) && (isPasswordFormatValid() == true) ) {
        

        if ((!empid.match(theUser)) && (!pass.match(thePassword))) {
            emIdErr.innerHTML = "Invalid Employee ID";
            pswErr.innerHTML = "Invalis Password";
            sessionStorage.setItem('Admin Status', 'false');
            return false;
        }
        else {
            sessionStorage.setItem('Admin Status', 'true');
            location = "/test2/admin/admin_console.html";
            return true;
        }
    }

   
}

function isEmployeeIdFormatValid()
{
    var numbers = /^\d+(-\d+)*$/;
    var emIdErr = document.getElementById("employIDErr");
    var empid = document.getElementById('emplyID').value;
   
    if (!empid.match(numbers)) {
        emIdErr.innerHTML = "Invalid Employee Id Format";
        return false;
    }
    if (empid.length <11){
        emIdErr.innerHTML = "Invalid Employee Id Format";
        return false;
    }

        return true;

}


    