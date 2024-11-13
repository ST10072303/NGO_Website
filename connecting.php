<?php
	$full_names = $_POST['fnames'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$contact = $_POST['contact'];
	$medical_condition= $_POST['condition'];

	// Database connection
	$conn = new mysqli('localhost','root','','ngodata');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into patients(full_names, age, gender, address, contact, medical_condition) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sissss", $full_names, $age, $gender, $address, $contact, $medical_condition);
		$execval = $stmt->execute();
		echo $execval;
		echo "Patient Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>