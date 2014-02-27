<?php
//echo "ajax jquery :) :D";

include('connection.php');

	$result = mysql_query("SELECT * FROM events where branch='".$_GET['branch']."'");

	$json=array();
	
	
	while($row = mysql_fetch_array($result))
	{
		$json[]=$row;
	}	

	echo json_encode($json);
	


?>