<head>
<title>ATMOS 2013 | BITS Pilani Hyderabad Campus</title>
<link href="./css/style.css" type="text/css" rel="Stylesheet">
<link rel="Stylesheet" type="text/css" href="css/evoslider.css" />
<link rel="Stylesheet" type="text/css" href="css/default/default.css" />   
<link href="easyaula.css" media="screen" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/default.css" />
<link rel="stylesheet" type="text/css" href="css/component.css" />
<!--<link rel="stylesheet" type="text/css" href="css/modal.css">-->	

<!--styles related to login-home-->
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Home page</title>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">
<!--styles related to login-home-->
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

<?php
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}

?>
</head>
<body>
<div id='fg_membersite_content'>
<br/>
<h2>Home Page</h2>
<br/>
Welcome back <?php echo $fgmembersite->UserFullName(); ?>!
<br/>
<p><a href='change-pwd.php'>Change password</a></p>

<p><a href='access-controlled.php'>A sample 'members-only' page</a></p>
<br><br>
<p><a href='logout.php'>Logout</a></p>
</div>

<!--login-home.php-->
</div>
</div>
</div>
</div>
</div>
</center>
</body>