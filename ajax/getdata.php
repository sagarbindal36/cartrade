<!doctype html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>
<?php

$q=$_REQUEST['q'];
$conn=mysqli_connect("localhost","root","","cartrade");
if (!$conn) {
    die('Could not connect: ' . mysqli_error($con));
}

$query="SELECT * FROM cinfo WHERE id = '".$q."'";
$result=mysqli_query($conn,$query);


echo "<table><tr>
      <th>Company</th>
      <th>Car</th>
      <th>Price</th></tr>";	
	  
	  
	while($row = mysqli_fetch_assoc($result))
	 {
		 echo "<tr>";
		 echo "<td>".$row['ccompany']."</td>";
		 echo "<td>".$row['carname']."</td>";
		 echo "<td>".$row['carprice']."</td>"; 
		 echo "</tr>";
		}
	
  

echo "</table>";


?>
</body>
</html>
