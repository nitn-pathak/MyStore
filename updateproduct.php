<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product </title>
    <link rel="stylesheet" href="updateitem.css">
  

</head>

<body>


  


<header>

<div style="display: flex;">   

<a href="room.php" style="text-decoration: none; color: black;"><img class= "mainlogo" src="images/online-shopping.png" alt="" style="margin-top:2.8rem; margin-left: 2.6rem; height: 3rem; width: 3rem; "> </a>

<a href="room.php" style="text-decoration: none; color: black;">  <h2 style="padding: 0; margin-right: 10rem; margin-top:4rem; margin-left: 1rem;">  My Store </h2> </a>
 
  
   <div class ="content" style="margin-right:8rem; margin-top: 3rem;">

    <h3>
       <a href="room.php" style="margin-right: 2rem; margin-left: 0rem; text-decoration: none; color: black;" >View Profile</a> 
    
          <a href="list-items.html" style="margin-right: 2rem; text-decoration: none; color: black;"> Add Item </a>
          <a href="viewitem.php" style="margin-right: 2rem; text-decoration: none; color: black;"> View Item </a>

         <a href="updateproduct.php" style="margin-right: 2rem; text-decoration: none; color: black;">Update Item</a>

         <a href="deleteproduct.php" style="margin-right: 2rem; text-decoration: none; color: black;">Delete Item</a>



                </h3>
    </div>


    <h2 style="margin-top: 3.8rem; margin-left: 0rem;">Admin Panel</h2>



 </div>
     
</header>






      
     






<?php

include("db.php");

$qry =" select * from product ";

$result = mysqli_query($con,$qry) or die(mysqli_error($con));

?>

   
        <div style="height: 40rem; width: 70rem;  margin-left:8rem;  ">
      
      
          <h2 style="margin-left:25rem; margin-top: 1rem;"> Update Product Details </h2>

     
     <?php
     while($n = mysqli_fetch_row($result))
     {
     ?>    
<form action="updateitem.php" method="post">

    <table class="view" style="margin-left:0rem; margin-top: 2rem; ">

        <tr>
          <th>Pid</th>
          <th>Shoes</th>
           <th> Type</th>
           <th> Parameter</th>
           <th> Colour</th>
           <th>Price</th>
           <th>Pname</th>
           
        </tr>

        <tr class="input"  >
      
          <td><input type="text" style="width: 1rem;"   name="pid" value="<?php echo($n[0])?>"></td>
          <td><input type="text" value=" <?php echo($n[1])?>" name="pcat" style="margin-left: 1rem;" ></td>
          <td><input type="text"   value=" <?php echo($n[2])?>" name="ptype" style="margin-left: 1rem;"></td>
          <td><input type="text" name="param"  style="width: 7rem;"  value=" <?php echo($n[3])?>"  style="margin-left: 1rem;"></td>
          <td><input type="text"     style="width: 7rem;"  name="color" value=" <?php echo($n[4])?>"  style="margin-left: 1rem;"></td>
          <td><input type="text"   name="price"   value=" <?php echo($n[5])?>"  style="margin-left: 1rem;"></td>
          <td><input type="text" style="width: 7rem;" name="pname"  value=" <?php echo($n[6])?>" ></td>
          <td> <img src=" <?php echo($n[7])?>" alt="" height="100vh" width="100vw" style="margin-left: 3rem;"> </td>
          <!-- <td> <img src=" <?php echo($n[8])?>" alt="" height="100vh" width="100vw"> </td>
          -->
         
          

        <td> <button style="background-color: black; color: white; border-radius: .4rem; ">Edit</button></td>
       

          
        </tr>

        <tr>
          <th></th>
          <th></th>
           <th></th>
           <th></th>
           <th></th>
           <th></th>
           <th></th>
           <th> <input type="file" name="image1" style="margin-left: 3rem;"> </th>
           
        </tr>

        
        
      </table>

    </form>

        
<!-- <button>Edit</button> 
<button>Delete</button>  -->

  <?php

}

?>     
      
      </div>

</div> 


</div>





          
</body>

</html>