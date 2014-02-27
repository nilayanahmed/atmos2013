<?php
require_once("./include/membersite_config.php");

$loginvar="true";

if(!$fgmembersite->CheckLogin())
{	
	$loginvar="false";
}

?>

<!DOCTYPE html>
<html lang="en" class="no-js">
<head>

	<title>ATMOS 2013 | BITS Pilani Hyderabad Campus</title>
    <link rel="icon" 
      type="image/png" 
      href="img/favicon.ico">

    <!--<link href="./css/back.css" type="text/css" rel="Stylesheet">-->
    <link href="./css/style.css" type="text/css" rel="Stylesheet">
    <link rel="Stylesheet" type="text/css" href="css/evoslider.css" />
    <link rel="Stylesheet" type="text/css" href="css/default/default.css" />   
    
    <script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-43211422-1', 'bits-atmos.org');
		  ga('send', 'pageview');

	</script>

    <script src="js/jquery-2.0.3.js"></script>
    <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script><!--required for slider-->
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/jquery.evoslider.lite-1.1.0.js"></script> 
	


	<!-- for the event groups-->
	<link href="easyaula.css" media="screen" rel="stylesheet" type="text/css">
	
	<link rel="stylesheet" type="text/css" href="css/default.css" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<script src="js/modernizr.custom.js"></script>
	<script src="js/tab.js"></script>
	<link rel="stylesheet" type="text/css" href="css/modal.css">	
	
	<style>
	#text
	{
		width:960px;
		background-color:rgba(0,0,0,0.1);
		margin:0 auto;
		margin-bottom:30px;
	}
	#pane1,#pane2,#pane3,#pane4
	{
		height:200px;
	}
	</style>
	
</head>
	
<body id="bd" style="background-image:url('img/seam3.jpg');background-repeat:repeat;" >

<div style="width:100%; /*background-color:#165341*/;"><br><br>
	<div style="float:left;width:54%;margin-left:4%;margin-top:3%"
	
			<a href="home.html" style="cursor:pointer;"><img src="img/logos/atmos/atmos_logo_black_crop.png"></a>

	</div>
	<div style="float:right;width:40%;margin-top:-0.5%">
			<img src="img/robotic_hand.png">
	</div>
	
</div>

<div style="min-height:30px;
            max-height:30px;
            width:100%;
            background-color:#383838;
            font-size:20px;
            margin-top:18%	">
    <div class="row-fluid">
        <!--<div class="span7">M
        </div>-->
        <div class="span2 offset1">
            <p style="color:white;">
            </p>
        </div>
        <div class="span2 offset3">
            <p style="color:white;">
                <a class="glow" href="./contact.html">Contact Us</a>
            </p>
        </div>
        <?php
				if ($loginvar=="false") {
				    echo '<div class="span1 offset1"><p style="color:white;">
                				<a class="glow" href="./login.php">Login</a></p>
                		  </div>

                		  <div class="span1"><p style="color:white;">
                				<a class="glow" href="./register.php">Register</a></p>
                		  </div>'



                		  ;
				}
				else {
				    echo '<div class="span2"><p style="color:white;">
                				<a class="glow" href="./viewRegEvents.php">My Account</a></p>
                		  </div>

                	<div class="span1">
	                <p style="color:white;">
	                <a class="glow" href="./logout.php"> Logout</a></p>
	                </div>';
				}
			?>
        <div class="span1" style="margin-top:2px;">
            <!-- Make sure these links open in new tab-->
            <a href="https://www.facebook.com/bits.atmos" target="_blank"><img src="./img/header/fb.png"></a>
            <a href="http://atmos.quora.com/" target="_blank"><img src="./img/header/quora.png"></a>
        </div>
        
    </div>
</div>

<br><br>
<div class="row-fluid">
<div class="span8 offset2">
    <em><b><h4>UPDATE: Last date for paper presentations has been extended to 30th September, 2013. In case of any confusion about the submission process or the topics, contact us at techteam@bits-atmos.org</h4></b></em>
