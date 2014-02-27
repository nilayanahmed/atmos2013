<?php
require_once("./include/membersite_config.php");
include('connection.php');

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}

?>

<?php
$eventname=$_GET['name'];
$branch=$_GET['branch'];
$username=$fgmembersite->UserFullName();

//echo "<br/>".$eventname ."   ".$branch."   ".$username;

$idquery="SELECT event_name FROM eventregs
				where username='$username' and branch='$branch' and event_name='$eventname';"; 
	
	//echo $idquery;
	
	$result=mysql_query($idquery);
	
	if(mysql_num_rows($result) <= 0)
	{
	
		echo "Do you want to register for this event?";
		echo "<br/><button id='regevent'>Yes</button>";		
	}
	else
	{
		echo "You are already registered for this event";
		echo "<br/>Do you want to cancel your registration for the event ?";
		echo "<br/><br/><button id='unregevent'>Cancel Registration</button>";
	}
?>

