<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="regStyle.css">
<title>Patient check-ups</title>
</head>
<body>
<div class="font"><div class="col- col-s-10 col-s-12 col-12"><h1 id="myHeader">Patient check-ups</h1></div>    
<ul class="menu"><!-- (navigation menu) -->
  <li><a href="homepage.php">Home</a></li>
  <li><a href="patientReg.php">Patient Registration</a></li>
  <li><a href="patientRecords.php">Patients Records</a></li>
  <li><a href="patientRef.php">Patient Referrals</a></li>
  <li><a href="patientBok.php">Patient Referral Bookings</a></li>
  <li><a href="patientCheckup.php">Patient Check-ups</a></li>
</ul></div>

<div>
<form action="conn.php" method="post">
 <h2>Arrange a check-up with a Patient</h2>
  <label for="f_names">Full Names:</label><br>
  <input type="text" id="f_names" name="f_names" ><br>
  <label for="contact_num">Contact Number:</label><br>
  <input type="text" id="contact_num" name="contact_num"><br>
  <label for="address">Address:</label><br>
  <input type="text" id="address" name="address"><br>
  <label for="book_date">Date:</label><br>
  <input type="text" id="book_date" name="book_date"><br><br> 
  
  <input type="submit" value="Set">

</form>
</div>

<h2>Patient check-up Appointments</h2>

    <table>
        <tr>
          <th>Full Names</th>
          <th>Contact Bumber</th>
		  <th>Address</th>
		  <th>Date</th>
        </tr>
        <tr>
   <?php 
        $con = mysqli_connect("localhost","root","","ngodata");

        $query = "SELECT * FROM checkups";
        $query_run = mysqli_query($con, $query);

        if(mysqli_num_rows($query_run) > 0)
             {
               foreach($query_run as $row)
                  {
   ?>
     	<tr>
     	<td><?= $row['fullnames']; ?></td>
     	<td><?= $row['contact']; ?></td>
     	<td><?= $row['address']; ?></td>
		<td><?= $row['date']; ?></td>
     	
    	</tr>
   <?php
         }
        }
     
       else{
     ?>
  	<tr>
    	 <td colspan="6">No Patient check-ups Available</td>
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


