$(document).ready( function() {
   var x=0;
	$("#divshow").hide();
   $("#showHigh").hide();
   $("#showProceed").hide();
   $("#entertext").on("click", function() {
   	if(x==1)
         window.location.href="http://bits-atmos.org/alter/nilayan/halfdone/modal2.html";
      else if(x==0){
      x=2;
      
      $("#logo").fadeOut(500);
   	$("#entertext p").fadeOut(500,function(){
   		$("#entertext p").html("Redirecting, Enjoy the game in the meanwhile");
         $("#entertext").css({
            "margin-top":"7%",
            "width":"400px",
            "font-size":"large",
            "border":"0px",
            "font-family":"Helvetica, sans-serif",
            "cursor":"default"
         });   
   	});
   	$("#divshow").show(1000);
      $("#entertext p").fadeIn(500).delay(1500);	
      $("#entertext p").fadeOut(500,function(){
         $("#showProceed").show();
      });/*,function(){
         //$("#entertext").removeClass('entersite');
         $("#entertext p").html("Proceed");

         $("#entertext").css({
            "color":"rgba(255,255,255,0.7)",
            "position":"fixed",
            "top":"50%",
            "right":"3%",
            "font-size":"xx-large",
            "border":"0px",
            "cursor":"pointer",
            "width":"200px",
            "height":"0px",
            "margin-top":"-78px",
         });
         $("#entertext").hover(function(){
            $(this).css({"font-size":"40px"});
         },
         function(){
            $(this).css({"font-size":"xx-large"});
         }
         );
         x=1;
      });
      $("#entertext p").fadeIn(500);
*/
      }
   });
   $("#highScores").on("click",function() {
      $("#showHigh").toggle();
   });

   $("#submitScore").on("click",function() {
      $("#showSubmit").show();
   });

   $("#status").on("click",function(){
      //alert();
      window.location.href="indexoo.html";
   });
});