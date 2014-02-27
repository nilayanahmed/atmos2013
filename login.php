<?PHP
require_once("./include/membersite_config.php");

if(isset($_POST['submitted']))
{
   if($fgmembersite->Login())
   {
        $fgmembersite->RedirectToURL("./");
   }
}

?>

<head>
<title>ATMOS 2013 | BITS Pilani Hyderabad Campus</title>
<link href="./css/style.css" type="text/css" rel="Stylesheet">
<link rel="Stylesheet" type="text/css" href="css/evoslider.css" />
<link rel="Stylesheet" type="text/css" href="css/default/default.css" />   
<link href="easyaula.css" media="screen" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/default.css" />
<link rel="stylesheet" type="text/css" href="css/component.css" />
<!--<link rel="stylesheet" type="text/css" href="css/modal.css">-->	

<!--styles related to login-->
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Login</title>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css" />
      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
<!--styles related to login-->
	<style>td{padding: 2px 10px; } body{font-size: 1.4em;color: black;}
		.container{
			position:relative;
			width:auto;
			margin:0 auto;
			padding:0
		}

	</style>
</head>

<body>
<center style="margin-top:8%">


<!--form.php-->

<!-- Form Code Start -->
<div id='fg_membersite'>
<form id='login' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>

<fieldset >
<legend>Login</legend>
<div class="row-fluid">
  <div class="span4 offset2">
      <img src="./img/logos/atmos/atmos_logoCrop.png">
  </div>
  <div class="span5">

      <input type='hidden' name='submitted' id='submitted' value='1'/>


      <div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
      <div class='container'>
          <label for='username' >User Name:</label><br/>
          <input type='text' name='username' id='username' value='<?php echo $fgmembersite->SafeDisplay('username') ?>' maxlength="50" style='font-size:1ex;'/><br/>
          <span id='login_username_errorloc' class='error'></span>
      </div>
      <div class='container'>
          <label for='password' >Password:</label><br/>
          <input type='password' name='password' id='password' maxlength="50" style='font-size:1ex;' /><br/>
          <span id='login_password_errorloc' class='error'></span>
      </div>

      <div class='container' style='font-size:1ex;'>
          <input type='submit' name='Submit' value='Submit' />
      </div>
      <div class='short_explanation'><a href='reset-pwd-req.php'>Forgot Password?</a></div><br>
      <div class='short_explanation'><a href='./register.php'><h2>New User? Register!</h2></a></div>
  </div>
</fieldset>
</form>
<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("login");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();

    frmvalidator.addValidation("username","req","Please provide your username");
    
    frmvalidator.addValidation("password","req","Please provide the password");

// ]]>
</script>
</div>

<!--form.php-->
</center>
</body>