</div>
</div><br><br>
<div class="row-fluid" style="margin-top:0px">
  <div class="span12">
    <div id="mySlider" class="evoslider default" style="margin-top:0"> <!-- start evo slider -->

    <dl>
    
      <dt id="dt1" class="text-yellow">headline events</dt>
      <dd id="ddt1" style="background-color:rgb(252,175,23)">
	  
	  <a id="Windows 8 Appfest" href="#" class="headline">
          	<div class="blocks" >            
	            <img  src="./img/icons/appfest.png" >
	            <p  class="blocks_desc">Windows 8 Appfest</p>
          	</div>
          </a>
		  
		<a id="bitsmun" href="#" class="headline">
          	<div class="blocks" >            
	            <img  src="./img/icons/bitsmun.png" >
	            <p  class="blocks_desc">BITS MUN</p>
          	</div>
          </a>

                <a id="codewars" href="#" class="headline">
          	<div class="blocks" >            
	            <img  src="./img/icons/computers.png" >
	            <p  class="blocks_desc">Codewars</p>
          	</div>
          </a>
		<a id="enigma" href="#" class="headline">
          	<div class="blocks" >            
	            <img  src="./img/icons/enigma.png" >
	            <p  class="blocks_desc">Enigma</p>
          	</div>
          </a>
        
		<a id="groundreality" href="#" class="headline">
          	<div class="blocks" >            
	            <img  src="./img/icons/ground_reality.png" >
	            <p  class="blocks_desc" style="overflow:visible;max-height:5px">GroundReality</p>
          	</div>
          </a>
		  
		<a id="hackthebox" href="#" class="headline">
          	<div class="blocks" >            
	            <img  src="./img/icons/hackthebox.png" >
	            <p  class="blocks_desc">Hack The Box</p>
          	</div>
          </a>
		  
		<a id="minigp" href="#" class="headline">
          	<div class="blocks" >            
	            <img  src="./img/icons/mini_gp.png" >
	            <p  class="blocks_desc">MiniGP</p>
          	</div>
          </a>
		  
		<a id="robowars" href="#" class="headline">
          	<div class="blocks" >            
	            <img  src="./img/icons/robo.png" >
	            <p  class="blocks_desc">Robo Wars</p>
          	</div>
          </a>

                <a id="Stock Market Challenge" href="#" class="headline">
          	<div class="blocks" >            
	            <img  src="./img/icons/economics.png" >
	            <p  class="blocks_desc">Stock Market Challenge</p>
          	</div>
          </a>
		  
		<a id="ideathon" href="#" class="headline">
          	<div class="blocks" >            
	            <img  src="./img/icons/ideathon.png" >
	            <p  class="blocks_desc">Ideathon</p>
          	</div>
          </a>

            
		<a id="Cubing ATMOSphere" href="#" class="headline">
          	<div class="blocks" style >            
	            <img  src="./img/icons/graycube.png" style="margin-top:10px">
	            <p  class="blocks_desc" style="margin-top:1px">Cubing ATMOSphere</p>
          	</div>
          </a>

      </dd>
  
      <dt id="dt2" class="text-blue">events</dt>
      <dd id="ddt2" style="background-color:rgb(117,195,232)">
	
			<a id="bio" href="./events/biology" class="branch">
		  <div class="blocks">
            <img  src="./img/icons/bio.png">
            <p  class="blocks_desc">Biology</p>
          </div></a>


			<a id="chemical" href="./events/chemical" class="branch">
          	<div class="blocks" >            
	            <img  src="./img/icons/chemical.png" >
	            <p  class="blocks_desc">Chemical</p>
          	</div>
          </a>

          <a id="chemistry" href="./events/chemistry" class="branch" >
	          <div class="blocks">
	            <img  src="./img/icons/chemistry.png">
	            <p class="blocks_desc">Chemistry</p>
	          </div>
	      </a>

	      <a id="civil" href="./events/civil" class="branch">
		  <div class="blocks">
            <img  src="./img/icons/civil.png">
            <p  class="blocks_desc">Civil</p>
          </div></a>

          <a id="computers" href="./events/computers" class="branch">
	          <div class="blocks">
	            <img  src="./img/icons/computers.png">
	            <p  class="blocks_desc">Computers</p>
	          </div>
	      </a>

          <a id="economics" href="./events/economics" class="branch">
		  <div class="blocks">
            <img src="./img/icons/economics.png">
            <p  class="blocks_desc">Economics</p>
          </div></a>


          <a id="electronics" href="./events/electronics" class="branch">
		  <div class="blocks">
            <img  src="./img/icons/electronics.png">
            <p  class="blocks_desc">Electronics and Robotics</p>
          </div></a>

     
          <a id="management" href="./events/management" class="branch">
		  <div class="blocks">
            <img  src="./img/icons/management.png">
            <p  class="blocks_desc">Management</p>
          </div></a>

          <a id="maths" href="./events/maths" class="branch">
		  <div class="blocks">
            <img  src="./img/icons/math.png">
            <p  class="blocks_desc">Mathematics</p>
          </div></a>

          <a id="mechanical" href="./events/mechanical" class="branch">
		  <div class="blocks">
            <img  src="./img/icons/mechanical.png">
            <p  class="blocks_desc">Mechanical</p>
          </div></a>


          <a id="pharmacy" href="./events/pharmacy" class="branch">
		  <div class="blocks">
            <img src="./img/icons/pharmacy.png">
            <p  class="blocks_desc">Pharmacy</p>
          </div></a>


          <a id="physics" href="./events/physics" class="branch">
		  <div class="blocks">
            <img  src="./img/icons/physics.png">
            <p  class="blocks_desc">Physics</p>
          </div></a>    
                       
      </dd>
  
      <dt id="dt3" class="text-red">workshops and talks</dt>
      <dd id="ddt3" style="background-color:rgb(241,78,86)"> 

	  <a id="raspberry pi workshop" href="" class="workshop">
		  <div class="blocks">
            <img src="./img/icons/pharmacy.png">
            <p  class="blocks_desc">Raspberry Pi Workshop</p>
          </div></a>
           
      </dd>
  
      
        
    </dl>

