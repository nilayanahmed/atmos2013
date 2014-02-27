<?php
require_once("./include/membersite_config.php");
include('connection.php');

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}

?>

<head>
<title>ATMOS 2013 | BITS Pilani Hyderabad Campus</title>
<link rel="icon" 
      type="image/png" 
      href="img/favicon.ico">
<link href="./css/style.css" type="text/css" rel="Stylesheet">
<link rel="Stylesheet" type="text/css" href="css/evoslider.css" />
<link rel="Stylesheet" type="text/css" href="css/default/default.css" />   
<link href="easyaula.css" media="screen" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/default.css" />
<link rel="stylesheet" type="text/css" href="css/component.css" />
<link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css" />
<!--<link rel="stylesheet" type="text/css" href="css/modal.css">-->	
<style>td{padding: 2px 10px; } body{font-size: 1.4em;color: black;}</style>
</head>

<body>
<center style="margin-top:8%">
<div id="fg_membersite">
<form id="login">
<fieldset>
<legend>Your Registered Events</legend>
<?php
$username=$fgmembersite->UserFullName();
echo "<br/>Logged in as : $username <br/><br/>";
//echo "<br/>".$eventname ."   ".$branch."   ".$username;

$idquery="SELECT * FROM eventregs
				where username='$username';"; 
	
	//echo $idquery;
	
	$result=mysql_query($idquery);
	
	if(mysql_num_rows($result) <= 0)
	{
	
		echo "You havent registered for any events.?";
		
	}
	else
	{
		echo "<table style='margin:10px;'>";
		echo "<tr>";
		echo "<th style='padding-bottom:15px;'><b>Event Name</b></th>";
		echo "<th style='padding-bottom:15px;'><b>Branch</b></th>";
		echo "</tr>";
		while($row=mysql_fetch_array($result))
		{
			echo "<tr style='background-color:white;'>";
			echo "<td>".$row['event_name']."</td>";
			echo "<td>";
			if($row['branch']=="bio")
			{
				echo "Biology";
			}
			elseif($row['branch']=="chemical")
			{
				echo "Chemical Engineering";
			}
			elseif($row['branch']=="civil")
			{
				echo "Civil Engineering";
			}
			elseif($row['branch']=="computers")
			{
				echo "Computer Science";
			}
			elseif($row['branch']=="electronics")
			{
				echo "EEE/ECE/ENI";
			}
			elseif($row['branch']=="economics")
			{
				echo "Economics";
			}
			elseif($row['branch']=="headliner")
			{
				echo "Headliner Event";
			}
			elseif($row['branch']=="management")
			{
				echo "Management";
			}
			elseif($row['branch']=="maths")
			{
				echo "Mathematics";
			}
			elseif($row['branch']=="mechanical")
			{
				echo "Mechanical Engineering";
			}
			elseif($row['branch']=="pharmacy")
			{
				echo "Pharmacy";
			}
			elseif($row['branch']=="physics")
			{
				echo "Physics";
			}
			elseif($row['branch']=="headliner")
			{
				echo "Headliner Event";
			}

			echo "</td>";


			//echo "<td>".$row['branch']."</td>";


			echo "</tr>";
		}
		echo "</table>";
	}
	echo '<br><a href="./">Home</a><br><br>';
	echo '<a href="./change-pwd.php">Change Password</a>';
?>
</fieldset>
</form>
</div>
</center>
</body>