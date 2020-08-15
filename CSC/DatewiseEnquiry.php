

<!doctype html>
<html>
<head>
  <meta charset=utf-8>
  <title>DATE WISE</title>
  <link rel="stylesheet" a href="css\Datewise.css">
<script src="js/noback.js"></script>
</head>
<body>


  <form action="" method="post" class="mainForm">

  	<h1>DATE WISE ENQUIRY REPORT</h1>

    <input  onfocus="(this.type='date')" placeholder="D.O.E"  type="text" name="dob"  id="date" >



    <input type="submit"  name="submit"value="Submit">
    <input type="submit"  name="back"value="Back">
    <table style='color:white' cellpadding="5" cellspacing="1" border="1" align="center" >

      <thead>
        <tr>
          <th>D.O.E</th>
          <th>STUDENT NAME</th>
          <th>GENDER</th>
          <th>EMAIL</th>
          <th>ADDRESS</th>
          <th>PHONE NUMBER</th>
          <th>QUALIFICATION</th>
          <th>PREFFERED TIMING</th>
          <th>COURSE PREFFERED</th>
          <th>REMARKS</th>
          <th>SESSION HANDLED</th>

        </tr>
      </thead>


    <?php
    $con=new  mysqli('localhost','root','','csc'); // database connection

    if(isset($_POST['dob']))
    {
      $doe=$_POST['dob'];


      $res= "SELECT  * from enquiry where doe='$doe' ";



      if($result=mysqli_query($con,$res))
        {

            while($row=mysqli_fetch_row($result))
            {
              ?>


                <tbody>

      				<tr>

      					<td><?php echo htmlentities($row['1']);?></td>
      					<td><?php echo htmlentities($row['2']);?></td>
      					<td><?php echo htmlentities($row['3']);?></td>
      					<td><?php echo htmlentities($row['4']);?></td>
      					<td><?php echo htmlentities($row['5']);?></td>
      					<td><?php echo htmlentities($row['6']);?></td>
                <td><?php echo htmlentities($row['7']);?></td>
                <td><?php echo htmlentities($row['8']);?></td>
                <td><?php echo htmlentities($row['9']);?></td>
                <td><?php echo htmlentities($row['10']);?></td>
                <td><?php echo htmlentities($row['11']);?></td>


      				</tr>

      							<?php
                }
            }
            if(isset($_POST['back']))
            {
              header('Location:EnquiryReport.php');  // if username and password is correct redirect to next page
            }
        } ?>
      				</tbody>
      			</table>

</form>
</body>
</html>
