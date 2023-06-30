<?php
include 'connection.php';

$email2=$_POST['email1'];
$password2=$_POST['password1'];
// echo $email2."<br>";

// echo $password2."<br>";

 $query=$con->prepare("select * from admin where email='$email2' ");
 
?>