<?php

include("db.php");

$email = $_POST["email"];
$password = $_POST["Password"];
$name = $_POST["name"];
$dob = $_POST["dob"];
$gender = $_POST["gender"];


$qry = "insert into register values('$email','$password','$name','$dob','$gender')";

   mysqli_query($con,$qry) or die(mysqli_error($con));

   echo("registered");

   header('Location:login.html');

   

?>