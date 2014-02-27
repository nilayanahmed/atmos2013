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
      <title>Reset Password Request</title>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css" />
      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
<!--styles related to register-->

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
<center>
<div style="background-image:url('atmos_logoCrop2.png');background-repeat:no-repeat;background-position:center center;width:100%;height:100%;">
<div style="background-color:black;width:100%;height:100%;opacity:0.95;">
<div style="
">

<div style="opacity:0.9;background-color:white;border-radius:20px;background-image:url('atmos_logoCrop2.png');background-repeat:no-repeat;background-position:center center;float:left;width:400px;max-height:600px;    position: absolute;
	top:0;
	bottom: 0;
	left: 0;
	right: 0;
	margin:auto;"> 
	
<div style="position:absolute;top:0;bottom:0;left:0;right:0;margin:auto;background-color:#87BE99;max-height:500px;width:320px;border-radius:10px;">	


<!--reset-pwd-req.php-->
<?PHP
require_once("./include/membersite_config.php");

$emailsent = false;
if(isset($_POST['submitted']))
{
   if($fgmembersite->EmailResetPasswordLink())
   {
        $fgmembersite->RedirectToURL("reset-pwd-link-sent.html");
        exit;
   }
}

?>

<!-- Form Code Start -->
<div id='fg_membersite'>
<form id='resetreq' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
<br/><br/>
<fieldset >
<legend>Reset Password</legend>

<input type='hidden' name='submitted' id='submitted' value='1'/>

<div class='short_explanation'>* required fields</div>

<div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
<div class='container'>
    <label for='username' >Your Email*:</label><br/>
    <input type='text' name='email' id='email' value='<?php echo $fgmembersite->SafeDisplay('email') ?>' maxlength="50" style="font-size:1ex;"/><br/>
    <span id='resetreq_email_errorloc' class='error'></span>
</div>
<div class='short_explanation'>A link to reset your password will be sent to the email address</div>
<div class='container'>
    <input type='submit' name='Submit' value='Submit' style="font-size:1.2ex;"/>
</div>

</fieldset>
</form>
<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("resetreq");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();

    frmvalidator.addValidation("email","req","Please provide the email address used to sign-up");
    frmvalidator.addValidation("email","email","Please provide the email address used to sign-up");

// ]]>
</script>

</div>

<!--reset-pwd-req.php-->

</div>
</div>
</div>
</div>
</div>
</center>
</body>