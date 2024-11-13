<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="regStyle.css">
<title>Patient Registration</title>
</head>
<body>
<div class="font"><div class="col- col-s-10 col-s-12 col-12"><h1 id="myHeader">Patient Registration</h1></div>    
<ul class="menu"><!-- (navigation menu) -->
  <li><a href="homepage.php">Home</a></li>
  <li><a href="patientReg.php">Patient Registration</a></li>
  <li><a href="patientRecords.php">Patients Records</a></li>
  <li><a href="patientRef.php">Patient Referrals</a></li>
  <li><a href="patientBok.php">Patient Referral Bookings</a></li>
  <li><a href="patientCheckup.php">Patient Check-ups</a></li>
 
</ul></div>

<div>
<h2>Register a Patient</h2>

<form action="connecting.php" method="post">
  <label for="fnames">Full Names:</label><br>
  <input type="text" id="fnames" name="fnames" ><br>
  <label for="age">Age:</label><br>
  <input type="number" id="age" name="age" ><br>
   <label for="gender">Gender</label><br>
 <label for="male">
 <input type="radio" name="gender" value="m" id="male"/>Male</label><br>
 <label for="female">
 <input type="radio" name="gender" value="f" id="female"/>Female</label><br>
 <label for="others">
 <input type="radio" name="gender" value="o" id="others"/>Others</label><br><br>
 
  <label for="address">Address:</label><br>
  <input type="text" id="address" name="address" ><br>
  <label for="contact">Contact Number:</label><br>
  <input type="number" id="contact" name="contact"><br>
  <label for="condition">Medical Condition:</label><br>
  <input type="text" id="condition" name="condition" ><br><br>
  
   <input type="submit" value="Submit">
</form>
</div>

<footer>
  
  <p> <p>©2022 Mankweng Gateway Clinic | ACF-USA</p>
  <p>Mankweng Gateway Clinic | ACF-USA is a recognized 501(c)(3)not-for-profit organization by the IRS.</p>
</footer>

</body>
</html>


