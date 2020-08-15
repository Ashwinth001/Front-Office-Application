
<?php include 'Backvalidation.php';?>

<!DOCTYPE html>
<html>
<head>
	<title>Staff Portal</title>
	<link rel="stylesheet" a href="css\EnquiryReport.css">
<script src="js/noback.js"></script>
</head>
<body>
	<form action="" method="get" method="post" class="mainForm">

	<div class="header">
	<h1>ENQUIRY REPORT</h1>
</div>

<input class="submit" type="submit" name="return" value="Return to Homepage" >

	<div class="main">
		<div class="submain">
			<input class="Admission" type="button" name="" value="DATE WISE" onclick="window.location.href='DatewiseEnquiry.php'" >
			<input class="Enquiry " type="button" name=""  value="MONTH WISE"onclick="window.location.href='MonthwiseEnquiry.php'">
		</div>

		<div class="mainsub">
			<input class="STAFF" type="button" name="" value="OVER ALL" onclick="window.location.href='OverallEnquiry.php'"><br>
		</div>



	</div>
</form>
</body>
