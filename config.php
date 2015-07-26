<?php
$servername="localhost";
$username="root";
$password="";
$dbname="cartrade";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
	echo "connection not establish".mysqli_connect_error();
	}
?>
<?php
?>
