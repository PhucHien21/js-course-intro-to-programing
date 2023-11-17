 //This is the content of scripts/actions_24.js file.
 function draw_linear_gardient1() {
  
var canvas = document.getElementById("drawing_area1"); 
var context = canvas.getContext("2d");
var x0=0, y0=0, x1=canvas.width/2, y1=0;
//Here we create gradient
var gradient = context.createLinearGradient(x0,y0, x1, y1); 
gradient.addColorStop(0.4,"red"); 
gradient.addColorStop(0.6,"blue");
//Here we fill with gradient
context.fillStyle = gradient; 
context.fillRect(0,0,canvas.width, canvas.height); 
} 
 
 function draw_linear_gardient2() { 
  
var canvas = document.getElementById("drawing_area2"); 
var context = canvas.getContext("2d"); 
var x0=0, y0=0, x1=canvas.width, y1=0; 
//Here we create gradient
var gradient = context.createLinearGradient(x0,y0, x1, y1); 
gradient.addColorStop(0,"red"); 
gradient.addColorStop(0.3,"green"); 
gradient.addColorStop(0.6,"yellow"); 
gradient.addColorStop(0.8,"orange"); 
gradient.addColorStop(1,"blue"); 
//Here we fill with gradient
context.fillStyle = gradient; 
context.fillRect(0,0,canvas.width, canvas.height); 
} 
 
 
 function draw_linear_gardient3() { 
  
  var canvas = document.getElementById("drawing_area3"); 
var context = canvas.getContext("2d"); 
var x0=0, y0=0, x1=canvas.width, y1=0; 
//Here we create gradient
var gradient = context.createLinearGradient(x0,y0, x1, y1); 
gradient.addColorStop(0,'#0000FC'); 
gradient.addColorStop(.2,'#00FF09'); 
gradient.addColorStop(.4,'#FFFF0E'); 
gradient.addColorStop(1,'#AA00AD'); 
//Here we fill with gradient
context.fillStyle = gradient; 
context.fillRect(0,0,canvas.width, canvas.height); 
}
 
 
 function draw_linear_gardient4() {
  
  var canvas = document.getElementById("drawing_area4"); 
var context = canvas.getContext("2d"); 
var x0=0, y0=0, x1=canvas.width, y1=0; 
//Here we create gradient 
var gradient = context.createLinearGradient(x0,y0, x1, y1); 
gradient.addColorStop(0,'#0000FF'); 
gradient.addColorStop(.2,'#00FF00'); 
gradient.addColorStop(.4,'#FFFF00'); 
gradient.addColorStop(.6,'#FF8800'); 
gradient.addColorStop(.8,'#FF0000'); 
gradient.addColorStop(1,'#AA00AA'); 
//Here we fill with gradient 
context.fillStyle = gradient; 
context.fillRect(0,0,canvas.width, canvas.height); 
}