</div> <!-- end evo slider -->

  </div>
</div>
<br><br>
<div class="row-fluid" id="headevents" style="background-color: rgba(0,0,0,0.1);">
	<div class="span6 offset2" style="min-width:930px;padding:20px;font:helvetica">
		<div ><h1 id="headname" style=""></h1></div>
		<div class="tabbable">
			<ul class="nav nav-tabs">
				<li class="active"><a id="tab1" href="#pane1" data-toggle="tab"><h2>Description</h2></a></li>
				<li><a id="tab2" href="#pane2" data-toggle="tab"><h2>Problem</h2></a></li>
				<li><a id="tab3" href="#pane3" data-toggle="tab"><h2>Rules</h2></a></li>
				<li><a id="tab4" href="#pane4" data-toggle="tab"><h2>Judging Criteria</h2></a></li>
				<li><a id="tab5" href="#pane5" data-toggle="tab"><h2>Register</h2></a></li>
			</ul>
			<div class="tab-content">
				<div id="pane1" class="tab-pane active" style="padding:5px; min-height:350px">
					<h3>Pane 1 Content</h3>
				</div>
				<div id="pane2" class="tab-pane" style="padding:5px;min-height:350px">
					<h3>Pane 2 Content</h3>
				</div>
				<div id="pane3" class="tab-pane" style="padding:5px;min-height:350px">
					<h3>Pane 3 Content</h3>
				</div>
				<div id="pane4" class="tab-pane" style="padding:5px;min-height:350px">
					<h3>Pane 4 Content</h3>
				</div>
				<div id="pane5" class="tab-pane" style="padding:5px;min-height:350px">
					<h3>Pane 5 Content</h3>
				</div>
			</div><!-- /.tab-content -->
		</div><!-- /.tabbable -->
	</div>
