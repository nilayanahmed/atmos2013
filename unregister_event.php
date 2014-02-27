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

$idquery="delete from eventregs where username='$username' and event_name='$eventname' and branch='$branch'"; 
//echo $idquery;
$result=mysql_query($idquery);

if(strcasecmp($eventname,'Codewars')==0)
{
	$query="delete from codewars where username='$username'"; 
	$result=mysql_query($query);
	$query="delete from eventregs where username='$username' and event_name='$eventname'"; 
	$result=mysql_query($query);
}

if($result)
{
	echo "You have successfully cancelled your registration for $eventname";
}
else
{
	echo "Sorry, your registration couldn't be cancelled.<br/>Try Again or contact the event coordinator.";
}
?>

