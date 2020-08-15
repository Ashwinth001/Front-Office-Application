<?php
session_start();
$con = mysqli_connect('localhost','root','','csc') ; // database connection



if(isset($_POST['submit']))
{
  $username=$_POST['username'];
  $oldpassword=$_POST['password'];
  $newpassword=$_POST['newpassword'];
  $confirmpassword=$_POST['confirmpassword'];

  $query=mysqli_query($con,"SELECT password from registration where username='$username'");



  while($row=mysqli_fetch_array($query))
  {
     $pass=$row['password'];

       if($pass==$oldpassword)
       {
         if($newpassword==$confirmpassword)
         {
          $q=mysqli_query($con,"UPDATE registration set password = '$confirmpassword' where username ='$username'");


                  if($q)
                   {
                     echo '<script language="javascript">';
                     echo 'alert ("Sucessfully Password Changed")';
                     echo '</script>';
                       header (sleep(5),"url:staff.php");
                    }
        }
                    else {
                      echo '<script language="javascript">';
                      echo 'alert ("Password Does Not Match")';
                      echo '</script>';
                    }
       }
       else
        {
          echo '<script language="javascript">';
          echo 'alert ("Old Password Did not Match")';
          echo '</script>';

       }
  }
      header ("refresh:5","url:staff.php");
}
?>


      <html lang="en-US">
      <head>
        <meta charset="utf-8">
        <title>Change Password</title>
        <link rel="stylesheet" a href="css\ChangePassword1.css">
      <script src="js/noback.js"></script>
      </head>
      <body>
        <form action="" method="post" class="mainForm">
          <center><h2>Change Password</h2></center>

          <input type="text" placeholder="Username" name="username" value=""required/>
         <input type="password" placeholder=" Old Password" name="password" value=""required/>
         <input type="password" placeholder="New Password" name="newpassword" value=""required/>
          <input type="password" placeholder="Confirm Password" name="confirmpassword" value=""required/>


          <input class="submit"  type="submit" name="Submit"  value="Submit">
          <input class="Back" type="button" name="Back" value="Back" onclick="window.location.href='Staff.php'">




        </form>

        </body>
        </html>
