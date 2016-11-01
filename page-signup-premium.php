<?php
/*
Template Name: Sign-up-Premium
*/
?>

<?php get_header(); ?>


<script type="text/javascript">

window.onload = disableBtn();


function disableBtn () {
	 document.getElementById("submitbtn").disabled = true;
}

function init() {
  // Get a reference to our touch-sensitive element
  var touchzone = document.getElementById("submitbtn");
  // Add an event handler for the touchstart event
  touchzone.addEventListener("touchmove", touchHandler, false);
}

//VALIDATE NAME
 
function validateFname(fld) {
    var error = "";
	var name = /^[a-zA-Z0-9\s\-,.']+$/;
    
 
  if (fld.value.length == 0) {
		fld.style.background = 'Yellow';
		error = document.getElementById('msgalert').innerHTML = 'Please fill in required field \n.';
		 document.getElementById('submitbtn').disabled = true;
		 document.getElementById('submitbtn').className = "noclick";
	}  if (!fld.value.match(name)) {
		fld.style.background = 'Yellow';
		error = document.getElementById('msgalert').innerHTML = 'Enter a valid First Name\n.';
		 document.getElementById('submitbtn').disabled = true;
		 document.getElementById('submitbtn').className = "noclick";
	
	}else {
        fld.style.background = 'White';
		error = document.getElementById('msgalert').innerHTML = '';
    }
    return error;
}




//VALIDATE LAST NAME

function validateLname(fld) {
    var error = "";
	var name = /^[a-zA-Z0-9\s\-,.']+$/;
   
 
  if (fld.value.length == 0) {
		fld.style.background = 'Yellow';
		error = document.getElementById('msgalert2').innerHTML = 'Please fill in required field \n.';
		 document.getElementById('submitbtn').disabled = true;
		 document.getElementById('submitbtn').className = "noclick";
	} else if (!fld.value.match(name)) {
		fld.style.background = 'Yellow';
		error = document.getElementById('msgalert2').innerHTML = 'Enter a valid Last Name\n.';
		 document.getElementById('submitbtn').disabled = true;
		 document.getElementById('submitbtn').className = "noclick";
	
	}
	
	else {
        fld.style.background = 'White';
		error = document.getElementById('msgalert2').innerHTML = '';
    }
    return error;
}



//CHECK TELEPHONE

function validatePhone(fld) {
    var error = document.getElementById('telalert').innerHTML ="";
	var numPattern = /^[2-9]{1}[0-9]{2}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}$/;    


 if (!numPattern.test(fld.value)) {
		error = document.getElementById('telalert').innerHTML = "Enter a valid US telephone number.\n";
        fld.style.background = 'Yellow';

    } else {
        fld.style.background = 'White';
		error = document.getElementById('telalert').innerHTML ="";
    }
    return error;
}

//VALIDATE PASSWORD
function validatePassword(fld) {
    var error = "";
 	var caps = /([A-Z]){1}/g;
	var num = /([0-9]){5,}/g;
 
    if (fld.value == "" || !fld.value.match(num) || !fld.value.match(caps) ) {
        fld.style.background = 'Yellow';
        error = document.getElementById('pswrdalert').innerHTML = "You must enter a valid password consisting of atleast 6 characters with 1 uppercase letter.\n";
		 document.getElementById('submitbtn').disabled = true;
		 document.getElementById('submitbtn').className = "noclick";
    
    } else {
        fld.style.background = 'White';
		error = document.getElementById('pswrdalert').innerHTML = "";
    }
   return error;
}   




//PASSWORD STRENGTH

function passwordChanged() {
var strength = document.getElementById('strength');
var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\W).*$", "g");
var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
var enoughRegex = new RegExp("(?=.{6,}).*", "g");
var pwd = document.getElementById("password");

 if (strongRegex.test(pwd.value)) {
strength.innerHTML = '<span style="color:#fff;background-color:green;padding:5px;width: 93%;display:block;text-align: center;">Strong!</span>';
} else if (mediumRegex.test(pwd.value)) {
strength.innerHTML = '<span style="color:#fff;background-color:orange;padding:5px;width: 93%;display:block;text-align: center;">Medium!</span>';
} else {
strength.innerHTML = '<span style="color:#fff;background-color:red;padding:5px;width: 93%;display:block;text-align: center;">Weak!</span>';
}
}

//VALIDATE EMAIL

