<?php

include("db.php");

$productid =$_REQUEST["id"];
$email =$_REQUEST["email"];
$productname =$_REQUEST["productname"];


$price = $_REQUEST["price"];
$productimage = $_REQUEST["image"];


 $qry ="insert into Favourite values('$email','$productid','$productname','$price','$productimage')";

  mysqli_query($con,$qry) or die(mysqli_error($con)); 


//   function function_alert($message) {
      
//     // Display the alert box 
//     echo "<script>alert('$message');</script>";
// }
  
  
// // Function call
// function_alert(" Product Added to Favourites ");



 header('Location:Favourite.php');
  
?>