<?php
	$fullnames = $_POST['fnames'];
	$contact = $_POST['contact'];
	$medcondition= $_POST['condition'];
	$date = $_POST['date'];
	$doctor = $_POST['doctor'];

	// Database connection
	$conn = new mysqli('localhost','root','','ngodata');
	
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into referrals(fullnames, contact, medcondition, date, doctor) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss", $fullnames, $contact, $medcondition, $date, $doctor);
		$execval = $stmt->execute();
		echo $execval;
		echo "Patient Booking successfully...";
		$stmt->close();
		$conn->close();
	}
	
	

?>