</div>
		
		<br/><br/>
		
		<section class="classes offline-classes">
	
	<ul class="container">
    
	<!-- ajax content will come here-->
	
	</ul>
	</section>
		
		
				
		<div class="md-modal md-effect-9" id="modal-9">

		<div class="md-content">
			<img src="./images/close.png" class="md-close" style="position:absolute;width:40px;margin-left:680px;margin-top:-18px;cursor:pointer">
		
			
		<h3 id='modaltitle'>Modal Dialog</h3>
		<div id="modalheader">
		<button id="desc" class="modalbutton">Description</button>
		<button id="problem" class="modalbutton">Problem Statement</button>
		<button id="rules" class="modalbutton">Rules</button>
		<button id="judging" class="modalbutton">Judging Criteria</button>
		<button id="register" class="modalbutton">Register</button>

		<br/><br/>
		</div>
		
		<div id="modalsidebar">
				
		</div>
		
		<div id="modalbody">
			
					<p id='fadespan'>
					<!--add some random text-->
					</p>
					
		</div>		


			</div>
		</div>
		
		
		
		<div class="md-overlay"></div><!-- the overlay element -->

		<div id="text" style="padding:25px;margin-left:auto;margin-right:auto;-webkit-border-radius: 5px;
     -moz-border-radius: 5px;
          border-radius: 5px;">
			<div style="font-size:17.5px" style="font-family:helvetica">BITS Pilani Hyderabad presents to you its second edition of 
			ATMOS, an exclusive national techno-management festival. 
			Year after year, we keep pushing our limits, striving for more. 
			ATMOS&apos;13 is the result of an outrageous response to its 
			maiden edition, ATMOS 12, that established a culture of having 
			an independent national annual technical festival on this 
			campus.<br><br>
			At ATMOS, we promise to incorporate every possible aspect that helps us provide a comprehensive learning 
			experience, with a conscious, coordinated and planned effort of a marvellous conglomeration of all branches 
			of engineering and all fields of science.


			From interactive learning experiences in the form of guest lectures 
			and workshops that open doors for students to witness what this 
			modern world of technology has to offer, to testing the technical 
			mettle of students across the country with an array activities and 
			events, ATMOS is an amazing opportunity for any inquisitive mind to 
			know of his true potential and achieve it with an exponential growth 
			in experience and knowledge.</div>



		</div>
		
		<div id="footer">
			<div class="row-fluid">
				<div class="span2">
					<!--<div style="width:140px;margin-top:50px">
						<img src="./img/logos/bphc/logo_horizontal_shortVersion.png">
					</div>-->
				</div>
				<div class="span2" style="margin-left:22%;color:#ACACAC">
					<div style=" margin-top:15px; position:center; bottom: 10px;"><a href="https://facebook.com/bits.atmos/" target="_blank"></a><iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fbits.atmos&amp;send=false&amp;layout=standard&amp;width=450&amp;show_faces=true&amp;font=arial&amp;colorscheme=light&amp;action=like&amp;height=80&amp;appId=425298257532412" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:80px;" allowTransparency="true"></iframe></div>

				</div>

			</div>
			<div style="width:140px;display:inline-block;position:fixed;bottom:0px;right:0px;margin:-5px"><a href="http://www.bits-pilani.ac.in/hyderabad/" target="_blank"><img src="./img/logos/bphc/Tagline_colored.png"></a></div>



		</div>
		    
 		 <!-- classie.js by @desandro: https://github.com/desandro/classie -->
		<script src="js/classie.js"></script>
		<script src="js/modalEffects.js"></script>
</body>
	
<script type="text/javascript">
            
    $("#mySlider").evoSlider({
        mode: "accordion",                  // Sets slider mode ("accordion", "slider", or "scroller")
        width: 1080,                         // The width of slider
        height: 300,                        // The height of slider
        slideSpace: 10,                      // The space between slides
    
        mouse: false,                        // Enables mousewheel scroll navigation
        keyboard: true,                     // Enables keyboard navigation (left and right arrows)
        speed: 500,                         // Slide transition speed in ms. (1s = 1000ms)
        easing: "swing",                    // Defines the easing effect mode
        loop: true,                         // Rotate slideshow
    
        autoplay: false,                     // Sets EvoSlider to play slideshow when initialized
        interval: 5000,                     // Slideshow interval time in ms
        pauseOnHover: true,                 // Pause slideshow if mouse over the slide
        pauseOnClick: true,                 // Stop slideshow if playing
        
        directionNav: true,                 // Shows directional navigation when initialized
        directionNavAutoHide: true,        // Shows directional navigation on hover and hide it when mouseout
    
        controlNav: true,                   // Enables control navigation
        controlNavAutoHide: false           // Shows control navigation on mouseover and hide it when mouseout 
    });                                
    
</script>
	
<script>

