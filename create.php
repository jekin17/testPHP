 <?php
    $conn = new mysqli('localhost', 'root', 'Motox', 'lora');
    $sql = "insert into person (id, fname, lname, age, phone) values (3, 'Sara', 'Conor', 45, 503404029)";
    $conn->query($sql);
  ?>
<?php
 	include ("config.php");

 	$pid   = $_POST['id'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$age   = $_POST['age'];

	$sql = "INSERT INTO person (id, fname, lname, age) VALUES ('".$pid."', '".$fname."', '".$lname."', '".$age."')";	
	
	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully.";
		$conn->close();
	}
	else {
		echo "Error creating record ".$sql."<br>".$conn->error;
	}
?>