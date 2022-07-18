<?php
include("db.php");


$qry ="select * from deliveryaddress ";

 $data = mysqli_query($con,$qry) or die(mysqli_error($con));
 
 $row = mysqli_num_rows($data);


if($row<1){


 header("location:delivery3.php");


}else if($row>=1){

    
    header("location:delivery.php");
}

?>