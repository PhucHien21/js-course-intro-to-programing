$(document).ready(function() {
  
  $("p").click(function() {$(this).hide();});
 
  $("#form1").dblclick(function() {
      $(this).css("background-color","#ffee99");
      $("p").show();
   //$(this).hide();
  });
  
  
  $("#table1").mouseenter(function() {
   
    $(this).css("background-color","#ffaa99");
   //alert("You entered the table area!");
  });
  
  $("#table1").mouseleave(function() {
   $(this).css("background-color","#999999");
   
   //alert("You left the table area!");
  });
  $("#fntxt").mousedown(function() {
   alert("Mouse down over first name field!");
  });
  $("#lntxt").mouseup(function() {
   alert("Mouse up over last name field!");
  });
  $("#form1").hover(function() {
   
   $(this).css("background-color", "aqua");
   //alert("You entered the form area row!");
  },
  function() {
  // alert("You now left the form area!");
   $(this).css("background-color", "white");
  });
  
  
  $("#fntxt").focus(function() {
   $(this).css("background-color", "red");
  });
  
  $("#fntxt").blur(function() {
   $(this).css("background-color", "blue");
  });
  $("#lntxt").focus(function() {
   $(this).css("background-color", "green");
  });
 
  $("#lntxt").blur(function() {
   $(this).css("background-color", "yellow");
  });
 
 
 });