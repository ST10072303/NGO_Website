<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="regStyle.css">
<title>Patient Records</title>
</head>
<body>
<div class="font"><div class="col- col-s-10 col-s-12 col-12"><h1 id="myHeader">Patient Records</h1></div>    
<ul class="menu"><!-- (navigation menu) -->
  <li><a href="homepage.php">Home</a></li>
  <li><a href="patientReg.php">Patient Registration</a></li>
  <li><a href="patientRecords.php">Patients Records</a></li>
  <li><a href="patientRef.php">Patient Referrals</a></li>
  <li><a href="patientBok.php">Patient Referral Bookings</a></li>
  <li><a href="patientCheckup.php">Patient Check-ups</a></li>
  
</ul></div>


<h1>Patients Records</h1>

      <table>
        <tr>
          <th>Full Names</th>
          <th>Age</th>
          <th>Gender</th>
          <th>Address</th>
		  <th>Contact Number</th>
          <th>Medical condition</th>
        </tr>
        <tr>
   <?php 
        $con = mysqli_connect("localhost","root","","ngodata");

        $query = "SELECT * FROM patients";
        $query_run = mysqli_query($con, $query);

        if(mysqli_num_rows($query_run) > 0)
             {
               foreach($query_run as $row)
                  {
   ?>
     	<tr>
     	<td><?= $row['full_names']; ?></td>
     	<td><?= $row['age']; ?></td>
     	<td><?= $row['gender']; ?></td>
     	<td><?= $row['address']; ?></td>
		<td><?= $row['contact']; ?></td>
        <td><?= $row['medical_condition']; ?></td>
    	</tr>
   <?php
         }
        }
     
       else{
     ?>
  	<tr>
    	 <td colspan="6">No Patient Record to Display</td>
  	</tr>
  <?php
       }
  ?>
  
</table>


<footer>
  
  <p>©2022 Mankweng Gateway Clinic | ACF-USA</p>
  <p>Mankweng Gateway Clinic | ACF-USA is a recognized 501(c)(3)not-for-profit organization by the IRS.</p>
</footer>

</body>
</html>


