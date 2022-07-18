<?php


include("db.php");

$email = $_POST["email"];

$password = $_POST["password"];

$confirm = $_POST["confirm"];

//$qry = "$confirm = 'password' where $email = 'email' ";

$qry="update register set password='$confirm' where email='$email'";


mysqli_query($con,$qry)or die(mysqli_error($con));


header("location:login.html")



?>