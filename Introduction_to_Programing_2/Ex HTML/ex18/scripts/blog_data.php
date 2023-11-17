<!DOCTYPE html>
 <html>
 <head>
 <title>
User Blog</title>
 </head>
 <body style='text-align:center;'>
<?php
//Here we define handle_post() function to handle user post. 
function handle_post() {
 
 
date_default_timezone_set('Finland/Helsinki');
//Here we define a directory to save data to 
$dir="../uploads/blog/";
$file_name="comments.txt";
//Here we check whether public directory exists or not. 
//If it does not exist, we will create it. 
if (!file_exists($dir)) { 
//true means recursively  
if (!mkdir($dir, 0711, true))        
{          
    echo($dir . ' cannot be created recursively' . '<br>');        
 }      
 else        
{       
    echo($dir . ' created recursively' . '<br>');     
 }
 }
 
 
 
//Here we set the permission for the file so that it is readable by all users. 
//chmod($dir . "/" . $_FILES['upload_file']['name'], 624);
 //Here we read data through $_REQUEST autoglobal, but for security reasons 
 //not recommended! We should have used $_POST autoglobal to read data from //the user. 
 //Here we get the current date and time and format it to Finnish style
 
 $current_date = date('d.m.Y H:i:s', time());
$newEntry = "<tr><td>" . $current_date . "</td><td>" . $_POST["name"] . "</td><td>" . $_POST["comment"] . "</td></tr>\r\n";
//Here we create variable  $file_path_name
 $file_path_name=$dir . $file_name; 
 
 if(file_put_contents($file_path_name, $newEntry, FILE_APPEND ) >0)   
  echo "Data was successfully written to " . htmlentities($file_path_name) . "<br/>"; 
 else  
  echo "Data could not be written to " . htmlentities($file_path_name) . "<br/>";
echo "<hr>"; 
echo "<div style='text-align:center;'>";
echo "<h2>Sumary Blog Data</h2>"; 
//Here we read and display the content of the comment file. Pay attention 
//that we have to give the path and name of the file. 
echo "<table border='1' style='margin-left:auto;margin-right:auto;'>"; 
echo "<tr><th>Date Time</th><th>Name</th><th>Comment</th></tr>"; 
echo file_get_contents($file_path_name); 
echo "</table>"; 
echo "</div>"; 
}
//End of function definition. //Here we call handle_post() function to handle the user post.
if(isset($_POST['submit_comment_data']) && !empty($_POST["name"]) && !empty($_POST["comment"]) ){ 
 handle_post();
 
} else { 
   echo "<p style='color:red;'>All fields must be filled!</p>"; 
  } 
   
   echo "<hr>"; 
   
   //Here we provide a link to the main page. 
   
   echo "<a href='../index.html'>Main Page</a>"; 
   
   ?>
 </body>
 </html>