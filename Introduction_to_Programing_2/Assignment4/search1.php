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
			
			h1, a, p	{
				color: white;
			}
		</style>
	</head>

	<body>
		<h1>Name Searching</h1>
		
		<table>
 			<tr>
				<th>Name</th>
				<th>Last name</th>
				<th>Job</th>
				<th>Net salary</th>
				<th>Tax paid</th>
   			</tr>
		
		<?php
			$name = $_POST["s1"];
			$file  = @fopen('data/data.txt','r');
			$count = 0;
			while(!feof($file)) {
  				$line = fgets($file);
  				$data = explode("|", $line);
  				if($data[0] == $name || $data[1] == $name)	{
  					echo "<tr>";
  					for ($k = 0; $k < count($data); $k++)	{
  						echo "<td>" .$data[$k]. "</td>";}
  					echo "</tr>";
  					$count = $count + 1;}
  			}
  			echo "</table>";
  			if($count == 0)	{
  				echo"<p>Name $name not found</p>";
  			}
  			fclose($file);
  		?>
  		<a href="../Assignment4/index.html">Back</a>
  	</body>
</html>