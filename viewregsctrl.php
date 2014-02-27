<html>
<head>
    <script src="js/jquery-2.0.3.js"></script>
</head>

<body>

Enter atmos id : <input type="text" id="atmosid"></input>
<br/>
<div id='error'></div>

<button id='submit'>Submit</button>
<div id='ajaxdiv'></div>

<script>
$('#submit').click(function(){
var data = 
					{
						"atmosid" :$('#atmosid').val()
											
					};
					
					
					$.get("viewregsctrlajax.php",data,function(ajax)
					{
						$('#ajaxdiv').html(ajax);
					});	
					
			});
</script>					


</html>

