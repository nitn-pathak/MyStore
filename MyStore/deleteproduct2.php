

<?php

include("db.php");

$id = $_REQUEST["id"];

$qry = "DELETE FROM product WHERE pid = '$id' ";



$result = mysqli_query($con,$qry) or die(mysqli_error($con));

header("location:deleteproduct.php");




?>
                
   
              
               
   
               
