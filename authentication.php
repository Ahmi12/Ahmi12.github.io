<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

   $con=new mysqli('localhost','root','','icecream') or die('Could not connect: ' . mysqli_connect_error());
    


   if(isset($_POST["submit"]))
   
       {              
        $firstname=$_POST["firstname"];
        $username=$_POST["username"];
        $password=$_POST["password"];
   
           $xyz="INSERT INTO Ice (first_name,username,password) VALUES
                ('$firstname','$username','$password')";
   
          mysqli_query($con,$xyz);
           mysqli_close($con);
           echo "Thank you for signing up. Click here to <a href='login.php'>Login</a>";
        }

        if(isset($_POST["login"]))
        
        {
           
           $username=$_POST["username"];
           $password=$_POST["password"];

           $abc="SELECT * FROM Ice WHERE username='$username' AND password='$password'";
           
           $checking = mysqli_query($con,$abc);

           if (!$checking) 
           {
            die(mysqli_error($con)); 
        }

       
           
           if(mysqli_num_rows($checking) >= 1)    
           {
$output="";
          
          include("home.html");
            }
    
            else {

            echo "User does not exists in database. Click here to <a href=signup.php>Sign Up</a>";
           }

         
            
        }

?>
</body>
</html>