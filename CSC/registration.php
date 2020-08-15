<?php

$con=new  mysqli('localhost','root','','csc'); // database connection

if($con->connect_errno)  // condition checking whether the connection is sucess or no
{
  echo $con->connect_errno;
  die();

}


    if(isset($_POST['submit1'])) // database injection
    {
      $name=$_POST['username'];
      $email=$_POST['email'];
      $password=$_POST['password'];

         if($name!="" && $password!="")
           {
               $sql= "INSERT INTO registration (username,email,password) VALUES ('$name','$email','$password')";

                    if($con->query($sql))
                    {
                      echo '<script language="javascript">';
                      echo 'alert ("Data Stored")';
                      echo '</script>';
                     }

                     else
                     {
                       echo '<script language="javascript">';
                       echo 'alert ("Insert Data Fail")';
                       echo '</script>';
                     }
           }
         else
          {
            echo '<script language="javascript">';
            echo 'alert ("All Fields Required")';
            echo '</script>';
          }
      }

      else
      {
        echo '<script language="javascript">';
        echo 'alert ("Please Enter All The Details")';
        echo '</script>';
      }


 ?>


<html lang="en-US">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" a href="css\Registration.css">
  <title>REGISTRATION</title>

</head>
<script src="js/noback.js"></script>
</head>
<body>
  <form action="registration.php" method="post" class="mainForm">
    <center><h2>REGISTRATION</h2></center>

    <input type="text" placeholder="UserName" name="username" value=""required/>
    <input type="email" placeholder="E-Mail" name="email" value=""required/>
   <input type="password" placeholder="Password" name="password" value=""required/>
   <input type="submit" name="submit1" value="Register">

	<div class="main">
    <div class="submain">
  <input class="Back" type="button" name="" value="Back" onclick="window.location.href='Admin.php'" >
    </div>
</div>

   <a href="Login.php" style="color:""#fff">LOGIN</a>

  </form>
  </body>
  </html>
