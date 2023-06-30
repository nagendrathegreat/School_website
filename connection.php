<?php
$host='localhost';
$username="root";
$pass="";
$dbname="ghs";


$con=mysqli_connect($host,$username,$pass,$dbname); 
if ($con->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>