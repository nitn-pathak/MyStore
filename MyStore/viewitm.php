<?php


include("db.php");

$qry =" select * from product ";

$result = mysqli_query($con,$qry) or die(mysqli_error($con));

$n = mysqli_fetch_row($result);


if($n>0){

      $row = mysqli_fetch_row($result);
              
                echo($n[0]);
              
                echo($n[1]);
               
                echo($n[2]);
               
                echo($n[3]);
              
                echo($n[4]);

                echo($n[5]);

                echo($n[6]);

           }





?>