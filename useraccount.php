
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
    <title>Account Detail </title>
    <link rel="stylesheet" href="main.css">
  

</head>

<body>




    
<header >



  <a href="main.php" style="text-decoration: none; color: black;"><img class= "mainlogo" src="images/online-shopping.png" alt="" style="margin-top:2rem; margin-left: 2rem;"> </a>
      
  <a href="main.php" style="text-decoration: none; color: black;">  <h2 style="padding: 0; margin-right: 12rem; margin-top:3rem;">  My Store </h2> </a>
     
   

   <nav class="nav1" style=" margin-top: 3rem; display: flex; margin-right: 7rem;"> 

    <div class="dropdown">

        <button class="dropbtn" style="height: 2rem; width: 9rem;  border: none; background-color: white; font-size:large; margin-right: 2rem;"> New Release </button>
    
      <div class="dropdown-content" style="margin-right:10rem; ">
    
        <a href="food">Grocery</a>
        <a href="shoe">Shoes</a>
        <a href="food">Clothes</a>
       
     </div>
    
    </div>
    
    <div class="dropdown">

        <button class="dropbtn" style="height: 2rem; width: 7rem;  border: none; background-color: white; font-size:large; margin-right: 2rem;"> Grocery </button>
    
      <div class="dropdown-content">
    
        <a href="shoe">Vegetables</a>
        <a href="shoe">Fruites</a>
        <a href="food">Spices</a>
        <a href="vegetables">Snacks</a>
        <a href="food">Beverages</a>
    </div>
    
    </div>

    
    <div class="dropdown">

        <button class="dropbtn" style="height: 2rem; width: 7rem;  border: none; background-color: rgb(253, 252, 252); font-size:large; margin-right: 2rem;"> Clothes </button>
    
      <div class="dropdown-content" >
    
         <a href="shoe">Tops-T-Shirt</a>
          <a href="food">Jerseys and Kits</a>
         <a href="vegetables">Hoodies and Sweatshirts</a>
         <a href="vegetables">Jackets</a>
         <a href="vegetables">Pants</a>
         <a href="vegetables">Tracksuit</a>
         <a href="vegetables">Shorts</a>
         <a href="vegetables">Caps</a>

        
    </div>
    
    </div>
   

    <div class="dropdown">

        <button class="dropbtn1" style="height: 2rem; width: 7rem;  border: none; background-color: rgb(253, 252, 252); font-size:large; margin-right: 2rem; ">Shoes </button>
    
      <div class="dropdown-content">
    
        <a href="shoe"> Casual</a>
        <a href="food"> Running</a>
         <a href="vegetables">Basketbal</a>
         <a href="food">Jordans</a>
         <a href="food">Footbal</a>
         <a href="food">Gym and Tranning</a>
    </div>
    
    </div>
   
    


   </nav>


   <nav>

    <a href="Favourite.php"  style="text-decoration: none; color: white;">  <img src="images/heart.png" alt="" style="margin-right: 1rem; margin-top: 3rem; height: 1.7rem; width:1.7rem;">   </a>

    <a href="addtobag.php"  style="text-decoration: none; color: white;">  <img src="images/shopping-bag (1).png" alt="" style="margin-right: 1rem; margin-top: 3rem; height: 1.7rem; width:1.7rem;">   </a>

    
<a href="useraccount.php"  style="text-decoration: none; color: white;">  <img src="images/user2.png" alt="" style="margin-right: 1rem; margin-top: 3rem; height: 1.7rem; width:1.7rem;">   </a>

    
  </nav>

  <?php
  $email= $_SESSION["email"];
 
   $name= $_SESSION["name"];
  
  
  ?>

   <!-- <h6> <?php echo ($email)?></h6>

   <h6> <?php echo ($name)?></h6>  -->





  </header>







<div class="parent" style="display: flex;">




  <div style=" height: 40rem; width: 50rem;"> 
  
  
          <h2 style="margin-left:2rem; margin-top: 1rem;">Settings</h2>


          <table style=" height: 7vh; width: 20vw;">

  
                     
                     <td><img src="images/user.png" height="30px" width="30px" alt="" style="margin-left: 1.5rem;"></td>
                     <td > <a href="useraccount.php" style="text-decoration: none; color: black;"> <h4 style="margin-left: 2rem;">Account Details</h4></td>    </a>

                     
               
                     <!-- <td><img src="payment.png" style="height: 6rem; width: 6rem;" alt=""> </td>
                       <td>sdvs</td> -->
     
                     </tr>
     
                     
     
                         <tr>
                           <td><img src="images/map.png" height="30px" width="30px" alt="" style="margin-left: 1.5em;"></td>
                         
                           <td > <a href="delivery.php" style="text-decoration: none; color: black;"> <h4 style="margin-left: 2rem;">Delivery Address</h4></td>    </a>
                     
                           
                             </tr>
                             <tr>
                           <td><img src="images/logout.png" height="30px" width="30px" alt="" style="margin-left: 1.5em;"></td>
                         
                           <td > <a href="logout.php" style="text-decoration: none; color: black;"> <h4 style="margin-left: 2rem;">Logout</h4></td>    </a>
                     
                           
                             </tr>

                             
              </table>
  
  
  </div>
      

  <?php

