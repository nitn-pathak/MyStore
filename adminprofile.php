<!DOCTYPE html>
<html lang="en">

<head>
     
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Admin</title>
    <link rel="stylesheet" href="adminprofile.css">


</head>

<body>



    <div style="display: flex;">


        <div> <img src="images/logo.png" style="margin-top: 1.6rem; margin-left: .9rem;" alt=""></div>
        
        
        <div>
        
          <h1 style="  color: rgb(10, 10, 10); margin-top:3.1rem; margin-left: 2rem; margin-left:50rem;">Admin Pannel</h1>
        
        </div>
        
        
        </div>


<?php

include("db.php");

$qry ="select * from admin ";
$result = mysqli_query($con,$qry) or die(mysqli_error($con));

$totalrow = mysqli_num_rows($result);


if($totalrow>=1){

  $data = mysqli_fetch_row($result);



?>




<div class="main"> 


 <div class="right"> 

    <img src="<?php echo $data[5]?>" alt="" style="height: 8.5rem; width: 8rem; background-color: blue; 
    
    margin-left: 4.5rem; margin-top:6rem;">

       <h2 style="margin-left: 6.4rem; color: white;"> </h2>

   
 </div>



<div class="left">  

   
    <a href="adminhome.php" style="margin-right: 2rem; margin-left: 15rem;" > Profile </a>

    <a href="edit.php"> Edit </a>

    <a href="settingsadmin.php" style="margin-left: 2rem;"> Settings </a>
     



   <table>

 <tr><td> <h3> Admin Profile</h3></td></tr>

 <tr><td> <h3> Name-  <input readonly style="margin-left: 4rem;"  type="text" placeholder="" value="<?php echo $data[1]?>"></h3></td></tr>

<tr><td> <h3> Gmail- <input readonly style="margin-left: 3.8rem;" type="text" placeholder="" value="<?php echo $data[2]?>  "></h3></td></tr>

<tr><td><h3> Address- <input readonly style="margin-left: 3rem;" type="text" placeholder="" value="<?php echo $data[3]?>  "></h3></td></tr>

<tr><td> <h3> Date of Birth- <input readonly style="margin-left: .7rem;"type="text" placeholder="" value="<?php echo $data[4]?>  ">  </h3></td></tr>




   </table>

</div>


       </div>


       <?php
       
}
       
       ?>

    
</body>



</html>