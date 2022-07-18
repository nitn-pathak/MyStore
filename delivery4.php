<?php


include("db.php");
$email = $_POST["email"];
$name = $_POST["name"];
$mobile = $_POST["mobile"];


$landmark = $_POST["landmark"];
$houseno = $_POST["houseno"];





$qry = " update deliveryaddress set email='$email',name='$name',mobile='$mobile',landmark='$landmark',houseno='$houseno'where email = '$email'";

 

 mysqli_query($con,$qry) or die(mysqli_error($con));


 header("location:delivery.php");





?>