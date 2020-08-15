<?php include 'Backvalidation.php';?>

<!DOCTYPE html>
<html>
<head>
	<title>Admission Report</title>
	<link rel="stylesheet" a href="css\AdmissionReport.css">

	   <script src="js/noback.js"></script>
</head>
<body>
	<form action="" method="get" method="post" class="mainForm">

	<div class="header">
	<h1>ADMISSION REPORT</h1>
</div>

  <input class="submit" type="submit" name="return" value="Return to Homepage" >

	<div class="main">
		<div class="submain">
			<input class="Admission" type="button" name="" value="DATE WISE" onclick="window.location.href='DatewiseAdmission.php'" >
			<input class="Enquiry " type="button" name=""  value="MONTH WISE"onclick="window.location.href='MonthwiseAdmission.php'">
		</div>

		<div class="mainsub">
			<input class="STAFF" type="button" name="" value="OVER ALL" onclick="window.location.href='OverallAdmission.php'"><br>
		</div>



	</div>
</form>
</body>