include("db.php");
$qry ="select * from useraccount ";
$data = mysqli_query($con,$qry) or die(mysqli_error($con));
 

$val = mysqli_fetch_row($data);

if($val>=1){


?>



     
   
        <div style="height: 40rem; width: 100rem; ">
      
      
          <h2 style="margin-left:10rem; margin-top: 1rem;"  >Account Details </h2>

     <form action="account.php"   method="post" enctype="multipart/form-data">


          <table  class =" table" style="margin-left:2.5rem;">
          
              <tr><td> <img src="images/n1.jpg" alt=""  style="border-radius:5rem;  height: 5rem; width: 5rem; margin-left: 10rem; margin-top:0rem;">
               </td>
              <tr><td>  <input type="file" name="image1" style="margin-left: 6rem;"></td></tr>
            

            

              </tr>
              <br>

          
          <tr> <td>  
              
               <input type="email" placeholder="email" value="<?php echo ($email)?>"   name="email" style="border-radius:.5rem; height: 2.7rem; width: 24rem; margin-top: 1rem;">  <br> </td> </tr>
               
      
       
          <tr> <td> <input type="tel" placeholder="phoneno" name="phoneno" value="<?php echo $val[1]?>" style="border-radius: .5rem; height: 2.7rem; width: 24rem;  margin-top: 1rem;"></td> </tr>
          
        
          <tr> <td> <input  style="border-radius:  .5rem; height: 2.7rem; width: 24rem;  margin-top: 1rem;" value="<?php echo $val[2]?>"   class="textbox"placeholder="Date of Birth" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" name="dob" required >  </td></tr>

          
          
          <tr> 
          
          <td> Country <br> <select name="country" value="<?php echo $val[3]?>"   style="border-radius: .5rem; height: 2.7rem; width: 24.4rem;  margin-top: 1rem;" >
          
              <option>India</option>
              <option >Usa</option>
              <option >Barzil</option>
              <option >Spain</option>
               
          </select>
          
             
          
          </td> 
          </tr>
          
          
          
          <tr> 
          
          <td> State <br> <select name="state" value="<?php echo $val[4]?>"  style="border-radius:.5rem; height: 2.7rem; width: 24.4rem; margin-top: 1rem;" >
          
              <option>Punjab</option>
              <option >Delhi</option>
              <option >Mumbai</option>
              <option >Himachal</option>
               
          </select>
          
             
          
          </td> 
          </tr>
          
          <tr> <td>   <input type="text"  name="town" value="<?php echo $val[5]?>"    placeholder="Town/City" style="border-radius: .5rem; height: 2.7rem; width: 24rem;  margin-top: 1rem;">  </td> </tr>
          <tr> <td>   <input type="number"   name="postal" value="<?php echo $val[6]?>"  placeholder="PostCode"  style="border-radius:.5rem; height: 2.7rem; width: 24rem;  margin-top: 1rem;" >  </td> </tr>
          
          
          <tr> <td style="text-align: center;"> <button class="joinbutton" onclick="check(this.form)" value="save"  style="  margin-left: 0rem;   border-radius: 5rem; height: 2.5rem; width: 10rem; background-color:black; color: white;  margin-top: 1rem;"> Save</button></td>
        </tr>


        <tr> <td style="text-align: center;">  <button class="joinbutton" onclick="check(this.form)" value="save"  style="  margin-left: 0rem;   border-radius: 5rem; height: 2.5rem; width: 10rem; background-color:black; color: white;  margin-top: 1rem;"> <a href="account1.html" style="background-color:black; color: white; text-decoration:none"> Edit </a></button></td>
        </tr>

        
      
            

          
          </table>
          
      
        </form>
      
      
      
      
      </div>

</div> 



<?php
}
else{

  header("location:account1.html");

}



?>










 <div class="footer">


            <div class="left"  >
          
            <h5 style="margin-left: 1rem; margin-top: 3rem;">FIND STORE</h5>
            <h5 style="margin-left: 1rem;">CONTACT US</h5>
            <h5 style="margin-left: 1rem;">SEND UD FEEDBACK</h5>
            <h5 style="margin-left: 1rem;"> BECOME A MEMBER </h5>
            
          
            <h5 style="text-align:center; margin-top: 6rem; font-weight: lighter; color: white;">  &#169;  2022 MyStore All Rights Resrved</h5>
          
             
          
            </div>
          
            <div class="right" > 
          
              <img style=" margin-left: 25rem;" src="images/facebook (1).png" alt="">
              <img   src="images/intagram.png" alt="">
              <img  src="images/twitter (1).png" alt="">
              <img  src="images/youtube (2).png" alt="">
            </div>
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