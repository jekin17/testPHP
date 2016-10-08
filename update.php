<?php
	include ("config.php");

 	$pid   = $_POST['id'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$age   = $_POST['age'];

	$sql = "UPDATE person SET fname='$fname', lname='$lname', age='$age'  WHERE id='$pid'";
	
	if ($conn->query($sql) === TRUE) {	
	    echo "Record updated successfully.";
	    $conn->close();
	}
	else {
	    echo "Error updating record: ".$sql."<br>".$conn->error;
	}
?>
