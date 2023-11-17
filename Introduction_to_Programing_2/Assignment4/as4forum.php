<!DOCTYPE html>

<html>

	<head>
		<meta charset="ISO-8859-1">
		<title>Assignment 4</title>
		
		<style>
			
			table	{
				background-color: white;
				width: 400px;
			}
			body	{
				background-color: orange;
			}
			
			h1, a, p, h2	{
				color: white;
			}
		</style>
	</head>

	<body>
		<h1>Salary</h1>
		
		<?php 
		$g_salary=$_POST["g_salary"];
		$tax=$_POST["tax_rate"];
		$tax_paid=($tax/100)*$g_salary;
		$n_salary=$g_salary-$tax_paid;
		
		
        $dir="../Assignment4/data/";
        $file_name="data.txt";

        if (!file_exists($dir)) {

        if (!mkdir($dir, 0711, true))       
            {         
                echo($dir . ' cannot be created recursively' . '<br>');       
            }     
        else       
            {      
                echo($dir . ' created recursively' . '<br>');    
            }
        }
        
        ?>
        <?php
        $newEntry="" .$_POST["f_name"]. "|" .$_POST["l_name"]. "|" .$_POST["job"]. "|" .$n_salary. "|" .$tax_paid. "|\r\n";

        $file_path_name=$dir . $file_name;
        
        if(file_put_contents($file_path_name, $newEntry, FILE_APPEND ) >0)  
        echo "Data was successfully written to " . htmlentities($file_path_name) . "<br/>";
        else 
        echo "Data could not be written to " . htmlentities($file_path_name) . "<br/>";
        echo "<hr>";
        echo "<div style='text-align:center;'>";
        echo "<h2>Sumary Data</h2>";

		echo "<table>
 			<tr>
				<th>Name</th>
				<th>Last name</th>
				<th>Job</th>
				<th>Net salary</th>
				<th>Tax paid</th>
   			</tr><tr>";
   		$file  = fopen('data/data.txt','r');
        while(!feof($file)) {
  				$line = fgets($file);
  				$data = explode("|", $line);
  				for ($k = 0; $k < 5; $k++)	{
  						echo "<td>" .$data[$k]. "</td>";}
  					echo "</tr>";}
        echo"</table>";
        echo "</div>";
         
       	?>
        
        <br><br>
        
        <form action="search1.php" method="POST">
        
        	<h2>Name searching</h2>
        	
        	<input type="text" name="s1">
        	<input type="submit" name="sub1" value="Search">
        
        </form>
        
        <form action="search2.php" method="POST">
        
        	<h2>Money range Searching</h2>
        	
        	<input type="number" name="s2">
        	<input type="number" name="s3">
        	<input type="submit" name="sub2" value="Search">
        
        </form>
        
        <br>
        
       	<a href='../Assignment4/index.html'>Back</a>
       	
 	</body>
 </html>