function init() {

		//alert("init() called");

		var overlay = document.querySelector( '.md-overlay' );

		[].slice.call( document.querySelectorAll( '.md-trigger' ) ).forEach( function( el, i ) {

			var modal = document.querySelector( '#' + el.getAttribute( 'data-modal' ) ),
				close = modal.querySelector( '.md-close' );

			function removeModal( hasPerspective ) {
				classie.remove( modal, 'md-show' );

				if( hasPerspective ) {
					classie.remove( document.documentElement, 'md-perspective' );
				}
			}

			function removeModalHandler() {
				removeModal( classie.has( el, 'md-setperspective' ) ); 
			}

			el.addEventListener( 'click', function( ev ) {
				classie.add( modal, 'md-show' );
				overlay.removeEventListener( 'click', removeModalHandler );
				overlay.addEventListener( 'click', removeModalHandler );

				if( classie.has( el, 'md-setperspective' ) ) {
					setTimeout( function() {
						classie.add( document.documentElement, 'md-perspective' );
					}, 25 );
				}
			});

			close.addEventListener( 'click', function( ev ) {
				ev.stopPropagation();
				removeModalHandler();
			});

		} );

	}

</script>	
	

<script>

var global;

var loginflag="<?php echo $loginvar ;?>";

$(document).ready(function()
{
	global="chemical";
		$('#bd').css('height','auto');
		$('#headevents').hide();
	$('#more').trigger('click');
	
	
	
	var data = 
	{
		"branch" :global			
	};
	
		var array;
		
		$.getJSON("ajax.php",data,function(data)
				{
					//alert("json loaded");
					var str="";
					for(var i=0;i<data.length;i++)
					{
						str+="<a class='sidelink'>"+data[i]['name']+"</a>"+"<br/>";
						array=data;
						
					}
					$('#modalsidebar').html(str);
					
									
				});			
});

var index=0;


</script>

<script>

var clicked=false;
var pid;

$(document).on('click','#more',function(){
	
		
			if(clicked==false)
			{
				pid=$(this).parents('li').first().attr('id');
				init();
			}
															
			var data = 
			{
				"branch" :global			
			};
			
			if(clicked==true)
			{
			$.getJSON("ajax.php",data,function(data)
				{
					//alert("json loaded");	
					var str="";
					for(var i=0;i<data.length;i++)
					{
						str+="<a class='sidelink'><p style='margin-bottom:-20px'>"+data[i]['name']+"</a>"+"</p>";
						array=data;
						
					}
									
					for(var i=0;i<data.length;i++)
					{
						if(data[i]['name']==pid)
						{
							index=i;

							break;
						}
					}
								
					$('#modalsidebar').html(str);
				
					$("#fadespan").hide()
								  .html(data[index]['desc'])
								  .fadeIn(1000);
							  
					$('#modaltitle').html(data[i]['name']);
					
							init();				// init  changed here
					
					clicked=false;
				});
				}
				
				if(clicked==false)
				{
					clicked=true;
					$('#more').trigger('click');
				}
				
				
				
				
		});

