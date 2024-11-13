<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="regStyle.css">
<title>Patient Referral Bookings</title>
</head>
<body>
<div class="font"><div class="col- col-s-10 col-s-12 col-12"><h1 id="myHeader">Patient Referral Bookings</h1></div>    
<ul class="menu"><!-- (navigation menu) -->
  <li><a href="homepage.php">Home</a></li>
  <li><a href="patientReg.php">Patient Registration</a></li>
  <li><a href="patientRecords.php">Patients Records</a></li>
  <li><a href="patientRef.php">Patient Referrals</a></li>
  <li><a href="patientBok.php">Patient Referral Bookings</a></li>
  <li><a href="patientCheckup.php">Patient Check-ups</a></li>
  
</ul></div>

<h1>Patient Referral Bookings</h1>

    <table>
        <tr>
          <th>Full Names</th>
          <th>Contact</th>
          <th>Medical Condition</th>
		  <th>Date</th>
		  <th>Doctor</th>
        </tr>
        <tr>
   <?php 
        $con = mysqli_connect("localhost","root","","ngodata");

        $query = "SELECT * FROM Referrals";
        $query_run = mysqli_query($con, $query);

        if(mysqli_num_rows($query_run) > 0)
             {
               foreach($query_run as $row)
                  {
   ?>
     	<tr>
     	<td><?= $row['fullnames']; ?></td>
     	<td><?= $row['contact']; ?></td>
     	<td><?= $row['medcondition']; ?></td>
		<td><?= $row['date']; ?></td>
     	<td><?= $row['doctor']; ?></td>
    	</tr>
   <?php
         }
        }
     
       else{
     ?>
  	<tr>
    	 <td colspan="6">No Patient Booking Available</td>
  	</tr>
  <?php
       }
  ?>
  
</table>


<footer>
  
  <p> <p>©2022 Mankweng Gateway Clinic | ACF-USA</p>
  <p>Mankweng Gateway Clinic | ACF-USA is a recognized 501(c)(3)not-for-profit organization by the IRS.</p>
</footer>

</body>
</html>


