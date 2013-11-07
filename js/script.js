$(document).ready(function(){

  $('#home a');

   // Set the 'normal' state background position
   .css( {backgroundPosition: "0 0"} );

   // On mouse over, move the background
   .mouseover(function(){
    $(this).stop().animate({backgroundPosition:"(0 -54px)"}, {duration:500})
   })

   // On mouse out, move the background back
   .mouseout(function(){
    $(this).stop().animate({backgroundPosition:"(0 0)"}, {duration:500})
   })

 });