 <!DOCTYPE html>
 <head>
 <title>
Registration Summary</title>
 <style>
 th, td {      padding: 5px;     text-align: left; } 
 </style>

</head>


 <body>
 <h2> HTTP GET Registration Summary</h2>

<!--Below we define a PHP scripting zone -->
<?php

//Here we define variable greet
$greet="Hello there";

//Here we define some numeric variables
$n=100;
$p=2.3456;

$sum=0;
//Here we use a loop to count the sum of numbers between 0 and 10
for($i=0; $i<=10; $i++)
  $sum+=$i;

//Here we print the value of sum
echo "sum=" . $sum . "<br>";

//Here we concatentae text and numerical variables
$str=$greet . " " .  $p . "<br>";
echo $str;
echo 'Hello ' . $n . "<br>";
//echo "<hr>";
?>

<hr>

 <table>
 <tr>
<th>
Name</th>
<th>
Last name</th>
 <th>
Email</th>
 <th>
Jobs</th>
 <th>
Employment Status</th>
   </tr>
 <tr>
<td>
<?php echo $_GET["first_name"] ?>
</td>
<td>
<?php  echo $_GET["last_name"] ?>
</td>
<td>
<?php  echo $_GET["email"] ?>
 <td>
<?php $jobs=$_GET["jobs"]; foreach($jobs as $j) echo $j . ' '; ?>
</td>
 <td>
<?php $emps=$_GET["empstate"]; echo $emps; ?>
</td>
 </tr>
 </table>
 <a href="../index.html">Back</a>
 </body>
 </html>