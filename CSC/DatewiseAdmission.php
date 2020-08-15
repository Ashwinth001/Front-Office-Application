

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

  	<h1>DATE WISE ADMISSION REPORT</h1>

    <input  onfocus="(this.type='date')" placeholder="D.O.A"  type="text" name="doa1"  id="date" >



    <input type="submit"  name="submit"value="Submit">
    <input type="submit"  name="back"value="Back">
    <table style='color:white' cellpadding="5" cellspacing="1" border="1" align="center" >

      <thead>
        <tr>
          <th>D.O.A</th>
          <th>ENROLL NO</th>
          <th>STUDENT NAME</th>
          <th>GENDER</th>
          <th>EMAIL</th>
          <th>ADDRESS</th>
          <th>PHONE NUMBER</th>
          <th>TIMING</th>
          <th>FEES</th>
          <th>SCHEME</th>

        </tr>
      </thead>


    <?php
    $con=new  mysqli('localhost','root','','csc'); // database connection

    if(isset($_POST['doa1']))
    {
      $doe=$_POST['doa1'];


      $res= "SELECT  * from admission where DOA='$doe' ";



      if($result=mysqli_query($con,$res))
        {

            while($row=mysqli_fetch_row($result))
            {
              ?>


                <tbody>

      				<tr>
      					<td><?php echo htmlentities($row['17']);?></td>
      					<td><?php echo htmlentities($row['3']);?></td>
      					<td><?php echo htmlentities($row['4']);?></td>
      					<td><?php echo htmlentities($row['9']);?></td>
      					<td><?php echo htmlentities($row['16']);?></td>
      					<td><?php echo htmlentities($row['14']);?></td>
      					<td><?php echo htmlentities($row['15']);?></td>
                <td><?php echo htmlentities($row['20']);?></td>
                <td><?php echo htmlentities($row['18']);?></td>
                <td><?php echo htmlentities($row['19']);?></td>



      				</tr>

      							<?php
                }
            }
            if(isset($_POST['back']))
            {
              header('Location:AdmissionReport.php');  // if username and password is correct redirect to next page
            }
        } ?>
      				</tbody>
      			</table>

</form>
</body>
</html>
