<?php


$con=new  mysqli('localhost','root','','csc');
include 'Backvalidation.php';
if($con->connect_errno)
{
  	   echo $con->connect_errno;
  	  die();
}
      if(isset($_POST['submit']))  // database injection
  {
                                      $doe= $_POST['doe'];
                                      $name=$_POST['studentname'];
                                      $gender=$_POST['Gender'];
                                      $email=$_POST['email'];
                                      $address=$_POST['address'];
                                      $phonenumber=$_POST['phonenumber'];
                                      $qualificaiton=$_POST['qualification'];
                                      $time=$_POST['timepre'];
                                      $course=$_POST['course'];
                                      $remarks=$_POST['remarks'];
                                      $sessionhan=$_POST['sessionhan'];
         if($name!="" && $doe!="")
           {
               $sql= "INSERT INTO enquiry(doe, studentname , gender, email, address, phonenumber, qualification, timing, course, remarks, sessionhandle)VALUES ('$doe','$name','$gender','$email','$address','$phonenumber','$qualificaiton','$time','$course','$remarks','$sessionhan')";
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
          echo 'alert ("Please Enter All The Data")';
          echo '</script>';
        }



 ?>


<html>
<head>
  <meta charset=utf-8>
  <title>ENQURY</title>
    <link rel="stylesheet" a href="css\Enquiry1.css">

  <script src="js/noback.js"></script>

</head>
<body>
    <form action="" method="get" method="post" class="mainForm">
       <h3>Enquiry Form</h3>
<div class="main">
       <div class="submain1">
         <input class="name " type="text" placeholder="Student Name" name="studentname"  >
         <input class="gender" type="text" name="Gender" list="gen"  placeholder="Gender" >

         <datalist id="gen">
           		<option value="Male">
             	<option value="Female">
               	 <option value="Transgender"><br></br>
            </datalist>
       </div>

       <div class="submain2">
         <input class="email" type="email" placeholder="E-Mail" name="email">
         <input class="Address" type="address" placeholder="Address" name="address" >
       </div>

<div class="submain3">
      <input class="phone" type="text" placeholder="Phone Number" name="phonenumber" >
      <input class="doe" onfocus="(this. type='date')" placeholder="D.O.E" type="text" name="doe" id="date" >
</div>

<div class="submain4">
<input class="course "type="text" name="course" list="course" placeholder="Course Preffered">
<datalist id="course">
        <option value="DCA TALLY">
        <option value="DCA (C)">
        <option value="DMO">
        <option value="DCP">
        <option value="ADCP">
        <option value="ADJP">
        <option value="PYTHON">
        <option value="HDCP">
        <option value="HDCA">
        <option value="HDCA TALLY">
        <option value=".NET">
        <option value="J2EE">
        <option value="MDSA">
        <option value="DAST">
        <option value="WAMP">
        <option value="CCAE">
        <option value="TALLY.ERP9"><br></br>
 </datalist>
 <input class="qualification "type="text" name="qualification" list="qualifi" placeholder="Qualification">
 <datalist id="qualifi">
         <option value="5th">
         <option value="6th">
         <option value="7th">
         <option value="8th">
         <option value="9th">
         <option value="10th">
         <option value="+1">
         <option value="+2">
         <option value="B.COM">
         <option value="B.C.A">
         <option value="BSC ">
         <option value="B.E CSC">
         <option value="B.E MECH">
          <option value="B.E ECE">
          <option value="B.E EEE">
          <option value="B.E CIVIL"> <br></br>
  </datalist>
</div>
<div class="submain6">
  <input class="time "type="text" name="timepre" list="time" placeholder="Preferred Timing">
  <datalist id="time">
          <option value="7.00-8.30 Am">
          <option value="8.30-10.00 Am">
          <option value="10.00-11.30 Am">
          <option value="11.30-1.00 Pm">
          <option value="1.30-3.00 Pm ">
          <option value="3.00-4.30 Pm">
          <option value="4.30-6.00 Pm">
          <option value="6.00-7.30 Pm">
          <option value="7.30-9.00 Pm"><br></br>
   </datalist>

 <input class="sessionhan" type="text" placeholder="Session Handled By" name="sessionhan"><br></br>
</div>

<div class="submain7">
 <input class="remarks" type="text" placeholder="Remarks" name="remarks" ><br></br>
 </div>
</div>


   <input class="submit"  type="submit" name="Submit"  value="Submit">
   <input  class="Back" type="submit" name="return" value="Back" >

</form>
</body>
</html>
