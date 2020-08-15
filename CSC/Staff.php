
<?php
session_start();

$uid=$_SESSION['username'];
if(empty($uid))
{
	header("location:login.php");
}

if (isset($_GET['Logout']))
{
		echo '<script language="javascript">';
		echo 'alert ("You Have Sucessfully Logout")';
		echo '</script>';

		unset($_SESSION['username']);
		session_destroy();
	 header('Location: login.php');

exit;
}
if (isset($_GET['Logout']))
{
	  unset($_SESSION['username']);
		session_destroy();

	 header('Location: login.php');

exit;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Staff Portal</title>
	<link rel="stylesheet" a href="css\Staff1.css">


</head>
<body>
	<form action="" method="get" method="post" class="mainForm">

		<input type="submit" name="Logout" value="Logout"/>

	<div class="header1">

		<img src="img/csc1.jpg" alt="logo" >

		</div>


	<div class="header">
	<h1>STAFF PORTAL</h1>
</div>

<div class ="header1">
<h2>Welcome, <?php echo $_SESSION['username'];?>!</h2>
</div>

	<div class="main">


		<div class="submain">
			<input class="Admission" type="button" name="" value="Admission" onclick="window.location.href='Admission.php'" >
			<input class="Enquiry " type="button" name=""  value="Enquiry"onclick="window.location.href='Enquiry.php'">
		</div>

		<div class="mainsub">
			<input class="STAFF" type="button" name="" value="Change Password" onclick="window.location.href='ChangePassword.php'"><br>
		</div>

		<div class="submain1">
			<input class="AdmissionReport" type="button" name="" value="AdmissionReport"  onclick="window.location.href='AdmissionReport.php'">
			<input class="EnquiryReport" type="button" name="" value="EnquiyrReport" onclick="window.location.href='EnquiryReport.php'"><br>
		</div>



	</div>
</form>
</body>
