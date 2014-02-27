<?php
include('connection.php');
?>

<html>
<head>
    <script src="js/jquery-2.0.3.js"></script>
</head>

<body>
<font size='1' color='red'>*The buttons may not update properly for events with spaces in their name. To verify registration check <a href='viewregsctrl.php' target='_blank'>here</a></font> <br/><br/>
Enter atmos id : <input type="text" id="atmosid"></input>
<br/>
<div id='error'></div>
<br/>

<?php
$query="select * from events where name!='paper presentation' and name!='paper presentations'";
$result=mysql_query($query);

echo "<table border='1'>";
while($row=mysql_fetch_array($result))
{
	echo "<tr>";
	echo "<td>".$row['name']."</td>";
	echo "<td>".$row['branch']."</td>";
	echo "<td><button class='rb' id='".$row['name']."' value='".$row['branch']."'>Register</button></td>";
	echo "<td><button class='urb' id='".$row['name']."' value='".$row['branch']."'>Unregister</button></td>";
	echo "</tr>";
}
echo "</table>";


?>

<script>
$('.rb').click(function(){

if($('#atmosid').val()=='')
{
	$('#error').html("<font color='red'>atmos id is required</font>");
	return;
}

					
					var evname=$(this).attr('id');
					var evbranch=$(this).attr('value');
					
					var ajaxdata="";
									
					
					$.ajax({
					url:'controlsajax.php?atmosid='+$('#atmosid').val()+'&name='+evname+'&branch='+evbranch,
					success:function(result){
						//alert(result);
						ajaxdata=result;
					
					},
					async:false
					})
					
			$(this).html(ajaxdata);
			$('#'+evname+'.urb').html("Unregister");
	
				
					
					
});
$('.urb').click(function(){

if($('#atmosid').val()=='')
{
	$('#error').html("<font color='red'>atmos id is required</font>");
	return;
}

var evname=$(this).attr('id');
					var evbranch=$(this).attr('value');
					
					var ajaxdata="";
									
					
					$.ajax({
					url:'controlsunreg.php?atmosid='+$('#atmosid').val()+'&name='+evname+'&branch='+evbranch,
					success:function(result){
						//alert(result);
						ajaxdata=result;
					
					},
					async:false
					})
					
			$(this).html(ajaxdata);
			$('#'+evname+'.rb').html("Register");
	
					
});

</script>

</body>

</html>
