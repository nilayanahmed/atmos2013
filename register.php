<head>
<title>ATMOS 2013 | BITS Pilani Hyderabad Campus</title>
<link href="./css/style.css" type="text/css" rel="Stylesheet">
<link rel="Stylesheet" type="text/css" href="css/evoslider.css" />
<link rel="Stylesheet" type="text/css" href="css/default/default.css" />   
<link href="easyaula.css" media="screen" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/default.css" />
<link rel="stylesheet" type="text/css" href="css/component.css" />
<!--<link rel="stylesheet" type="text/css" href="css/modal.css">-->	

<!--styles related to register-->
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <title>Contact us</title>
    <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css" />
    <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
    <link rel="STYLESHEET" type="text/css" href="style/pwdwidget.css" />
    <script src="scripts/pwdwidget.js" type="text/javascript"></script>      
<!--styles related to register-->
	<style>td{padding: 2px 10px; } body{font-size: 1em;color: black;}
		.container{
			position:relative;
			width:auto;
			margin:0 auto;
			padding:0
		}

	</style>
</head>

<body>
<center style="margin-top:3%">
<!--logout.php-->
<?PHP
require_once("./include/membersite_config.php");

if(isset($_POST['submitted']))
{
   if($fgmembersite->RegisterUser())
   {
        $fgmembersite->RedirectToURL("thank-you.html");
   }
}

?>
<!-- Form Code Start -->
<div id='fg_membersite'>
<form id='register' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
<fieldset >
<legend>Register</legend>
<div class="row-fluid">
  <div class="span4 offset2">
      <img src="./img/logos/atmos/atmos_logoCrop.png" style="margin-top:15%">
  </div>
  <div class="span5">

<input type='hidden' name='submitted' id='submitted' value='1'/>

<div class='short_explanation'>* required fields</div>
<input type='text'  style="margin-top:-5px" class='spmhidip' name='<?php echo $fgmembersite->GetSpamTrapInputName(); ?>' />

<div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
<div class='container'>
    <label for='name' style="margin-top:-5px"  >Your Full Name*: </label><br/>
    <input type='text'style="margin-top:-5px"  name='name' id='name' value='<?php echo $fgmembersite->SafeDisplay('name') ?>' maxlength="50" /><br/>
    <span id='register_name_errorloc' class='error'></span>
</div>
<div class='container'style="margin-top:-5px" >
    <label for='email' style="margin-top:-5px" >Email Address*:</label><br/>
    <input type='text' style="margin-top:-5px" name='email' id='email' value='<?php echo $fgmembersite->SafeDisplay('email') ?>' maxlength="50" /><br/>
    <span id='register_email_errorloc' class='error'></span>
</div>
<div class='container'style="margin-top:-5px" >
    <label for='phone'style="margin-top:-5px"  >Contact Number*:</label><br/>
    <input type='text' style="margin-top:-5px" name='phone' id='phone' value='<?php echo $fgmembersite->SafeDisplay('phone') ?>' maxlength="50" /><br/>
    <span id='register_phone_errorloc' class='error'></span>
</div>
<div class='container'style="margin-top:-5px" >
    <label for='college'style="margin-top:-5px"  >College*:</label><br/>
    <input type='text' style="margin-top:-5px" name='college' id='college' value='<?php echo $fgmembersite->SafeDisplay('college') ?>' maxlength="50" /><br/>
    <span id='register_college_errorloc' class='error'></span>
</div>
<div class='container'style="margin-top:-5px" >
    <label for='city' style="margin-top:-5px" >City*:</label><br/>
    <input type='text'style="margin-top:-5px"  name='city' id='city' value='<?php echo $fgmembersite->SafeDisplay('city') ?>' maxlength="50" /><br/>
    <span id='register_city_errorloc' class='error'></span>
</div>
<div class='container'style="margin-top:-5px" >
    <label for='username' style="margin-top:-5px" >User Name*:</label><br/>
    <input type='text' style="margin-top:-5px" name='username' id='username' value='<?php echo $fgmembersite->SafeDisplay('username') ?>' maxlength="50" /><br/>
    <span id='register_username_errorloc' class='error'></span>
</div>
<div class='container' style="margin-top:-5px" style='height:80px;'>
    <label for='password' style="margin-top:-5px" >Password*:</label><br/>
    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
    <noscript>
    <input type='password' name='password' id='password' maxlength="50" />
    </noscript>    
    <div id='register_password_errorloc' class='error' style='clear:both'></div>
</div>

<div class='container'>
    <input type='submit' name='Submit' value='Submit' />
</div>
</div>
</fieldset>
</form>
<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<script type='text/javascript'>
// <![CDATA[
    var pwdwidget = new PasswordWidget('thepwddiv','password');
    pwdwidget.MakePWDWidget();
    
    var frmvalidator  = new Validator("register");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name","req","Please provide your name");

    frmvalidator.addValidation("email","req","Please provide your email address");

    frmvalidator.addValidation("email","email","Please provide a valid email address");
	
	frmvalidator.addValidation("phone","req","Please provide a contact number");
	frmvalidator.addValidation("college","req","Please provide college name");
	frmvalidator.addValidation("city","req","Please provide city");	
	
    frmvalidator.addValidation("username","req","Please provide a username");
	   
    frmvalidator.addValidation("password","req","Please provide a password");

// ]]>
</script>

<!--logout.php-->
</center>
</body>