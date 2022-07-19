<?php


include("db.php");

$email= $_POST["email"];
$phoneno= $_POST["phoneno"];
$dob= $_POST["dob"];
$country= $_POST["country"];
$town= $_POST["town"];
$state= $_POST["state"];
$postalcode= $_POST["postal"];

$old=$_FILES["image1"]["tmp_name"];
$new="images/" ."_".$_FILES["image1"]["name"];
move_uploaded_file($old,$new);

    

$qry =" select * from useraccount ";

 $data = mysqli_query($con,$qry) or die(mysqli_error($con));
 
 $row = mysqli_num_rows($data);


if($row<1){


    

// $qry = "insert into useraccount values('$email',$phoneno,'$dob','$country','$state','$town',$postalcode,'$new')";

$qry = " UPDATE useraccount SET email= '$email',phoneno=$phone,dob='$dob',country='$country',town='$town',postalcode=$postal WHERE email= '$email'";

 mysqli_query($con,$qry) or die(mysqli_error($con));


 header("location:useraccount.php");


}else if($row>=1){



    
    header("location:useraccount.php");
}


?>