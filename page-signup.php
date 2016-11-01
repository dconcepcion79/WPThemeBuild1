<?php
/*
Template Name: Sign-up
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
  var touchzone = document.getElementsByTagName('input');
  // Add an event handler for the touchstart event
  touchzone.addEventListener("touchstart", touchHandler, false);
}


//CHECK EMPTY FIELDS

function validateEmpty(fld) {
    var error = "";
 
    if (fld.value.length == 0) {
        fld.style.background = 'Yellow'; 
        if(fld.name == 'firstName'){
		error = document.getElementById('msgalert').innerHTML = 'Please fill in required field \n.';
		 document.getElementById('submitbtn').disabled = true;
		 document.getElementById('submitbtn').className = "noclick";
	}
		if(fld.name == 'lastName'){
		error = document.getElementById('msgalert2').innerHTML = 'Please fill in required field \n.';
		 document.getElementById('submitbtn').disabled = true;
		 document.getElementById('submitbtn').className = "noclick";
		}
		if(fld.name == 'email'){
		error = document.getElementById('emailalert').innerHTML = 'Please fill in required field \n.';
		 document.getElementById('submitbtn').disabled = true;
		 document.getElementById('submitbtn').className = "noclick";
		}
		if(fld.name == 'telephone'){
		error = document.getElementById('telalert').innerHTML = 'Please fill in required field \n.';
		 document.getElementById('submitbtn').disabled = true;
		 document.getElementById('submitbtn').className = "noclick";
		}
		if(fld.name == 'password'){
		error = document.getElementById('pswrdalert').innerHTML = 'Please fill in required field \n.';
		 document.getElementById('submitbtn').disabled = true;
		 document.getElementById('submitbtn').className = "noclick";
		}
    } else {
        fld.style.background = 'White';
		error = document.getElementById('msgalert').innerHTML = '';
		error = document.getElementById('msgalert2').innerHTML = '';
		error = document.getElementById('emailalert').innerHTML = '';
		error = document.getElementById('telalert').innerHTML = '';
		error = document.getElementById('pswrdalert').innerHTML = '';
    }
    return error;  
}

//VALIDATE NAME
 
function validateFname(fld) {
    var error = "";
    
 
  if (fld.value.length == 0) {
		fld.style.background = 'Yellow';
		error = document.getElementById('msgalert').innerHTML = 'Please fill in required field \n.';
		 document.getElementById('submitbtn').disabled = true;
		 document.getElementById('submitbtn').className = "noclick";
	}
	
	else {
        fld.style.background = 'White';
		error = document.getElementById('msgalert').innerHTML = '';
    }
    return error;
}



//VALIDATE LAST NAME

function validateLname(fld) {
    var error = "";
   
 
  if (fld.value.length == 0) {
		fld.style.background = 'Yellow';
		error = document.getElementById('msgalert2').innerHTML = 'Please fill in required field \n.';
		 document.getElementById('submitbtn').disabled = true;
		 document.getElementById('submitbtn').className = "noclick";
	}
	
	else {
        fld.style.background = 'White';
		error = document.getElementById('msgalert2').innerHTML = '';
    }
    return error;
}

//VALIDATE EMAIL

function trim(s)
{
  return s.replace(/^\s+|\s+$/, '');
}

function validateEmail(fld) {
    var error="";
    var tfld = trim(fld.value);                        // value of field with whitespace trimmed off
    var emailFilter = /^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i // /^[^@]+@[^@.]+\.[^@]*\w\w$/ ;
    var illegalChars= /[\(\)\<\>\,\;\:\\\"\[\]]/;
   
    if (fld.value == "") {
        fld.style.background = 'Yellow';
        error = document.getElementById('emailalert').innerHTML = "You didn't enter an email address.\n";
		 document.getElementById('submitbtn').disabled = true;
		 document.getElementById('submitbtn').className = "noclick";
    } else if (!emailFilter.test(tfld)) {              //test email for illegal characters
        fld.style.background = 'Yellow';
        error = document.getElementById('emailalert').innerHTML = "Please enter a valid email address.\n";
		fld.value == "";
		 document.getElementById('submitbtn').disabled = true;
		 document.getElementById('submitbtn').className = "noclick";
    } else if (fld.value.match(illegalChars)) {
        fld.style.background = 'Yellow';
        error = document.getElementById('emailalert').innerHTML = "The email address contains illegal characters.\n";
		 document.getElementById('submitbtn').disabled = true;
		 document.getElementById('submitbtn').className = "noclick";
    } else {
        fld.style.background = 'White';
		error = document.getElementById('emailalert').innerHTML = "";
    }
    return error;
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
	 
	 

//VALIDATE PASSWORD
function validatePassword(fld) {
    var error = "";
 //  var illegalChars = /[\W_]/; // allow only letters and numbers 
 	var caps = /[A-Z]/;
 
    if (fld.value == "" || (fld.value.length < 6) || (fld.value.length > 15) || caps.test(fld.value) == 0 ) {
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

if (false == enoughRegex.test(pwd.value)) {
strength.innerHTML = 'Password must contain a minimum of 6 characters';
} else if (strongRegex.test(pwd.value)) {
strength.innerHTML = '<span style="color:#fff;background-color:green;padding:5px;width: 93%;display:block;text-align: center;">Strong!</span>';
} else if (mediumRegex.test(pwd.value)) {
strength.innerHTML = '<span style="color:#fff;background-color:orange;padding:5px;width: 93%;display:block;text-align: center;">Medium!</span>';
} else {
strength.innerHTML = '<span style="color:#fff;background-color:red;padding:5px;width: 93%;display:block;text-align: center;">Weak!</span>';
}
}


//CHECK TELEPHONE

function validatePhone(fld) {
    var error = document.getElementById('telalert').innerHTML ="";
    var stripped = fld.value.replace(/[\(\)\.\-\ ]/g, '');    

   if (fld.value == "") {
        error = document.getElementById('telalert').innerHTML = "Enter a valid US Telephone Number.\n";
        fld.style.background = 'Yellow';
    } else if (isNaN(parseInt(stripped))) {
         error = document.getElementById('telalert').innerHTML = "Enter a valid US Telephone Number.\n";
        fld.style.background = 'Yellow';
    } else if (!(stripped.length == 10)) {
       error = document.getElementById('telalert').innerHTML = "Enter a valid US Telephone Number.\n";
        fld.style.background = 'Yellow';
    } else {
        fld.style.background = 'White';
		error = document.getElementById('telalert').innerHTML ="";
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

</script>




<div class="container">
<div class="signup">



<h1><?php the_field('pageheader'); ?></h1>

<div class="signupbox">
<?php the_content(); ?>


<?php $currentlang = get_bloginfo('language'); 

if($currentlang=="en-US"):?>
<form id="theForm" name="theForm" method="POST" action="<?php echo esc_url(get_template_directory_uri());; ?>/page-process-signup.php" onKeyPress="checkForm()" onMouseMove="checkForm()">
<?php else: ?>
<form id="theForm" name="theForm" method="POST" action="<?php echo esc_url(get_template_directory_uri());; ?>/page-process-signupsp.php" onKeyPress="checkForm()" onMouseMove="checkForm()">
<?php endif; ?>

<?php $currentlang = get_bloginfo('language'); 

if($currentlang=="en-US"):?>
<p>First Name</p>
<?php else: ?>
<p>Primer Nombre </p>
<?php endif; ?>
<p><input type="text" name="firstName"  id="firstName" onBlur="return validateFname(this)" onkeypress="return lettersOnly(event)"  ontouchstart="return lettersOnly(event)"></p>
<p class="alert" id="msgalert"></p> 


<?php $currentlang = get_bloginfo('language'); 

if($currentlang=="en-US"):?>

<p><label for="lastName">Last Name</label></p>
<?php else: ?>
<p><label for="lastName">Apellido</label></p>
<?php endif; ?>
<p><input type="text" name="lastName" id="lastName" onBlur="return validateLname(this)" onkeypress="return lettersOnly(event)" ></p>
<p class="alert" id="msgalert2"></p>


<?php $currentlang = get_bloginfo('language'); 

if($currentlang=="en-US"):?>
<p><label for="email">Email</label> </p>
<?php else: ?>
<p><label for="email">Correo Electr&oacute;nico </label> </p>
<?php endif; ?>
<p><input type="email" name="email" id="email" onBlur="return validateEmail(this)"></p>
<p class="alert" id="emailalert"></p>

<?php $currentlang = get_bloginfo('language'); 

if($currentlang=="en-US"):?>
<p><Label for="phone">Mobile</Label></p>
<?php else: ?>
<p><Label for="phone">Tel&eacute;fono</Label></p>
<?php endif; ?>
<p><input type="tel" name="telephone" id="telephone" onBlur="return validatePhone(this)"  onkeypress="return isNumberKey(event)" autocomplete="off" ></p>
<p class="alert" id="telalert"></p>


<?php $currentlang = get_bloginfo('language'); 

if($currentlang=="en-US"):?>
<p><label for="password">Password</label> <span style="font-size:14px;font-weight:300">(Please use 6 characters or more and at least one number or capital letter)</span></p>
<?php else: ?>
<p><label for="password">Contrase&ntilde;a</label> <span style="font-size:14px;font-weight:300">(Por favor utiliza 6 caracteres o mas, y cuando menos un n&uacute;mero, o  letra may&uacute;scula) </span></p>
<?php endif; ?>
<p><input name="password" id="password" size="35" maxlength="50" type="password" onBlur="return validatePassword(this)" ></p>
<span id="strength"></span>
<p class="alert" id="pswrdalert"></p>


<input type="hidden" name="type" value="free" >

<?php $currentlang = get_bloginfo('language'); 

if($currentlang=="en-US"):?>
 <input type='hidden' name='preferencesdefaultLanguage' value='en' >
<?php else: ?>
<input type='hidden' name='preferencesdefaultLanguage' value='es' >
<?php endif; ?>


<?php $currentlang = get_bloginfo('language'); 

if($currentlang=="en-US"):?>
<p class="legal"><input  type="checkbox" checked >Please send me updates via text message and email </p>
<?php else: ?>
<p class="legal"><input  type="checkbox" checked >Please send me updates via text message and email </p>
<?php endif; ?>


<?php $currentlang = get_bloginfo('language'); 

if($currentlang=="en-US"):?>
<p class="legal"><input type="checkbox"  onClick="validateDisc(this.form)" id="disc" checked>I agree to the YipTV Terms of Use and Privacy Policy</p>
<?php else: ?>
<p class="legal"><input type="checkbox"  onClick="validateDisc(this.form)" id="disc" checked>Convengo a los T&eacute;rminos de Uso y Pol&iacute;tica de Privacidad de YipTV</p>
<?php endif; ?>
<p class="alert" id="dscalert"></p>

</form>

<?php $currentlang = get_bloginfo('language'); 

if($currentlang=="en-US"):?>
<button class="noclick" id="submitbtn"   type="submit" form="theForm" onMouseOver="checkForm()" touchmove="checkForm()" >START MY FREE MEMBERSHIP</button>
<?php else: ?>
<button class="noclick" id="submitbtn"   type="submit" form="theForm" onMouseOver="checkForm()" touchmove="checkForm()">INICIA MI MEMBRES&iacute;A GRATIS </button>
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


<!-- MODAL -->
<?php if($currentlang=="en-US"):?>
<div id="dialog-message" title="Channel Lineup" style="background-color:#fff;">
<div class="closebtn"></div>
<?php else: ?>
<div id="dialog-message" title="Canales" style="background-color:#fff;">
<?php endif; ?>
<div id="modaltop" >


<?php if($currentlang=="en-US"):?>
<p><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/F.png" > FREE MEMBERSHIP</p>
<?php else: ?>
<p><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/F.png" > membres&iacute;a gratis</p>
<?php endif; ?>

<?php if($currentlang=="en-US"):?>
<p><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/7.png" > FREE FOR FIRST 7 DAYS</p>
<?php else: ?>
<p><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/7.png" > gratis por los primeros 7 dias</p>
<?php endif; ?>

<?php if($currentlang=="en-US"):?>
<p><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/Premium.png" > INCLUDED WITH PREMIUM MEMBERSHIP</p>
<?php else: ?>
<p><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/Premium.png" > membres&iacute;a premier</p>
<?php endif ?>
<br style="clear:left">
</div>
<div class="col">


<?php if($currentlang=="en-US"):?>
  <p><strong>Sports</strong></p>
  <?php else: ?>
   <p><strong>Deportes</strong></p>
  <?php endif; ?>
  
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/7-small.png" style="vertical-align:middle;margin-right:10px">beIN Sports</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/7-small.png" style="vertical-align:middle;margin-right:10px">beIN Sports &ntilde;</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/7-small.png" style="vertical-align:middle;margin-right:10px">TyC Sports</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/7-small.png" style="vertical-align:middle;margin-right:10px">PXTV Action LATAM</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">AYM Sports</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">LAS</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">HRTV</p>
<p></p>

<?php if($currentlang=="en-US"):?>
<p><strong>Kids</strong></p>
<?php else: ?>
<p><strong>Ni&ntilde;os</strong></p>
<?php endif; ?>

<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/F-small.png" style="vertical-align:middle;margin-right:10px">Smile of a Child</p>
<p></p>


<p><strong>General</strong></p>

<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">Bolivia TV</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">Canal Am&eacute;rica</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">Outdoor Sport Channel</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">Promovision</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">TV Chile</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">CBTV</p>
<p></p>

<?php if($currentlang=="en-US"):?>
<p><strong>News</strong></p>
<?php else: ?>
<p><strong>Noticias</strong></p>
<?php endif; ?>

<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">Canal Tiempo</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">CB24</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">Maya TV</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/F-small.png" style="vertical-align:middle;margin-right:10px">MeioNorte</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/F-small.png" style="vertical-align:middle;margin-right:10px">NTN24</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/F-small.png" style="vertical-align:middle;margin-right:10px">One America News</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/F-small.png" style="vertical-align:middle;margin-right:10px">RT Espa&ntilde;ol</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/F-small.png" style="vertical-align:middle;margin-right:10px">RT News</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/F-small.png" style="vertical-align:middle;margin-right:10px">Telesur</p>
</div>

<div class="col">
<?php if($currentlang=="en-US"):?>
<p><strong>Music</strong></p>
<?php else: ?>
<p><strong>Musica</strong></p>
<?php endif; ?>

<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">AZ Clic</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/F-small.png" style="vertical-align:middle;margin-right:10px">Clubbing TV</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">El Cantinazo</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/7-small.png" style="vertical-align:middle;margin-right:10px">Mi Gente TV</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/F-small.png" style="vertical-align:middle;margin-right:10px">Mi Musica</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">Mi Musica Romantica</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/F-small.png" style="vertical-align:middle;margin-right:10px">Mi Musica Tropical</p>
<!-- <p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">Nusic</p> -->
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">Video Rola</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/F-small.png" style="vertical-align:middle;margin-right:10px">JCTV</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">Tempo</p>
<p></p>

<?php if($currentlang=="en-US"):?>
<p><strong>Educational</strong></p>
<?php else: ?>
<p><strong>Educacional </strong></p>
<?php endif; ?>

<!--p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/F-small.png" style="vertical-align:middle;margin-right:10px">Yes</p-->
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">Zoom</p>
<p></p>

<?php if($currentlang=="en-US"):?>
<p><strong>Lifestyle</strong></p>
<?php else: ?>
<p><strong>Estilo de Vida </strong></p>
<?php endif; ?>

<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">Destinos TV</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">Men 7</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/F-small.png" style="vertical-align:middle;margin-right:10px">Trendy</p>
<p></p>

<?php if($currentlang=="en-US"):?>
<p><strong>Faith</strong></p>
<?php else: ?>
<p><strong>Fe</strong></p>
<?php endif; ?>

<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/F-small.png" style="vertical-align:middle;margin-right:10px">Enlace Juvenil</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/F-small.png" style="vertical-align:middle;margin-right:10px">TBN</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/F-small.png" style="vertical-align:middle;margin-right:10px">TBN Enlance</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">Tele Vid</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/F-small.png" style="vertical-align:middle;margin-right:10px">The Church Channel</p>
</div>

<div class="col">

<?php if($currentlang=="en-US"):?>
<p><strong>Entertainment</strong></p>
<?php else: ?>
<p><strong>Entretenimiento </strong></p>
<?php endif; ?>

<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/7-small.png" style="vertical-align:middle;margin-right:10px">Hola! TV</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">RCN Novelas</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/F-small.png" style="vertical-align:middle;margin-right:10px">Caribvision</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">Latele Novela</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/7-small.png" style="vertical-align:middle;margin-right:10px">Canal 52 MX</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">Mis Pel&iacute;culas</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">Films on Reel</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">TVC Latino</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/7-small.png" style="vertical-align:middle;margin-right:10px">TV Quisqueya</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">A 3 Series</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">Teleformula</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">Tele Pac&iacute;fico</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">Tele Medellin</p>
<!--p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">Tele Caribe</p-->
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">Tele Antioquia</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">JBN</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/F-small.png" style="vertical-align:middle;margin-right:10px">HITN</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">Cosmovisi&oacute;n</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">Canal Tro</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/F-small.png" style="vertical-align:middle;margin-right:10px">Canal Sur</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">Canal Antiestres</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/7-small.png" style="vertical-align:middle;margin-right:10px">Antena3</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">AZ Coraz&oacute;n</p>
<p><img src="<?php echo esc_url(get_template_directory_uri());; ?>/images/Premium-small.png" style="vertical-align:middle;margin-right:10px">Telemicro Internacional</p>
  </div>
  
  <div style="clear:left;padding:15px;color:#fff;text-align:center;font-size:24px;background-color:#2e095b">
  <?php if($currentlang=="en-US"):?>
  More Channels added all the time
  <?php else: ?>
  <?php endif; ?>
  </div>
</div>






<script type="text/javascript">

$( "#dialog-message" ).dialog({ 
	autoOpen: false, 
	modal:true, 
	width: 'auto', 
	height: 'auto', 
	maxWidth: 960,    
	responsive: true, 
	fluid: true, 
	draggable: false,
	buttons: {
        Close: function() {
          $( this ).dialog( "close" );
        }
      }
	 });



$( "#channels" ).click(function() {
	
	var position = $( "#dialog-message" ).dialog( "option", "position" );
	
  $( "#dialog-message" ).dialog( "open" );
  $( "#dialog-message" ).dialog( "option", "position", "top");
});

$( "#channels2" ).click(function() {
  $( "#dialog-message" ).dialog( "open" );
   $( "#dialog-message" ).dialog( "option", "position", "top");
});

$( "#channels3" ).click(function() {
  $( "#dialog-message" ).dialog( "open" );
   $( "#dialog-message" ).dialog( "option", "position", "top");
});




// run function on all dialog opens
$(document).on("dialogopen", ".ui-dialog", function (event, ui) {
    fluidDialog();
});

// remove window resize namespace
$(document).on("dialogclose", ".ui-dialog", function (event, ui) {
    $(window).off("resize.responsive");
}); 

function fluidDialog() {
    var $visible = $(".ui-dialog:visible");
    // each open dialog
    $visible.each(function () {
        var $this = $(this);
        var dialog = $this.find(".ui-dialog-content").data("dialog");
        // if fluid option == true
        if (dialog.options.maxWidth && dialog.options.width) {
            // fix maxWidth bug
            $this.css("max-width", dialog.options.maxWidth);
            //reposition dialog
            dialog.option("position", dialog.options.position);
        }

        if (dialog.options.fluid) {
            // namespace window resize
            $(window).on("resize.responsive", function () {
                var wWidth = $(window).width();
                // check window width against dialog width
                if (wWidth < dialog.options.maxWidth + 50) {
                    // keep dialog from filling entire screen
                    $this.css("width", "90%");
                    
                }
              //reposition dialog
              dialog.option("position", dialog.options.position);
            });
        }

    });
}

</script>


