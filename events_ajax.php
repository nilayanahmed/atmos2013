 <?php
  
  include('connection.php');
	
	$query="SELECT * FROM events where branch='".$_GET['branch']."'";
	$result = mysql_query($query);

	while($row = mysql_fetch_array($result))
	{
	
		$desc=implode(' ', array_slice(explode(' ', $row['desc']), 0, 30));
	
	 echo
		 "<li id='".$row['name']."' style='display: block; visibility: visible;' class='one-third column'>
    <a id='aid'  class='color-negocios' >
    
    <div class='groupClassHomeDescriptionWrapper'>
        <div class='groupClassHomeDescription'>"
        .$desc."
		 
        </div>
		
      <span id='spanid' class='homeGroupClassLevel'>
		
           <p id='para'>
           <input type='button' value='more' style='float:right;margin-left:35px;' id='more' class='md-trigger' data-modal='modal-9' />
				
		   </p>
      </span>
      <span class='date'><strong></strong></span>
    </div>
  </a>
  <a >
    <div class='events_name' style={'margin_top:-30px;'}>
        <span>
        <p style='padding-left:40px;'><em>".$row['name']."</em></p></span>
    </div>
  </a>
  <img alt='Image not present' src='images/".$row['image']."'>

  </li>"	;

	}	


	
mysql_close();
  
  
     ?>