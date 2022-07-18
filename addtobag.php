
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

    <title>Bag</title>
   <script src="main.js"></script>
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
          
              <a href="grocery.php">Grocery</a>
              <a href="shoe.php">Shoes</a>
              <a href="clothes.php">Clothes</a>
             
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
         
          <?php
    $email= $_SESSION["email"];
   
     $name= $_SESSION["name"];
    
    
    ?>

     <!-- <h6> <?php echo ($email)?></h6>
  
     <h6> <?php echo ($name)?></h6>  -->



          
      <?php   

      include("db.php");


    $qry ="SELECT SUM(price) as total FROM cart where email = '$email'";

    $result = mysqli_query($con,$qry) or die(mysqli_error($con));



    $qryy =" SELECT * from total ";

  $data = mysqli_query($con,$qry) or die(mysqli_error($con));




   $n = mysqli_fetch_row($data);
  
               
   while($n = mysqli_fetch_row($result)){

            

?>




      
         </nav>
      
      
         <nav>
      
          <?php
          $email= $_SESSION["email"];
         
           $name= $_SESSION["name"];
          
          
          ?>
      
           <!-- <h6> <?php echo ($email)?></h6>
        
           <h6> <?php echo ($name)?></h6> -->


         <a href="Favourite.php"  style="text-decoration: none; color: white;">  <img src="images/heart.png" alt="" style="margin-right: 1rem; margin-top: 3rem; height: 1.7rem; width:1.7rem;">   </a>

          <a href="addtobag.php"  style="text-decoration: none; color: white;">  <img src="images/bag2.png" alt="" style="margin-right: 1rem; margin-top: 3rem; height: 1.7rem; width:1.7rem;">   </a>
     
          <a href="useraccount.php"  style="text-decoration: none; color: white;">  <img src="images/user.png" alt="" style="margin-right: 1rem; margin-top: 3rem; height: 1.7rem; width:1.7rem;">   </a>
     
          
        </nav>
      
      
        </header>


        <div> 


            <h2 style="margin-left:6rem; margin-top: 1rem;"> Bag  </h2>
     
         </div>

         <div style=" height: 17rem; width: 15rem; margin-left: 35rem; ">

          <table>
               <tr>
                  <td> <h2>Summary </h2> </td>
          
               
                 <tr><td><hr></td></tr>
              </tr>
            
              
              <tr><td>  Total &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp;  &#8377;<?php echo $n[0];?>  </td></tr>
              
              <tr><td><hr></td></tr>

            <tr><td> <button class="addtocart"> Pay </button></td></tr>   
               
          </table>
          </div>
  
            
          <?php  }?>
      
          
            <?php





// $id = $_GET['id'];



$qry ="select * from cart where email ='$email'";

$result = mysqli_query($con,$qry) or die(mysqli_error($con)); 



  // $n = mysqli_fetch_row($result);



         
         
  while($n = mysqli_fetch_row($result)){



  if($n>0){

    ?>


  <div class="main" style=" display: flex; margin-right: 30rem; ">      
    
    

    


    <div class = "parent" style=" margin-left: 25rem; width: 48rem;   "   > 

        
       


        <div style=" height: 18rem; width: 16rem; margin-right: 1rem;"> 


        <form action="addtobag2.php?id=<?php echo $n[1]?>&email=<?php echo $email ?>&productname=<?php echo($n[2])?>&price=<?php echo($n[5])?>&image=<?php echo($n[6])?>&quantity=<?php echo($n[4])?>&size=<?php echo($n[3])?>" method="post">


        <img src="<?php echo($n[6]) ?>" name="image" alt="" style="height: 18rem ; width:16rem ;">
           
            </div>
          
        
                      <!-- Div-2 -->
            <div style="  height: 20.5rem; width: 22rem; margin-left: 1rem; margin-right: 6rem; "> 
                
             
                <h2 style="margin-top: 0rem;" name="productname"> <?php echo($n[2]) ?> </h2>
               
                                       <h4 style="color:#383737;" name="size"> Size <?php echo($n[3]) ?></h4>
                                       <h4 style="color:#383737;" name="quantity"> Quantity  <?php echo($n[4]) ?></h4>
                                       <h4 style="color:#383737;" name="price"> &#8377; <?php echo($n[5]) ?></h4>
                                       
                                   </form>
              </div>


             
          

       </div>

      
     

        
      </div>
       
           <?php } }?>
          

       

       
    

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