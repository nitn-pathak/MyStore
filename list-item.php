<?php

include("db.php");

$pid=$_POST["pid"]; 

$pcategory=$_POST["category"]; 
$ptype=$_POST["type"]; 
$ppram=$_POST["param"]; 
$pcolor=$_POST["pcolor"]; 
$pprice=$_POST["pprice"]; 
$pname=$_POST["pname"]; 
// $img1=$_POST["image1"]; 
//img2=$_POST["image2"]; 
//$img3=$_POST["image3"]; 


$old=$_FILES["image1"]["tmp_name"];
$new="images/" ."_".$_FILES["image1"]["name"];
move_uploaded_file($old,$new);

$old=$_FILES["image3"]["tmp_name"];
$new2="images/" ."_".$_FILES["image3"]["name"];
move_uploaded_file($old,$new2);







$qry = " insert into product values('$pid','$pcategory','$ptype','$ppram','$pcolor',$pprice,'$pname','$new','$new2')";

echo($qry);
//$qry = " insert into product values('$pid','$pcolor','$pprice','$pname')";

mysqli_query($con,$qry) or die(mysqli_error($con));

echo("product added");

//header('Location:login.html');


?>