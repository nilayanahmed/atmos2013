<?php
include('connection.php');

$atmosid=$_GET['atmosid'];
$ename=$_GET['name'];
$branch=$_GET['branch'];

$query="select username from regtable where atmos_id='$atmosid'";
$result=mysql_query($query);

$username;
while($row = mysql_fetch_array($result))
{
	$username=$row['username'];
}

$query="select * from eventregs where username='$username' and event_name='$ename' and branch='$branch'";
//echo $query;
$result=mysql_query($query);

if(mysql_num_rows($result)==0)
{
	echo "Not registered";
	exit;
}

$query="delete from eventregs where username='$username' and event_name='$ename' and branch='$branch'";
$result=mysql_query($query);

if($result)
echo "Unregistered";
else
echo "Error";


?>
