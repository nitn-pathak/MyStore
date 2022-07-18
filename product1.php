<?php


include("db.php");


$id = $_GET['id'];



$qry =" select * from product where pid = $id ";

$result = mysqli_query($con,$qry) or die(mysqli_error($con)); 



  $n = mysqli_fetch_row($result);


if($n>0){

    
    
         
    echo($n[0]);
               
    echo($n[1]);
    
    echo($n[2]);
   
    echo($n[3]);
      
    echo($n[4]);
    
    echo($n[5]);
    
    echo($n[6]);
   
    echo($n[7]);

      
    echo($n[8]);
    
    echo($n[9]);
    
        
       
    

           }
              
             
               
              





?>