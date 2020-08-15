<!doctype html>
<html>
<head>
  <meta charset=utf-8>
  <title>MONTH WISE</title>
  <link rel="stylesheet" a href="css\Monthwise.css">
  <script src="js/noback.js"></script>
</head>
<body>
  <form action="" method="post" class="mainForm">

  	<h1>MONTHLY ADMISSION REPORT</h1>

    <input type="text" name="month" list="month1" placeholder="Select Month">
    <datalist id="month1">
                <option value="JANUARY">
                    <option value="FEBRUARY">
                      <option value="MARCH">
                        <option value="APRIL">
                          <option value="MAY">
                            <option value="JUNE">
                              <option value="JULY">
                                <option value="AUGUST">
                                  <option value="SEPTEMBER">
                                    <option value="OCTOBER">
                                      <option value="NOVEMBER">
                                        <option value="DECEMBER">
      </datalist>

    <input type="submit"  name="submit"  value="Submit">
    <input type="submit"  name="back"   value="Back">
    <table style='color:white' cellpadding="5" cellspacing="1" border="1" align="center" >
                    <thead>
                      <tr>
                        <th>D.O.A</th>
                        <th>ENROLL NO</th>
                        <th>STUDENT NAME</th>
                        <th>GENDER</th>
                        <th>FATHER NAME</th>
                        <th>FATHER OCCUPATION</th>
                        <th>EMAIL</th>
                        <th>ADDRESS</th>
                        <th>PHONE NUMBER</th>
                        <th>SESSION</th>
                        <th>TIMING</th>
                        <th>FEES</th>
                        <th>SCHEME</th>
                      </tr>
                    </thead>

    <?php
    $con = mysqli_connect('localhost','root','','csc'); // database connection


    if(isset($_POST['month']))

    {
      $mon=$_POST['month'];

      $res= "SELECT  * from  admission where MONTHNAME(DOA)='$mon'";

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
              <td><?php echo htmlentities($row['5']);?></td>
              <td><?php echo htmlentities($row['6']);?></td>
              <td><?php echo htmlentities($row['16']);?></td>
              <td><?php echo htmlentities($row['14']);?></td>
              <td><?php echo htmlentities($row['15']);?></td>
              <td><?php echo htmlentities($row['19']);?></td>
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
