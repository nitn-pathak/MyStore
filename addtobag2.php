<?php

include("db.php");
 $email = $_REQUEST["email"];
$productid =$_REQUEST["id"];
$productname =$_REQUEST["productname"];

$quantity = $_REQUEST["quantity"];
$size = $_REQUEST["param"];
$price = $_REQUEST["price"];

$productimage = $_REQUEST["image"];


// echo("$productid");
// echo("$email");
// echo("$productname");
// echo("$quantity");
// echo("$size");
// echo("$price");

// echo("$productimage");

 $qry ="insert into cart values('$email','$productid','$productname','$size','$quantity','$price','$productimage')";

  mysqli_query($con,$qry) or die(mysqli_error($con)); 


//   function function_alert($message) {
      
//     // Display the alert box 
//     echo "<script>alert('$message');</script>";
// }
  
  
// // Function call
// function_alert(" Product Added to Favourites ");

header('Location:addtobag.php');
  
?>