<?php

$con=new  mysqli('localhost','root','','csc'); // database connection

include 'Backvalidation.php';

    if(isset($_POST['Submit'])) // database injection
  {
                                      $Course=$_POST['Course1'];
                                      $Session=$_POST['Session1'];
                                      $Entno=$_POST['Entno1'];
                                      $StudentName=$_POST['Sname1'];
                                      $FatherName=$_POST['Fname1'];
                                      $FatherOccupation=$_POST['Foccupation1'];
                                      $Dob=$_POST['Dob1'];
                                      $Age=$_POST['Age1'];
                                      $Gender=$_POST['Genderr'];
                                      $Religion=$_POST['religion1'];
                                      $Caste=$_POST['caste1'];
                                      $Occupation=$_POST['occupation1'];
                                      $ifemp=$_POST['ifemp1'];
                                      $Address=$_POST['address1'];
                                      $Phone=$_POST['phonenumber1'];
                                      $Email=$_POST['email1'];
                                      $Doa=$_POST['doa1'];
                                      $Fees=$_POST['fee1'];
                                      $Scheme=$_POST['scheme1'];
                                      $Timing=$_POST['timing1'];


         if($Course!="")
           {
               $sql= "INSERT INTO admission(Course,Session,Entno,StudentName,FatherName,FatherOccupation,DOB,Age,Gender,Religion,Caste,Occupation,Ifemp,Address,PhoneNumber,Email,Doa,Fees,Scheme,Timing)
                            VALUES ('$Course','$Session','$Entno','$StudentName','$FatherName','$FatherOccupation','$Dob','$Age','$Gender','$Religion','$Caste','$Occupation','$ifemp','$Address',
                                                               '$Phone','$Email','$Doa','$Fees','$Scheme','$Timing')";

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

<!doctype html>
<html>
<head>
  <meta charset=utf-8>
  <title>Admission</title>
  <link rel="stylesheet" a href="css\Admission.css">

  <script src="js/noback.js"></script>
  </head>
<body>
  <form action="" method="get" method="post" class="mainForm">
  	<div class="header">
     <h3>ADMISSION PORTAL</h3>
      </div>

    <div class="main">
      <div class="submain">
        <input class="coursename" type="text" name="Course1" list="course" placeholder="Course Name" >
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
                <option value"DAST">
                <option value="WAMP">
                <option value="CCAE">
                <option value="TALLY.ERP9"><br></br>
         </datalist>

     <input class="session" type="text" name="Session1" list="ses" placeholder="Session" >
         <datalist id="ses">
                 <option value="Morning">
                 <option value="Evening"><br></br>
          </datalist>

   <input class="entno "  type="text" placeholder="Ent No"  name="Entno1" value="" >
 </div>

       <div class="submain1">
          <input class="name " type="text" placeholder="Student Name" name="Sname1"  value="" >
          <input class="fname " type="text" placeholder="Father Name" name="Fname1" value="" >
          <input class="foccupation " type="text" placeholder="Father Occupation" name="Foccupation1" value="" >
        </div>



            <div class="submain2">
        <input class="dob" onfocus="(this.type='date')" placeholder="D.O.B"  type="text" name="Dob1"  id="date" >
       <input class="age" type="number" placeholder="Age" name="Age1"  value="">

       <input class="gender" type="text" name="Genderr" list="gen" placeholder="Gender" >
        <datalist id="gen">
                <option value="Male">
                <option value="Female">
                <option value="Transgender"><br></br>
         </datalist>

       </div>


       <div class="submain3">
           <input class="religion" type="text" name="religion1" list="reli" placeholder="Religion" >
           <datalist id="reli">
                   <option value="Hindu">
                   <option value="Christian">
                   <option value="Muslim">
                   <option value="Others"><br></br>
            </datalist>
           <input class="caste" type="text" name="caste1" list="cast" placeholder="Caste" >
           <datalist id="cast">
                   <option value="OC">
                   <option value="BC">
                   <option value="MBC">
                   <option value="ST/SC"><br></br>
            </datalist>

            <input class="occupation" type="text" name="occupation1" list="occu" placeholder="Occupation" >
            <datalist id="occu">
                    <option value="Student">
                    <option value="House Wife">
                      <option value="Employed">
                        <option value="Un-Employed">
                    <option value="Business"><br></br>
             </datalist>
          </div>

        <div class="submain4">
        <input class="ifemp" type="text" placeholder="If Employeed" name="ifemp1"  value="">
        <input class="Address" type="text" placeholder="Address For Communication" name="address1"  value="">

      </div>


          <div class="submain5">
              <input class="phone" type="text" placeholder="Phone Number" name="phonenumber1"  value="">
              <input class="email" type="email" placeholder="E-Mail" name="email1"  value="">
              <input class="doa" onfocus="(this.type='date')" placeholder="D.O.A"  type="text" name="doa1"  id="date" >

            </div>

                 <div class="submain6">
                  <input class="fee" type="text" placeholder="Total Fees" name="fee1" value="">
                  <input class="scheme" type="Scheme" placeholder="Scheme" name="scheme1"  value="">
                  <input class="timing " type="time" placeholder="Timing" name="timing1" value="Timing" >

              </div>
        </div>
          </div>


    <div class="submain6">
      <input class="submit"  type="submit" name="Submit"  value="Submit">
      <input  class="Back" type="submit" name="return" value="Back" >

</div>


</form>
</body>
</html>
