<?php
require_once("./include/membersite_config.php");
include('connection.php');

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}

$username=$fgmembersite->UserFullName();
$handle=$_GET['handle'];

$select="select * from codewars where username='$username'";
$result=mysql_query($select);

if(mysql_num_rows($result) == 0)
{
$query="insert into codewars(username,handle) values('$username','$handle')";
$result=mysql_query($query);
$query="insert into eventregs(username,event_name,branch) values('$username','Codewars','computers')";
$result=mysql_query($query);
$query="insert into eventregs(username,event_name,branch) values('$username','Codewars','headliner')";
$result=mysql_query($query);
if($result)
{
	echo "You have registered for CodeWars successfully.";
}
else
{
	echo "registration failed...please try again";
}
}
else if(mysql_num_rows($result) > 0)
{
	echo "You have already registered...";
}
else if(!$result)
{
	echo "registration failed...please try again";
}


?>