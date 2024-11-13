<?php
session_start();
include("connect.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="regStyle.css">
    <title>Homepage</title>
</head>
<body>
   
    <div class="col- col-s-10 col-s-12 col-12"><h1 id="myHeader">Home Based Care Organization</h1>
<ul class="menu"><!-- (navigation menu) -->
  <li><a href="homepage.php">Home</a></li>
  <li><a href="patientReg.php">Patient Registration</a></li>
  <li><a href="patientRecords.php">Patients Records</a></li>
  <li><a href="patientRef.php">Patient Referrals</a></li>
  <li><a href="patientBok.php">Patient Referral Bookings</a></li>
  <li><a href="patientCheckup.php">Patient Check-ups</a></li>
 
</ul><br>

<p style="font-size:30px; font-weight:bold;">Welcome: <?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstName'].' '.$row['lastName'];
        }
       }
       ?></p>
<img src="images/backround.png" alt="clinic" width="1800" height="920"><br>
    
<a href="logout.php">Click to Logout</a></div><br>
 
  
<footer>
  
  <p> <p>©2022 Mankweng Gateway Clinic | ACF-USA</p>
  <p>Mankweng Gateway Clinic | ACF-USA is a recognized 501(c)(3)not-for-profit organization by the IRS.</p>
</footer>

</body>
</html>