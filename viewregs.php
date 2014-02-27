<html>
<head>
<script src="js/jquery-2.0.3.js"></script>
<head>

<body>
enter event name : 
<input type='text' id='event'></input>
<br/>
<button id='submit'>Submit</button>
<br/><br/>
<div id='result'></div>
</body>

<script>
$('#submit').click(function()
{
var data = 
					{
						"eventname" : $('#event').val()					
						
					};
					
					
					$.get("viewregsajax.php",data,function(ajax)
					{
						$('#result').html(ajax);
					});	
});
</script>


</html>