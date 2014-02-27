<?php
include('connection.php');

$atmosid=$_GET['atmosid'];

$query="select username from regtable where atmos_id='$atmosid'";
$result=mysql_query($query);

if(mysql_num_rows($result)==0)
{
   echo "No such user";
exit;
}

$username;
while($row = mysql_fetch_array($result))
{
	$username=$row['username'];
}


$query="select * from eventregs where username='$username'";
$result=mysql_query($query);

echo "<table border='1'>";
while($row=mysql_fetch_array($result))
{
	echo "<tr>";
	echo "<td>".$row['event_name']."</td>";
	echo "<td>".$row['branch']."</td>";
	echo "</tr>";
}
echo "</table>";


?>