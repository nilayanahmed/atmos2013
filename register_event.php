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

if(strcasecmp($eventname,'Codewars')!=0)
{
$idquery="SELECT event_name FROM eventregs
				where username='$username' and branch='$branch' and event_name='$eventname';"; 
	
	//echo $idquery;
	
	$result=mysql_query($idquery);
	
	if(mysql_num_rows($result) <= 0)
	{
	
			$lastid;
			
			while($row = mysql_fetch_array($result))
			{
				$lastid=$row[atmos_id];
			}


			$query="insert into eventregs(username,event_name,branch) values('$username','$eventname','$branch')";

			$result=mysql_query($query);
			if(!$result)
				echo "Registration Failed:(";
			else
				echo "You have registered for $eventname successfully :)";
	
	}
	else
	{
		echo "You are already registered for this event";
		echo "<br/>Do you want to cancel your registration for the event ?";
		echo "<br/><br/><button id='unregevent'>Cancel Registration</button>";
	}
}
else if(strcasecmp($eventname,'Codewars')==0)
{
/*
	echo "Please enter your codechef handle : <input type='text' id='handle'></input>";
	echo "<button id='codewarssubmit'>Submit</button>";
	*/
	
	echo "continue registration <a href='https://docs.google.com/forms/d/1Ux287oU14-DfAGkWb2mTu0_mg-taMIl4Hu_CohLf2Go/viewform'>here</a>";
}	
?>

