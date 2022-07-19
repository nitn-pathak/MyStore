<?php



include("db.php");


     

$email = $_POST["email"];
$name= $_POST["name"];
$address= $_POST["address"];
$dob= $_POST["dob"];





 $qry=" UPDATE admin SET  name = '$name',address= '$address',dob='$dob' WHERE email='$email'";
 
 mysqli_query($con,$qry) or die(mysqli_error($con));




 header("location:edit.php");


?>