$(document).on('click','.sidelink',function()
				{
									
					var data = 
					{
						"name" : $(this).text()	,
						"branch" :global
						
					};
					
					
					$.getJSON("ajax2.php",data,function(ajax)
					{
						index=0;
						
						
						$("#fadespan").hide()
								  .html(ajax[index]['desc'])
								  .fadeIn(1000);
						
						
						$('#modaltitle').html(ajax[index]['name']);
						
						
						array=ajax;
						
					});
					
								
										
				});
				
		$(document).on('click','#regevent',function()
		{		
			if(loginflag=="false")
				{
					/*
					$.get("login.php",data,function(ajax)
					{
						$('#fadespan').html(ajax).fadeIn(1000);
					});
					*/
					document.location.replace("login.php");
				}
			
			if(typeof array !== 'undefined'&&headselected=="false"&&workshopselected=="false")
			{
				var damn=array[index]['name'];
				var foo=array[index]['branch'];
			}
			else if(headselected=="true")
			{
				damn=globalheadline;
				foo="headliner";
			}
			else if(workshopselected=="true")
			{
				damn=globalworkshop;
				foo="workshop";
			}
			
			var data = 
					{
						"name" : damn	,
						"branch" :foo
						
					};
					
					
					$.get("register_event.php",data,function(ajax)
					{
						if(typeof array !== 'undefined'&&headselected=="false"&&workshopselected=="false")
						{
							$('#fadespan').html(ajax).fadeIn(1000);
						}
						else
						{
							$('#pane5 h3').html(ajax).fadeIn(1000);
						}
					});	
		});
		
		$(document).on('click','#unregevent',function()
		{
			if(typeof array !== 'undefined'&&headselected=="false"&&workshopselected=="false")
			{
				var damn=array[index]['name'];
				var foo=array[index]['branch'];
			}
			else if(headselected=="true")
			{
				damn=globalheadline;
				foo="headliner";
			}
			else if(workshopselected=="true")
			{
				damn=globalworkshop;
				foo="workshop";
			}
		
			var data = 
					{
						"name" : damn	,
						"branch" :foo
						
					};
					
					
					$.get("unregister_event.php",data,function(ajax)
					{
						if(typeof array !== 'undefined'&&headselected=="false"&&workshopselected=="false")
						{
							$('#fadespan').html(ajax).fadeIn(1000);
						}
						else
						{
							$('#pane5 h3').html(ajax).fadeIn(1000);
						}
					});	
		});
				
	$('#desc').click(function()
		{
			$("#fadespan").fadeOut(500,function(){
				$(this).html(array[index]['desc']).fadeIn(1000);
			});
		});
		$('#problem').click(function()
		{
				$("#fadespan").fadeOut(500,function(){
					$(this).html(array[index]['problem']).fadeIn(1000);
			});
		});
		$('#rules').click(function()
		{
			$("#fadespan").fadeOut(500,function(){
				$(this).html(array[index]['rules']).fadeIn(1000);
			});
		});
		$('#judging').click(function()
		{
			$("#fadespan").fadeOut(500,function(){
				$(this).html(array[index]['judging']).fadeIn(1000);
			});
		});
		$('#register').click(function()
		{
			if(loginflag=="false")
			{
				$("#fadespan").fadeOut(500,function(){
				$(this).html("You are not logged in.<br/> <a href='login.php'><button id='loginb'>Login</button></a>").fadeIn(1000);
			});
			
			}
			else
			{
				var damn,foo;
			if(typeof array !== 'undefined'&&headselected=="false"&&workshopselected=="false")
			{
				damn=array[index]['name'];
				foo=array[index]['branch'];
			}
			else if(headselected=="true")
			{
				damn=globalheadline;
				foo="headliner";
			}
			else if(workshopselected=="true")
			{
				damn=globalworkshop;
				foo="workshop";
			}
			
			var data = 
					{
						"name" : damn	,
						"branch" :foo
						
					};
		
			$.get("registerflag.php",data,function(ajax)
			{
				//console.log(ajax);	
				$('#fadespan').html(ajax).fadeIn(1000);
			});	
			}				
			
		});
		
		$('#modalCloseButton').click(function()
		{
			$.modal.close();
		});

</script>


<script>
function loadEventsByBranchAJAX(branch)
{
	var data = 
	{
		"branch" :branch		
	};
	
	$.get("events_ajax.php",data,function(result)
	{
		$('.container').fadeOut(300,function(){
			$(this).html(result).fadeIn(300);
		});
	});
	
	return false;
}

</script>

<script>
var seen=0;
$('a.branch').click(function()
{
	
	global = $(this).attr('id'); 
	
	$('#text').hide();
	$('#bd').css('height','1620px');
	$('#footer').css('position','absolute');
	$('#footer').css('top','1900px');
	$('#footer').show();
	headselected="false";
	if(seen==0)
	{
		$('html, body').animate({
			scrollTop: $("#mySlider").offset().top-20
		}, 1000);
		
		seen=1;
	}
		//$('.container').fadeOut(500);
		//loadEventsByBranchAJAX(global);	

		$('#headevents').fadeOut(500,function()
		{
			loadEventsByBranchAJAX(global);
			//$('.container').fadeIn(500);

		});

		return false;
	
});

