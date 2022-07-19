
<?php

session_start();
if(isset($_SESSION["email"]))
{
?>



<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Room </title>
    
    <link rel="stylesheet" href="adminprofile.css">
    <link rel="stylesheet" href="room.css">


</head>


 <body>


 <header>

 <div style="display: flex;">   

    <a href="room.php" style="text-decoration: none; color: black;"><img class= "mainlogo" src="images/online-shopping.png" alt="" style="margin-top:2.8rem; margin-left: 2.6rem; height: 3rem; width: 3rem; "> </a>

    <a href="room.php" style="text-decoration: none; color: black;">  <h2 style="padding: 0; margin-right: 10rem; margin-top:4rem; margin-left: 1rem;">  My Store </h2> </a>
     
   
    <div class ="content" style="margin-right:8rem; margin-top: 3rem;">

     <h3> <a href="room.php" style="margin-right: 2rem; margin-left: 0rem; text-decoration: none; color: black;" >View Profile</a> 
     
          <a href="list-items.html" style="margin-right: 2rem; text-decoration: none; color: black;"> Add Item </a>
          <a href="viewitem.php" style="margin-right: 2rem; text-decoration: none; color: black;"> View Item </a>

         <a href="updateproduct.php" style="margin-right: 2rem; text-decoration: none; color: black;">Update Item</a>

         <a href="deleteproduct.php" style="margin-right: 2rem; text-decoration: none; color: black;">Delete Item</a>


                 </h3>
     </div>


     <h2 style="margin-top: 3.8rem; margin-left: 0rem;">Admin Panel</h2>



  </div>
      
</header>






    <!-- <div style="display: flex;">


        <div> <img src="images/logo.png" style="margin-top: 1.6rem; margin-left: .9rem;" alt=""></div>
        
        <div class="dropdown-content" style="margin-right:10rem; ">
    
   
   
 </div> -->
        
        <!-- <div>
        
          <h1 style="  color: rgb(10, 10, 10); margin-top:3.1rem; margin-left: 2rem; margin-left:50rem;">Admin Pannel</h1>
        
        </div> -->
        
        
        </div>


        <!-- div class="parent" style="display: flex;"> -->




        <?php
    $email= $_SESSION["email"];
   
     $name= $_SESSION["name"];
    
    
    ?>

     <!-- <h6> <?php echo ($email)?></h6>
  
     <h6> <?php echo ($name)?></h6>  -->




<div class="parent">


<!-- <div style=" height: 40rem; width: 35rem; "> 




        <h2 style="margin-left:2rem; margin-top: 4rem;">Settings</h2>


    
</div> -->
    







  <div>

  
<?php

include("db.php");

$qry =" select * from admin where email = '$email' ";
$result = mysqli_query($con,$qry) or die(mysqli_error($con));

$totalrow = mysqli_num_rows($result);


if($totalrow>=1){

  $data = mysqli_fetch_row($result);



?>




<div class="main" style="margin-top:6rem; margin-left: 9rem;"> 


 <div class="right"> 

    <img src="<?php echo $data[5]?>" alt="" style="height: 8rem; width: 8rem; background-color: blue; 
    
    margin-left: 4.5rem; margin-top:6rem;">

       <h2 style="margin-left: 6.4rem; color: white;"> </h2>

   
 </div>




 <div class="left">  

   
<a href="room.php" style="margin-right: 2rem; margin-left: 15rem;" > Profile </a>

<a href="edit.php"> Edit </a>

<a href="settingsadmin.php" style="margin-left: 2rem;"> Settings </a>
 



<table  style="margin-left: 11rem;">

<tr><td> <h3> Settings  </h3></td></tr>


<form action="settingsadmin.php?&email=<?php echo $email?>" method="post">
   
   <tr><td><h3> <input style="margin-left: 3rem;" type="text" placeholder="Email" name="email" ></h3></td></tr>
 
  <tr><td><h3> <input style="margin-left: 3rem;" type="text" placeholder="Password" name="password" ></h3></td></tr>
 
  <tr><td> <h3> <input style="margin-left: 3rem;"type="text" placeholder="Confirm Password" name="confirm"></h3></td></tr>
 
  
  <tr> <td> <button style="margin-left: 16.6rem; background:black;"onclick="check(this.form)"> <a href="edit2.php
  " style= "background:black;text-decoration: none; color:white;">  save </a> </button> </td> </tr>
 
  


</form>




</table>

</div>


   </div>


       <?php
       
}
       
       ?>
    

</div>

</div>








    
</body>

</html>

<?php
}
else
{
  header("location:login.html");
}

?>