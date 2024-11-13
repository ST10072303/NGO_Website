<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="regStyle.css">
<<title>Patient Referrals</title>
</head>
<body>
<div class="font"><div class="col- col-s-10 col-s-12 col-12"><h1 id="myHeader">Patient Referrals</h1></div>    
<ul class="menu"><!-- (navigation menu) -->
  <li><a href="homepage.php">Home</a></li>
  <li><a href="patientReg.php">Patient Registration</a></li>
  <li><a href="patientRecords.php">Patients Records</a></li>
  <li><a href="patientRef.php">Patient Referrals</a></li>
  <li><a href="patientBok.php">Patient Referral Bookings</a></li>
  <li><a href="patientCheckup.php">Patient Check-ups</a></li>
</ul></div>

<div>
<form action="connected.php" method="post">
 <h2>Patient bookings to consult with a doctor</h2>
  <label for="fnames">Full Names:</label><br>
  <input type="text" id="fnames" name="fnames" ><br>
  <label for="contact">Contact Number:</label><br>
  <input type="text" id="contact" name="contact"><br>
  <label for="condition">Medical Condition:</label><br>
  <input type="text" id="condition" name="condition" ><br>
  <label for="date">Date:</label><br>
  <input type="text" id="date" name="date" ><br>
  <label for="doctor">Doctor:</label><br>
  <input type="text" id="doctor" name="doctor"><br><br>
  
  <input type="submit" value="Book">

</form>
</div>

<footer>
  
  <p> <p>©2022 Mankweng Gateway Clinic | ACF-USA</p>
  <p>Mankweng Gateway Clinic | ACF-USA is a recognized 501(c)(3)not-for-profit organization by the IRS.</p>
</footer>

</body>
</html>


