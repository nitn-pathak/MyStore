<?php

include("db.php");

$email = $_REQUEST["email"];

$password = $_POST["password"];

$confirm = $_POST["confirm"];

//$qry = "$confirm = 'password' where $email = 'email' ";


 
$qry= " update admin set password='$password' where email='$email'";
mysqli_query($con,$qry)or die(mysqli_error($con));

 header("location:room.php");




?>