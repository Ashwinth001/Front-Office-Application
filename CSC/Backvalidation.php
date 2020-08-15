<?php  //php code for login validation

session_start();  // starting a Session

$con = mysqli_connect('localhost','root','','csc') ; // database connection

if(isset($_GET['return']))// database injection
{
$username=$_SESSION['username'];

  $result=mysqli_query($con,"SELECT * FROM Admin WHERE AdminName='".$username."' "); // geeting the username and password


        if(mysqli_num_rows($result)==1) // checking the validation of username and password
        {
					   $_SESSION['username'] = $username;

          header('Location:Admin.php');  // if username and password is correct redirect to next page
        }
				elseif(mysqli_num_rows($result)!=1)
				{
					 header('Location:Staff.php');  // if username and password is correct redirect to next page
				}
    }
      ?>
