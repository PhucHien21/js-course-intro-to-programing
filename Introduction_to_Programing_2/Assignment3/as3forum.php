<!DOCTYPE html>

<html>

	<head>
		<meta charset="ISO-8859-1">
		<title>Assignment 3</title>
		
		<style>
			
			table	{
				background-color: white;
				width: 400px;
			}
			body	{
				background-color: orange;
			}
			
			h1, a	{
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
		?>
		
		<table>
 			<tr>
				<th>Name</th>
				<th>Last name</th>
				<th>Job</th>
				<th>Net salary</th>
				<th>Tax paid</th>
   			</tr>
 			
 			<tr>
				<td> <?php echo $_POST["f_name"] ?> </td>
				<td> <?php echo $_POST["l_name"] ?> </td>
				<td> <?php echo $_POST["job"] ?> </td>
				<td> <?php echo $n_salary ?> </td>
				<td> <?php echo $tax_paid ?> </td>
 			</tr>
 		</table>
 		<a href="../Assignment3/index.html">Back</a>
 	</body>
 </html>