var globalheadline;
var headselected;
$('a.headline').click(function()
{
	
	hlineid = $(this).attr('id'); 
	globalheadline=hlineid;
	$('#bd').css('height','1620px');
	$('#footer').css('position','absolute');
	$('#footer').css('top','1580px');
	$('#footer').show();	
	headselected="true";
	workshopselected="false";
	
	$('#headevents').fadeOut(300,function(){
	var data = 
					{
						"name" : hlineid,
						"branch":"headliner"
					};
					
					$.getJSON("ajax2.php",data,function(ajax)
					{

						$('#headname').html(ajax[0]['name']);
						$('#pane1 h3').html(ajax[0]['desc']);
						$('#pane2 h3').html(ajax[0]['problem']);
						$('#pane3 h3').html(ajax[0]['rules']);
						$('#pane4 h3').html(ajax[0]['judging']);
						
						if(loginflag=='true')
						{
						$.get("registerflag.php",data,function(ajax)
						{
							$('#pane5 h3').html(ajax).fadeIn(1000);
						});	
						}
						else
						{
							$("#pane5 h3").fadeOut(500,function(){
								$(this).html("You are not logged in.<br/> <a href='login.php'><button id='loginb'>Login</button></a>").fadeIn(1000);
							});
						}	
						
						if(ajax[0]['name']=="Cubing ATMOSphere")
						{
							$('#tab2 h2').text('Event Format');
							$('#tab3 h2').text('Registration');
							$('#tab4 h2').text('Contact');
						}
						else
						{
							$('#tab2 h2').text('Problem');
							$('#tab3 h2').text('Rules');
							$('#tab4 h2').text('Judging Criteria');
						}
						
											
						//console.debug(ajax[0]['rules']);
						
					});
	});
	if(seen==0)
	{
		$('html, body').animate({
			scrollTop: $("#mySlider").offset().top-20
		}, 1000);
		
		seen=1;
	}
	
	$('.container').fadeOut(500,function()
	{
		$('#text').fadeOut(500);
		$('#headevents').fadeIn(500);
		
	});
	
			return false;
	
});

var globalworkshop;
var workshopselected;

$('a.workshop').click(function()
{
	
	workshopid = $(this).attr('id'); 
	globalworkshop=workshopid;
	$('#bd').css('height','1620px');
	$('#footer').css('position','absolute');
	$('#footer').css('top','1580px');
	$('#footer').show();	
	headselected="false";
	workshopselected="true";
	
	alert(workshopselected+" "+headselected);
	
	$('#headevents').fadeOut(300,function(){
	var data = 
					{
						"name" : workshopid,
						"branch":"workshop"
					};
					
					$.getJSON("ajax2.php",data,function(ajax)
					{

						$('#headname').html(ajax[0]['name']);
						$('#pane1 h3').html(ajax[0]['desc']);
						$('#pane2 h3').html(ajax[0]['problem']);
						$('#pane3 h3').html(ajax[0]['rules']);
						$('#pane4 h3').html(ajax[0]['judging']);
						
						if(loginflag=='true')
						{
						$.get("registerflag.php",data,function(ajax)
						{
							$('#pane5 h3').html(ajax).fadeIn(1000);
						});	
						}
						else
						{
							$("#pane5 h3").fadeOut(500,function(){
								$(this).html("You are not logged in.<br/> <a href='login.php'><button id='loginb'>Login</button></a>").fadeIn(1000);
							});
						}	
						
							$('#tab2 h2').text('Problem');
							$('#tab3 h2').text('Rules');
							$('#tab4 h2').text('Judging Criteria');
						
												
					});
	});
	if(seen==0)
	{
		$('html, body').animate({
			scrollTop: $("#mySlider").offset().top-20
		}, 1000);
		
		seen=1;
	}
	
	$('.container').fadeOut(500,function()
	{
		$('#text').fadeOut(500);
		$('#headevents').fadeIn(500);
		
	});
	
			return false;
	
});

</script>

<script>

$('#tab5').click(function()
		{
				
			if(loginflag=="false")
			{
				$("#fadespan").fadeOut(500,function(){
				$(this).html("You are not logged in.<br/> <a href='login.php'><button id='loginb'>Login</button></a>").fadeIn(1000);
				});
			
			}
			else
			{
			var damn,foo;
			if(headselected=="true")
			{
				damn=globalheadline;
				foo="headliner";
			}
			else if(workshopselected=="true")
			{
				damn=globalworkshop;
				foo="workshop";
			}
			
			var data = 
					{
						"name" : damn	,
						"branch" :foo
						
					};
		
			$.get("registerflag.php",data,function(ajax)
			{
				//console.log(ajax);	
				$('#pane5 h3').html(ajax).fadeIn(1000);
			});	
			}			

			
			
		});

</script>

<script>
$('#dt1,#dt2,#dt3').click(function()
{
	seen=0;
});
$('#dt1').click(function()
{
	headselected="true";
	workshopselected="false";
});
$('#dt2').click(function()
{
		workshopselected="false";
		headselected="false";
});
$('#dt3').click(function()
{
	headselected="false";
	workshopselected="true";
});

</script>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script>
/*$(document).ready(function(){
	$(".blocks").click(function(){
		$(this).children("p").addClass("glow");
	});
});*/
</script>

</html>