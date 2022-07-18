<?php


include("db.php");
$email = $_POST["email"];
$name = $_POST["name"];
$mobile = $_POST["mobile"];
$landmark = $_POST["landmark"];
$houseno = $_POST["houseno"];



$qry ="select * from deliveryaddress ";



 $data = mysqli_query($con,$qry) or die(mysqli_error($con));
 
 $row = mysqli_num_rows($data);


if($row<1){


    
$qry = "insert into deliveryaddress values('$email','$name','$mobile','$landmark','$houseno')";



 mysqli_query($con,$qry) or die(mysqli_error($con));


 header("location:delivery.php");


}else if($row>=1){



    
    header("location:delivery.php");
}


?>