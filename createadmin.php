<?php

include("db.php");

$aid = $_POST["aid"];
$aemail = $_POST["aemail"];

$aname = $_POST["aname"];
$adob = $_POST["adob"];
$aaddress = $_POST["aaddress"];

$apassword = $_POST["apassword"];

$old=$_FILES["image1"]["tmp_name"];
$new="images/" . "_".$_FILES["image1"]["name"];
move_uploaded_file($old,$new);




$qry = "insert into admin values('$aid','$aname','$aemail','$aaddress','$adob','$new','$apassword')";

   mysqli_query($con,$qry) or die(mysqli_error($con));

   echo("registered");

   

   

?>