function trim(s)
{
  return s.replace(/^\s+|\s+$/, '');
}

function validateEmail(fld) {
    var error="";
    var tfld = trim(fld.value);                        // value of field with whitespace trimmed off
    var emailFilter  = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/; // /^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i // /^[^@]+@[^@.]+\.[^@]*\w\w$/ ;
	
    var illegalChars= /[\(\)\<\>\,\;\:\\\"\[\]]/;
   
    if (fld.value == "") {
        fld.style.background = 'Yellow';
        error = document.getElementById('emailalert').innerHTML = "You didn't enter an email address.\n";
		 document.getElementById('submitbtn').disabled = true;
		 document.getElementById('submitbtn').className = "noclick";
    } else if (!tfld.match(emailFilter)) {              
        fld.style.background = 'Yellow';
        error = document.getElementById('emailalert').innerHTML = "Please enter a valid email address.\n";
		fld.value == "";
		 document.getElementById('submitbtn').disabled = true;
		 document.getElementById('submitbtn').className = "noclick";
    } else {
        fld.style.background = 'White';
		error = document.getElementById('emailalert').innerHTML = "";
    }
    return error;
}


//VALIDATE CC NAME
function validateCCName(fld) {
    var error = document.getElementById('ccalert').innerHTML ="";
	var pattern = /^[a-zA-Z0-9\s\-,.']+$/;
 
    
	if (!pattern.test(fld.value)) {
		error = document.getElementById('ccalert').innerHTML = "Enter a valid name.\n";
        fld.style.background = 'Yellow';

    } else if (fld.value.length == 0) {
        fld.style.background = 'Yellow'; 
		error = document.getElementById('ccalert').innerHTML = "Enter name as on your credit card.\n";
    } else {
        fld.style.background = 'White';
    }
    return error;  
}



//VALIDATE CC NUMBER

function luhnChk(input) {
	
	var fld = document.getElementById('cardNumber');
	var error = ""
  var sum = 0;
  var numdigits = input.length;
  var parity = numdigits % 2;
  
  for(var i=0; i < numdigits; i++) {
    var digit = parseInt(input.charAt(i))
    if(i % 2 == parity) digit *= 2;
    if(digit > 9) digit -= 9;
    sum += digit;
	
  }
  

if((sum%10)!=0){
    error = document.getElementById('ccnumalert').innerHTML = "Enter a valid credit card number.\n";
     fld.style.background = 'Yellow';
} else if (fld.value == "") {
	 error = document.getElementById('ccnumalert').innerHTML = "The required credit card number field has not been filled.\n";
     fld.style.background = 'Yellow';
} else{
    error = document.getElementById('ccnumalert').innerHTML = "";
	fld.style.background = 'white';
}
}


//VALIDATE ADDRESS 

function validateAddress(fld) {
	
	var pattern = /^[a-zA-Z0-9\s\-!@#$%&\(\)\+;:'",.\?/=\[\]<>]+$/;
	var error = document.getElementById('addressalert').innerHTML ="";
	
	if(fld.value == "") {
		
		error = document.getElementById('addressalert').innerHTML = "Enter an address.\n";
        fld.style.background = 'Yellow';
		
	} else if (!pattern.test(fld.value)) {
		error = document.getElementById('addressalert').innerHTML = "Enter a valid address.\n";
        fld.style.background = 'Yellow';

    } else {
		
		error = document.getElementById('addressalert').innerHTML = "";
        fld.style.background = 'White';
	}
	
	
	
}




//VALIDATE CC NUMBER

function validateCCNUM(fld) {
    var error = document.getElementById('ccnumalert').innerHTML ="";
    var stripped = fld.value.replace(/[\(\)\.\-\ ]/g, '');    

   if (fld.value == "") {
        error = document.getElementById('ccnumalert').innerHTML = "Enter your credit card number.\n";
        fld.style.background = 'Yellow';
    } else if (isNaN(parseInt(stripped))) {
         error = document.getElementById('ccnumalert').innerHTML = "Enter your credit card number.\n";
        fld.style.background = 'Yellow';
    } else if (stripped.length < 16) {
       error = document.getElementById('ccnumalert').innerHTML = "Enter your credit card number.\n";
        fld.style.background = 'Yellow';
    } else {
        fld.style.background = 'White';
		error = document.getElementById('ccnumalert').innerHTML ="";
    }
    return error;
}



//VALIDATE EXPIRY DATE
function normalizeYear(year){
    // Century fix
    var YEARS_AHEAD = 20;
    if (year<100){
        var nowYear = new Date().getFullYear();
        year += Math.floor(nowYear/100)*100;
        if (year > nowYear + YEARS_AHEAD){
            year -= 100;
        } else if (year <= nowYear - 100 + YEARS_AHEAD) {
            year += 100;
        }
    }
    return year;
}

function checkExp(){
    var match=$('#expiryDate').val().match(/^((0[1-9])|(1[0-2]))\/(\d{4})$/);
	var error = "";
    if (!match){
        error = document.getElementById('expiry').innerHTML = 'Date does not match the expiration date format.';
		document.getElementById('expiryDate').style.background = 'Yellow';
        return error;
    }
    var exp = new Date(normalizeYear(1*match[4]),1*match[1]-1,1).valueOf();
    var now=new Date();
    var currMonth = new Date(now.getFullYear(),now.getMonth(),1).valueOf();
    if (exp<=currMonth){
         error = document.getElementById('expiry').innerHTML = 'Credit card is Expired';
		 document.getElementById('expiryDate').style.background = 'Yellow';
		 return error;
    } else if (document.getElementById('expiryDate').value == "") {
		error = document.getElementById('expiry').innerHTML = 'The requiresd expiry date has been filled.\n';
		 document.getElementById('expiryDate').style.background = 'Yellow';
		 return error;
	} else {
		document.getElementById('expiryDate').style.background = 'white';
	 error = document.getElementById('expiry').innerHTML = '';
		return error;
	}
}

//VALIDATE CVV

function validateCVV(fld) {
	
	var error = document.getElementById('cvvalert').innerHTML = "";
	
	if(fld.value == ""){
		error = document.getElementById('cvvalert').innerHTML = 'The required CVV field has not been filled.\n';
		fld.style.background = "Yellow";
	} else {
		error = document.getElementById('cvvalert').innerHTML = '';
		fld.style.background = "White";
	}
}

//VALIDATE NUMBERS ONLY

 function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode;
		 
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
	  
	  
//VALIDATE LETTERS ONLY	 
	function lettersOnly(evt) {
    evt = (evt) ? evt : event;
    var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode : 
        ((evt.which) ? evt.which : 0));
    if (charCode > 32 && (charCode < 65 || charCode > 90) && 
        (charCode < 97 || charCode > 122) && charCode != 45 && charCode != 39) {
        return false;
    }
    return true;
}
	 



// VALIDATE POSTAL CODE
function postCode(fld){
	
	error = "";
	
	  if (fld.value.length < 5  || isNaN(fld.value)){
           
		error = document.getElementById('postalert').innerHTML = "Enter zip code as on your credit card.\n";	
		fld.style.background = 'Yellow';			
	  } else {
		    fld.style.background = 'White';
			error = document.getElementById('postalert').innerHTML = "";	
	  }
	  
	  return error;
	  
}

//VALIDATE CITY FIELD

function validateCity(fld) {
    var error = document.getElementById('cityalert').innerHTML ="";
	var pattern =  /^[a-zA-Z0-9\s\-!@#$%&\(\)\+;:'",.\?/=\[\]<>]+$/;
 
    if (fld.value.length == 0) {
        fld.style.background = 'Yellow'; 
		error = document.getElementById('cityalert').innerHTML = "The required city field has not been filled in.\n";
    } else if (!pattern.test(fld.value)) {
		error = document.getElementById('cityalert').innerHTML = "Enter a valid city.\n";
        fld.style.background = 'Yellow';

    } else {
        fld.style.background = 'White';
    }
    return error;  
}

//VALIDATE DISCLAIMER
function validateDisc(form){
	
	var errormsg = "";
	var legal = document.getElementById('disc').checked;
	 
	  if ( legal == false  ){
		 document.getElementById('submitbtn').disabled = true;
		 document.getElementById('submitbtn').className = "noclick";
		 errormsg = document.getElementById('dscalert').innerHTML = "In order to use YipTV services you need to accept our Terms of Use and Privacy Policy";
		 
		
	 } else {
		  
		errormsg = document.getElementById('dscalert').innerHTML = "";
		 
		
	 }
	 
	 return errormsg;
}



//FINAL FORM CHECK BEFORE SUBMISSION
function checkForm(){
	var count = 0;
	var caps = /[A-Z]/;
	var etest = /[@]/g;
	var etest2 = /[.]/g;

	var elements = document.theForm.getElementsByTagName("input");
	var legal = document.getElementById('disc').checked; 
	var fName = document.getElementById('firstName');
	var lName = document.getElementById('lastName');
	var email = document.getElementById('email');
	var mobile = document.getElementById('telephone');
	var pswrd = document.getElementById('password');
	
for (var i = 0; i < elements.length; i++) {
    if(elements[i].value == "" )
		count++;
	}
	
	
if(count == 0 && legal == true && elements[4].value.length > 6 && caps.test(elements[4].value) != 0 && etest.test(elements[2].value) != 0 && etest2.test(elements[2].value) != 0  ){
		 document.getElementById('submitbtn').disabled = false;
		document.getElementById('submitbtn').className = "signupfree";
	} else {
		document.getElementById('submitbtn').disabled = true;
		document.getElementById('submitbtn').className = "noclick";
	}

	 
}

document.getElementById("submitbtn").onclick = checkForm;



function touchHandler(event) {
var count = 0;
	
	var elements = document.theForm.getElementsByTagName("input");
	
for (var i = 0; i < elements.length; i++) {
    if(elements[i].value == "")
		count++;
	}
	
	if(count==0){
		 document.getElementById('submitbtn').disabled = false;
		document.getElementById('submitbtn').className = "signupfree";
	} else {
		document.getElementById('submitbtn').disabled = true;
		document.getElementById('submitbtn').className = "noclick";
	}
}

</script>



<div class="container">
<div class="signup">


<h1><?php the_field('pageheader'); ?></h1>

<div class="paiddscr">
<?php the_content(); ?>
</div>
<div class="paidbox">

<?php $currentlang = get_bloginfo('language'); 

if($currentlang=="en-US"):?>
<form id="theForm" name="theForm" method="POST" action="<?php echo esc_url(get_template_directory_uri());; ?>/page-process-premium.php" onKeyPress="checkForm()" onMouseMove="checkForm()">
<?php else: ?>
<form id="theForm" name="theForm" method="POST" action="<?php echo esc_url(get_template_directory_uri());; ?>/page-process-premiumsp.php" onKeyPress="checkForm()" onMouseMove="checkForm()">
<?php endif; ?>

<?php $currentlang = get_bloginfo('language'); 
if($currentlang=="en-US"):?>
<h2>Account Information</h2>
<?php else: ?>
<h2>Informaci&oacute;n de Cuente  </h2>
<?php endif; ?>

<?php $currentlang = get_bloginfo('language'); 

if($currentlang=="en-US"):?>
<p>First Name</p>
<?php else: ?>
<p>Primer Nombre </p>
<?php endif; ?>
<p><input type="text" name="firstName"  id="firstName" onBlur="return validateFname(this)" onkeypress="return lettersOnly(event)" autocomplete="off"></p>
<p class="alert" id="msgalert"></p>

<?php $currentlang = get_bloginfo('language'); 

if($currentlang=="en-US"):?>
<p><label for="lastName">Last Name</label></p>
<?php else: ?>
<p><label for="lastName">Apellido</label></p>
<?php endif; ?>
<p><input type="text" name="lastName" id="lastName" onBlur="return validateLname(this)" onkeypress="return lettersOnly(event)"  autocomplete="off"></p>
<p class="alert" id="msgalert2"></p>


<?php $currentlang = get_bloginfo('language'); 

if($currentlang=="en-US"):?>
<p><label for="email">Email</label></p>
<?php else: ?>
<p><label for="email">Correo Electr&oacute;nico</label></p>
<?php endif; ?>
<p><input type="email" name="email" id="email" maxlength="50" onBlur="return validateEmail(this)" onKeyPress="return validateEmail(this)"  autocomplete="off" ></p>
<p class="alert" id="emailalert"></p>

<?php $currentlang = get_bloginfo('language'); 

if($currentlang=="en-US"):?>
<p><Label for="phone">Mobile</Label></p>
<?php else: ?>
<p><Label for="phone">Tel&eacute;fono</Label></p>
<?php endif; ?>
<p><input type="tel" maxlength="12" name="telephone" id="telephone" onBlur="return validatePhone(this)"  onkeypress="return validatePhone(this)" autocomplete="off" ></p>
<p class="alert" id="telalert"></p>


<?php $currentlang = get_bloginfo('language'); 
if($currentlang=="en-US"):?>
<p><label for="password">Password</label> <span style="font-size:14px;font-weight:300">(Please use 6 characters or more and at least one number or capital letter)</span></p>
<?php else: ?>
<p><label for="password">Contrase&ntilde;a</label> <span style="font-size:14px;font-weight:300">(Por favor utiliza 6 caracteres o mas, y cuando menos un n&uacute;mero, o  letra may&uacute;scula)
</span></p>
<?php endif; ?>
<p><input name="password" id="password" size="35" maxlength="20" type="password" onBlur="return validatePassword(this)" onChange="validatePassword(this)"   onkeyup="return passwordChanged();" autocomplete="off"></p>
<span id="strength"></span>
<p class="alert" id="pswrdalert"></p>


<?php $currentlang = get_bloginfo('language'); 
if($currentlang=="en-US"):?>
<h2>Billing Information</h2>
<?php else: ?>
<h2>Informaci&oacute;n de Facturaci&oacute;n  </h2>
<?php endif; ?>

<?php $currentlang = get_bloginfo('language'); 
if($currentlang=="en-US"):?>
<p>Name on Credit Card</p>
<?php else: ?>
<p>Nombre en Tarjeta de Cr&eacute;dito </p>
<?php endif; ?>
<p><input type="text" name="cardName" maxlength="128"  id="cardName" onBlur="return validateCCName(this)" onkeypress="return lettersOnly(event)"  autocomplete="off"></p>
<p class="alert" id="ccalert"></p>


<?php $currentlang = get_bloginfo('language'); 
if($currentlang=="en-US"):?>
<p>Credit Card Number</p>
<?php else: ?>
<p>N&uacute;mero de Tarjeta de Cr&eacute;dito</p>
<?php endif; ?>
<p><input type="text" name="cardNumber" autocomplete="off"  id="cardNumber" maxlength="19" onBlur="return luhnChk(this.value)" onkeypress="return isNumberKey(event)" autocomplete="off"></p>
<p class="alert" id="ccnumalert"></p>


<?php $currentlang = get_bloginfo('language'); 
if($currentlang=="en-US"):?>
<p><label for="expirydate">Expiration Date</label> <span style="font-size:14px;font-weight:300">(MM/YYYY)</span></p>
<?php else: ?>
<p><label for="expirydate">Fecha de Expiraci&oacute;n</label> <span style="font-size:14px;font-weight:300">(Mes/A&ntilde;o)</span></p>
<?php endif; ?>
<p><input type="text" name="expiryDate" maxlength="7"  id="expiryDate" onBlur="checkExp()" onChange="checkExp()"  autocomplete="off"></p>
<p class="alert" id="expiry"></p>


<?php $currentlang = get_bloginfo('language'); 
if($currentlang=="en-US"):?>
<p>CVV</p>
<?php else: ?>
<p>CVV <span style="font-size:14px;font-weight:300"> (Clave de Seguridad de 3 n&uacute;meros)</span></p>
<?php endif; ?>
<p><input type="text" name="cvv"  id="cvv" maxlength="4" autocomplete="off" onkeypress="return isNumberKey(event)" onBlur="return validateCVV(this)" autocomplete="off"></p>
<p class="alert" id="cvvalert"></p>

<?php $currentlang = get_bloginfo('language'); 
if($currentlang=="en-US"):?>
<p>Billing Address</p>
<?php else: ?>
<p>Domicilio de Facturaci&oacute;n </p>
<?php endif; ?>
<p><input type="text" name="address"  id="address" maxlength="80" onBlur="return validateAddress(this)" autocomplete="off" ></p>
<p class="alert" id="addressalert"></p>


<?php $currentlang = get_bloginfo('language'); 
if($currentlang=="en-US"):?>
<p>City</p>
<?php else: ?>
<p>Ciudad</p>
<?php endif; ?>
<p><input type="text" name="city" maxlength="80"  id="city" onBlur="return validateCity(this)" onkeypress="return lettersOnly(event)" autocomplete="off" ></p>
<p class="alert" id="cityalert"></p>


<?php $currentlang = get_bloginfo('language'); 
if($currentlang=="en-US"):?>
<p>State</p>
<?php else: ?>
<p>Estado </p>
<?php endif; ?>
<p><select name="state" >
<option value="" selected></option>
<option value="AL">Alabama</option> 
<option value="AK">Alaska </option>
<option value="AS">American Samoa </option>
<option value="AZ">Arizona </option>
<option value="AR">Arkansas </option>
<option value="CA">California </option>
<option value="CO">Colorado </option>
<option value="CT">Connecticut </option>
<option value="DE">Delaware </option>
<option value="DC">District Of Columbia </option>
<option value="FL">Florida </option>
<option value="GA">Georgia </option>
<option value="GU">Guam </option>
<option value="HI">Hawaii </option>
<option value="ID">Idaho </option>
<option value="IL">Illinois </option>
<option value="IN">Indiana </option>
<option value="IA">Iowa </option>
<option value="KS">Kansas </option>
<option value="KY">Kentucky </option>
<option value="LA">Louisiana </option>
<option value="ME">Maine </option>
<option value="MD">Maryland </option>
<option value="MA">Massachusetts </option>
<option value="MI">Michigan </option>
<option value="MN">Minnesota </option>
<option value="MS">Mississippi </option>
<option value="MO">Missouri </option>
<option value="MT">Montana </option>
<option value="NE">Nebraska </option>
<option value="NV">Nevada </option>
<option value="NH">New Hampshire </option>
<option value="NJ">New Jersey  </option>
<option value="NM">New Mexico </option>
<option value="NY">New York </option>
<option value="NC">North Carolina </option>
<option value="ND">North Dakota </option>
<option value="MP">Northern Mariana Islands </option>
<option value="OH">Ohio </option>
<option value="OK">Oklahoma </option>
<option value="OR">Oregon </option>
<option value="PA">Pennsylvania </option>
<option value="PR">Puerto Rico </option>
<option value="RI">Rhode Island </option>
<option value="SC">South Carolina </option>
<option value="SD">South Dakota </option>
<option value="TN">Tennessee </option>
<option value="TX">Texas </option>
<option value="UT">Utah </option>
<option value="VT">Vermont </option>
<option value="VI">Virgin Islands  </option>
<option value="VA">Virginia </option>
<option value="WA">Washington </option>
<option value="WV">West Virginia </option>
<option value="WI">Wisconsin </option>
<option value="WY">Wyoming </option>
</select>
</p>


<?php $currentlang = get_bloginfo('language'); 
if($currentlang=="en-US"):?>
<p>Zip Code</p>
<?php else: ?>
<p>C&oacute;digo Postal</p>
<?php endif; ?>
<p><input type="text" name="zipCode"  id="zipCode" maxlength="5" onBlur="return postCode(this)" onChange="return postCode(this)"  onMouseOut="checkForm()" onkeypress="return isNumberKey(event)" autocomplete="off"></p>
<p class="alert" id="postalert"></p>


<p class="legal"><input  type="checkbox" checked >Please send me updates via text message and email </p>


<?php $currentlang = get_bloginfo('language'); 

if($currentlang=="en-US"):?>
<p class="legal"><input class="legal" type="checkbox"  id="disc"  onClick="validateDisc(this.form)" checked>I agree to the YipTV Terms of Use and Privacy Policy</p>
<?php else: ?>
<p class="legal"><input class="legal" type="checkbox"  id="disc"  onClick="validateDisc(this.form)" checked>Convengo a los T&eacute;rminos de Uso y Pol&iacute;tica de Privacidad de YipTV</p>
<?php endif; ?>
<p class="alert" id="dscalert"></p>
</form>

<?php $currentlang = get_bloginfo('language'); 

if($currentlang=="en-US"):?>
<button class="noclick" id="submitbtn"   type="submit" form="theForm"  onMouseOver="checkForm()" touchmove="checkForm()" >START MY PREMIUM MEMBERSHIP</button>
<?php else: ?>
<button class="noclick" id="submitbtn"   type="submit" form="theForm"  onMouseOver="checkForm()" touchmove="checkForm()">INICIA MI MEMBRES&iacute;A PREMIER </button>
<?php endif; ?>
<h2><?php the_field('pagefooter'); ?></h2>
</div>


</div>



</div>

<section id="bottom">
<div class="container">

<?php
            wp_nav_menu( array(
              
                'theme_location'    => 'legalfooter',
                'depth'             => 2)
            );
			  
        ?>

<p>Copyright &copy; <?php echo date("Y"); echo " "; bloginfo('name'); ?>. Use of the YipTV Service and this website constitutes acceptance of our terms of service and privacy policy.</p>
</div>
</section>