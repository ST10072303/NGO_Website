<?php
	$fullnames = $_POST['f_names'];
	$contactnum = $_POST['contact_num'];
	$homeaddress= $_POST['address'];
	$bookdate = $_POST['book_date'];
	
	// Database connection
	$conn = new mysqli('localhost','root','','ngodata');
	
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into checkups(fullnames, contact, address, date) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $fullnames, $contactnum, $homeaddress, $bookdate);
		$execval = $stmt->execute();
		echo $execval;
		echo "Patient Check-up set successfully...";
		$stmt->close();
		$conn->close();
	}
	
?>