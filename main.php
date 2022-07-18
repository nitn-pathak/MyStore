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
    <title>T-Shirt</title>
    <link rel="stylesheet" href="main.css">
    <script src="main.js"></script>

</head>

<body>

   
  <header >



  <a href="main.php" style="text-decoration: none; color: black;"><img class= "mainlogo" src="images/online-shopping.png" alt="" style="margin-top:2rem; margin-left: 2rem;"> </a>

<a href="main.php" style="text-decoration: none; color: black;">  <h2 style="padding: 0; margin-right: 12rem; margin-top:3rem;">  My Store </h2> </a>
       


   <nav class="nav1" style=" margin-top: 3rem; display: flex; margin-right: 7rem;"> 

    <div class="dropdown">

        <button class="dropbtn" style="height: 2rem; width: 9rem;  border: none; background-color: white; font-size:large; margin-right: 2rem;"> New Release </button>
    
      <div class="dropdown-content" style="margin-right:10rem; ">
    
     
        <a href="shoe.php">Shoes</a>
        <a href="clothes.php">Clothes</a>
       
     </div>
    
    </div>
    
    <div class="dropdown">

        <button class="dropbtn" style="height: 2rem; width: 7rem;  border: none; background-color: white; font-size:large; margin-right: 2rem;"> Grocery </button>
    
      <div class="dropdown-content">
      <a href="vegetable.php">Vegetables</a>
        <a href="fruits.php">Fruites</a>
        <a href="snacks.php">Snacks</a>
        <a href="bevrages.php">Beverages</a>
    </div>
    
    </div>

    
    <div class="dropdown">

        <button class="dropbtn" style="height: 2rem; width: 7rem;  border: none; background-color: rgb(253, 252, 252); font-size:large; margin-right: 2rem;"> Clothes </button>
    
      <div class="dropdown-content" >
    
      <a href="tshirt.php">Tops-T-Shirt</a>
        <a href="hoodie.php">Hoodies and Sweatshirts</a>
         <a href="jackets.php">Jackets</a>
         <a href="pants.php">Pants</a>
         <a href="shorts.php">Shorts</a>
        


        
    </div>
    
    </div>
   

    <div class="dropdown">

        <button class="dropbtn1" style="height: 2rem; width: 7rem;  border: none; background-color: rgb(253, 252, 252); font-size:large; margin-right: 2rem; ">Shoes </button>
    
      <div class="dropdown-content">
    
        <a href="shoe"> Casual</a>
       
    </div>
    
    </div>
   
    


   </nav>


   <nav>



   <?php
    $email= $_SESSION["email"];
   
     $name= $_SESSION["name"];
    
    
    ?>

     <!-- <h6> <?php echo ($email)?></h6>
  
     <h6> <?php echo ($name)?></h6>  -->


 
 <a href="Favourite.php"  style="text-decoration: none; color: white;">  <img src="images/heart.png" alt="" style="margin-right: 1rem; margin-top: 3rem; height: 1.7rem; width:1.7rem;">   </a>

<a href="addtobag.php"  style="text-decoration: none; color: white;">  <img src="images/shopping-bag (1).png" alt="" style="margin-right: 1rem; margin-top: 3rem; height: 1.7rem; width:1.7rem;">   </a>

<a href="useraccount.php"  style="text-decoration: none; color: white;">  <img src="images/user.png" alt="" style="margin-right: 1rem; margin-top: 3rem; height: 1.7rem; width:1.7rem;">   </a>


    
  </nav>


  </header>


</div>

<?php
        include("db.php");
        $qry ="SELECT * FROM product WHERE pcategory ='Clothes'";
        $result = mysqli_query($con,$qry) or die(mysqli_error($con));
        $data = mysqli_fetch_row($result);

            ?>


<div class="main">   
    
        <?php
            
            $qry ="SELECT * FROM product WHERE pcategory ='Clothes'";
            $result = mysqli_query($con,$qry) or die(mysqli_error($con));
            $totalrow = mysqli_num_rows($result);
 

            $row = intdiv($totalrow,3);
            if($totalrow%3 != 0){
                $row++;
            }

            

            for($i=1; $i<=$row; $i++){

                

                ?>

                <div style="margin-top: 6rem;"> 

                <?php
                for($j=1;$j<=3;$j++){           
                    $data = mysqli_fetch_row($result);
                    
                    ?>

         
                     
                   
                    <div style="  height:21rem; width:20rem; background-color: gainsboro; margin-right: 4rem; " >
                    
                      
                    <a href="product.php?id=<?php echo $data[0]?>"  style ="text-decoration: none;">

                    <img   class ="productimg" src="<?php echo $data[7]?>" alt="">  <p style="color: black;"><?php echo $data[6]?></p>
                      </a>    
                  
                        <p style="color: black; "> Rs<?php echo $data[5]?></p>

                  
                    </div>
                    
                    <?php
                }
                ?>
                </div>
                <?php
            }
        ?>

  
</div>

</a>

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