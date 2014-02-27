<?php
require_once("./include/membersite_config.php");
include('connection.php');

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}

?>
<html>
<head>
<script src="js/jquery-2.0.3.js"></script>
</head>
<body>
<?php
echo "Your Codechef handle : <input type='text' id='handle'></input>";
echo "<br/><button id='submit'><a>Submit</button><br/>";
echo "<div id='output'></div>";
?>

<script>
$('#submit').click(function()
{
	//alert($('#handle').val());
	var data = 
		{
			"handle" : $('#handle').val()
		};
									
		if($('#handle').val().length>0)
		{
		$.get("codewars_submit.php",data,function(ajax)
		{
			$('#output').text(ajax);
		});
        }
		else
			{
				$('#output').text("Handle cannot be empty..");
			}
});
</script>
</body>
</html>