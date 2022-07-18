<?php

session_start();
if(isset($_POST["email"]))
{

$uid=$_POST["email"]; 
$upass=$_POST["password"]; 



  include("db.php");


    $email = $_POST["email"];

    $password = $_POST["password"];



    $qry ="select  email from admin where email='$email' and password ='$password' ";
    // $qry = "select email,password,name,dob,gender from register where email = '$email'";

     $result = mysqli_query($con,$qry) or die(mysqli_error($con));


        // $n = mysqli_fetch_row($result);
        $n = mysqli_num_rows($result);


        if($n>0){

          

          $_SESSION["email"]=$email;
          $row = mysqli_fetch_row($result);
         $_SESSION["name"] = $row[1];
         // $row = mysqli_fetch_row($result);
              
              //  echo($n[0]);
              
              //  echo($n[1]);
               
              //  echo($n[2]);
               
              //  echo($n[3]);
              
              //  echo($n[4]);
             
            
           header("Location:room.php");

                }

             else{
            
               echo("invalid user");


                }
              
              }

              else{


            header("Location:login.html");
                
              }





      


?>