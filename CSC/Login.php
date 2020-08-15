<?php  //php code for login validation


session_start();  // starting a Session

$con = mysqli_connect('localhost','root','','csc') ; // database connection

if(isset($_POST['username']))// database injection
{
  $username = $_POST['username'];
  $password = $_POST['password'];

  $result=mysqli_query($con,"SELECT * FROM Admin WHERE AdminName='".$username."' AND AdminPassword='".$password."'  "); // geeting the username and password
  $result1=mysqli_query($con,"SELECT * FROM registration WHERE username='".$username."' AND password='".$password."'  "); // geeting the username and password


        if(mysqli_num_rows($result)==1) // checking the validation of username and password
        {
          $_SESSION['username'] = $username;

          header('Location:Admin.php');  // if username and password is correct redirect to next page
        }

      elseif(mysqli_num_rows($result1)==1) // checking the validation of username and password
         {
           $_SESSION['username'] = $username;


           header('Location:Staff.php');  // if username and password is correct redirect to next page
         }


         else // if username and password is incorrect displays
          {
            echo '<script language="javascript">';
            echo 'alert ("UserName and Password is Incorrect")';
            echo '</script>';

          }
        }



      ?>

<!-html program starts ->

<html lang="en-US">
<head>
  <meta charset="utf-8">
  <title>LOGIN</title>
  <link rel="stylesheet" a href="css\Login1.css">

    <script src="js/noback.js"></script>
</head>
<body onLoad="noBack();" onpageshow="if (event.persisted) noBack();" onUnload="">
  <form action="" method="post" class="mainForm">
    <center><h2> LOGIN </h2></center>

	 <input type="text" placeholder="UserName" name="username" value=""required/>
   <input type="password" placeholder="Password" name="password" value=""required/>
   <input type="submit" value="LOGIN"/>


  </form>

  </body>
  </html>
