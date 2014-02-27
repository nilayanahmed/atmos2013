<?php

$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "dbase";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");

/*
$query="select * from regtable where id_user>911";
$result=mysql_query($query);

$count=1000;

echo "<table border='1'>";
while($row=mysql_fetch_array($result))
{

	$id='atmos13'.$count;
	//echo $id."<br/>";
	$count++;
	
	$update ="update regtable set atmos_id='$id' where id_user='".$row['id_user']."'";
	//echo $update."<br/>";
	mysql_query($update) or die(mysql_error());
	

	echo "<tr>";
	echo "<td>".$row['id_user']."</td>";
	echo "<td>".$row['username']."</td>";
	echo "<td>".$row['atmos_id']."</td>";
	echo "</tr>";

	
}
echo "</table>";
*/

$idquery="SELECT atmos_id FROM regtable
				ORDER BY id_user DESC
				LIMIT 1;"; 
	
			$result=mysql_query($idquery);
			
			$lastid;
			
			while($row = mysql_fetch_array($result))
			{
				$lastid=$row[atmos_id];
			}
			
			
			$lastid=substr($lastid,7);
			
			echo $lastid."<br/>";
	
			$currid=intval($lastid)+1;
			
			$currid="atmos13". $currid;
			
			echo $currid;



mysql_close();
?>