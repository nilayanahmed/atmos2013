<?php
//echo "ajax jquery :) :D";

include('connection.php');

	
	$query="SELECT * FROM events where name='".$_GET['name']."'";

	$result = mysql_query($query);

	$json=array();
	
	
	while($row = mysql_fetch_array($result))
	{
		$json=$row;
		
	}	

	echo json_encode($json);

	

?>