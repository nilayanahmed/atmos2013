<?php

include('connection.php');

	$eventname=$_GET['eventname'];
	
	if(strcasecmp($eventname,'')==0)
	{
		echo "event name cannot be blank";
		exit;
	}
	
	$query="SELECT DISTINCT name,eventregs.username,event_name,atmos_id FROM eventregs,regtable where event_name='$eventname'
	and eventregs.username=regtable.username and regtable.username!='admin' and regtable.username!='taina' and regtable.username!='kai' and regtable.username!='sid'
	";

	$result = mysql_query($query) or die(mysql_error());

	if($result && mysql_num_rows($result)>0)
	{
	
	echo "<table border='1'>";
	echo "<th>Name</th>";
	echo "<th>Atmos ID</th>";
	echo "<th>Username</th>";
	echo "<th>Eventname</th>";
	
	while($row = mysql_fetch_array($result))
	{
		echo "<tr>";
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['atmos_id']."</td>";
		echo "<td>".$row['username']."</td>";
		echo "<td>".$row['event_name']."</td>";
		echo "<tr/>";
		
	}	

	echo "</table>";
	}
	else
	{
		echo "Requested data not found. ";
	}
?>