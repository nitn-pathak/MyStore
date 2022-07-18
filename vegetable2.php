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
    <title>Product</title>
    <link rel="stylesheet" href="product.css">
   
  
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

   <?php
    $email= $_SESSION["email"];
   
     $name= $_SESSION["name"];
    
    
    ?>

     <!-- <h6> <?php echo ($email)?></h6>
  
     <h6> <?php echo ($name)?></h6> -->

   <a href="Favourite.php"  style="text-decoration: none; color: white;">  <img src="images/heart.png" alt="" style="margin-right: 1rem; margin-top: 3rem; height: 1.7rem; width:1.7rem;">   </a>

<a href="addtobag.php"  style="text-decoration: none; color: white;">  <img src="images/shopping-bag (1).png" alt="" style="margin-right: 1rem; margin-top: 3rem; height: 1.7rem; width:1.7rem;">   </a>

<a href="d.php"  style="text-decoration: none; color: white;">  <img src="images/user.png" alt="" style="margin-right: 1rem; margin-top: 3rem; height: 1.7rem; width:1.7rem;">   </a>



    
  </nav>


  </header>


  


</div>

<?php

include("db.php");


$id = $_GET['id'];

$qry =" select * from product where pid = $id";

$result = mysqli_query($con,$qry) or die(mysqli_error($con)); 


         

  $n = mysqli_fetch_row($result);


  if($n>0){


    ?>

  <div class="main">        

    <div class = "parent" style="margin-top: 4rem; margin-left: 7rem;" > 

        
        <div style="  height:24.5rem; width:23rem;  margin-right: 1rem; "> 
            
            <img src="<?php echo($n[7]) ?>" alt="" style="height: 25rem ; width:23rem ;">
          
       </div>
  


        <div style=" height: 25rem; width: 23rem; margin-right: 1rem;"> 

        <img src="<?php echo($n[8]) ?>" alt="" style="height: 25rem ; width:23rem ; ">
           
            </div>
          
        
                      <!-- Div-2 -->
            <div style="  height: 24.5rem; width: 23rem; margin-left: 3rem;"> 

            
                
            <form action="addtobag2.php?id=<?php echo $n[0]?>&email=<?php echo $email ?>&productname=<?php echo($n[6])?>&price=<?php echo($n[5])?>&image=<?php echo($n[7])?>" method="post">

                  <table>

                <!-- <img src="images/_shoe3.webp" alt="" style="height: 25rem ; width:23rem ;"> -->
             
                <h2 style="margin-top: 0rem;"> <?php echo($n[6]) ?> </h2>
               
                <h4> &#8377; <?php echo($n[5]) ?> </h4>

              
                
                <!-- <tr> <td>        <select name="param" class="addtocart" style="text-align:center" required> 
                      
                      <option value ="null">Select Size</option>
                      <option>Small</option>
                      <option >Medium</option>
                      <option>Large</option>
                      <option>Extra Large</option>
               
                   
                          </select>              
                          </td></tr> -->



              

                <tr> <td>   
                  <select name="qantity" class="addtocart" style="text-align:center" required >
                    
                    <option value ="null">  Select Quantity </option>
                    <option>   1  </option>
                    <option>   2</option>
                    <option>  3</option>
                    <option>  4</option>
                    <option>  5</option>
                    <option>   6</option>
                    <option>7</option>
                
                        </select>              
                      
                      </td></tr>

                				   

   
      
   <tr> <td>     <a style="text-decoration: none; color: white;"  href="addtobag2.php?id=<?php echo $n[0]?>&email=<?php echo $email ?>&productname=<?php echo($n[6])?>&price=<?php echo($n[5])?>&image=<?php echo($n[7])?>&image=<?php echo($n[7])?>">     <button class="addtocart" > Add to Bag </button> </a> </td></tr>
               

          
                 <!-- <tr> <td>   <a  style="text-decoration: none; color: white;" href="Favourite.php?id=<?php echo $n[0]?>&email=<?php echo $email ?>">  <button class="addtocart" > addtocart </button>   </a></td></tr>
                 -->
 </table>

                 </form>
  
                
                 <tr> <td>     <a style="text-decoration: none; color: white;"  href="Favourite2.php?id=<?php echo $n[0]?>&email=<?php echo $email ?>&productname=<?php echo($n[6])?>&price=<?php echo($n[5])?>&image=<?php echo($n[7])?>&image=<?php echo($n[7])?>">     <button class="addtocart" > favrourite</button> </a> </td></tr>
      

         
                   

        






                <!-- <h4> Select Color </h4>
         -->
                <!-- <table>

                  <tr>
                   <td class="colorbutton">
                     <button style="background-color: red;"></button>
                     <button style="background-color:yellow;"></button>
                     <button style="background-color:blue;"></button>  
                   
                     <button style="background-color:plum;"></button>
                     <button style="background-color:lightgreen;"></button> </td> 

                 </table> -->

            </div>
    

        </div>


        <!-- <div class = "parent" style="margin-top: 2rem; margin-left: 7rem;" > 

        
            <div style="  height:24.5rem; width:23rem; background-color: rgb(255, 83, 83); margin-right: 1rem; "> 
              
                <img src="<?php echo($n[9])?>" alt="" style="height: 25rem ; width:23rem ;">
              
           </div>
       -->
    
    
            <!-- <div style="  background-color: blueviolet; height: 24.5rem; width: 23rem; margin-right: 1rem;"> 
    
                 <img src="" alt="this is img" style="height: 25rem ; width:23rem ; "> 
                 
                </div>
       
                <div style=" height: 25rem; width: 23rem; margin-left: 3rem; "> 
     -->
                  <!-- <button class="addtocart"> ADD to Cart </button>
               
                  <button class="addtocart" style="margin-top: 1rem;"> ADD to Favorite </button> -->
                
                <!-- <h3 > Add to Cart </h3>
                <br>
                <h3> Add to Favorite </h3> -->

             
                 
                </div>
       


            </div>

           <?php } ?>

          </div>



          <div class="footer">


            <div class="left" >
          
            
            
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
  




          
</body>

</html>
<?php
}
else
{
  header("location:login.html");
}

?>