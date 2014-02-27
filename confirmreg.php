<?php
require_once("./include/membersite_config.php");

if(isset($_GET['code']))
{
   if($fgmembersite->ConfirmUser())
   {
        $fgmembersite->RedirectToURL("thank-you-regd.html");
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

<!--styles related to confirmreg-->
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Confirm registration</title>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css" />
      <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
<!--styles related to confirmreg-->
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

<br/>
<h2><b>Confirm registration</b></h2>
<br/>
<p>
Please enter the confirmation code in the box below
</p>

<!-- Form Code Start -->
<div id='fg_membersite'>
<form id='confirm' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='get' accept-charset='UTF-8'>
<br/>
<div class='short_explanation'>* required fields</div>
<div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
<div class='container'>
    <label for='code' >Confirmation Code:* </label><br/>
    <input type='text' name='code' id='code' maxlength="50" style="font-size:1.2ex;height:3em;" /><br/>
    <span id='register_code_errorloc' class='error'></span>
</div>
<div class='container' style="font-size:1ex">
    <input type='submit' name='Submit' value='Submit' />
</div>

</form>
<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("confirm");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("code","req","Please enter the confirmation code");

// ]]>
</script>
</div>

<!--confirmreg.php-->
</div>
</div>
</div>
</div>
</div>
</center>
</body>