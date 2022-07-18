<?php



include("db.php");


     
$pid = $_POST["pid"];
$pcategory = $_POST["pcat"];
$ptype= $_POST["ptype"];
$parameter= $_POST["param"];
$color= $_POST["color"];
$price= $_POST["price"];
$pname= $_POST["pname"];



//  echo("$pid");
// echo("$ptype");
// echo("$prameter");
// echo("$color");
// echo("$pname");

  $qry= " UPDATE product SET pcategory= '$pcategory',ptype='$ptype',pparameter='$parameter',pcolour='$color',price= $price, pname='$pname' WHERE pid= $pid";
 
  mysqli_query($con,$qry) or die(mysqli_error($con));


  header("location:updatepr");





?>