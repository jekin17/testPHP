<?php
	include ("config.php");

 	$pid   = $_POST['id'];

	$sql = "DELETE FROM person WHERE id='$pid'";
	
	if ($conn->query($sql) === TRUE)
	{	
	    echo "Record deleted successfully.";
	    $conn->close();
	}
	else
	{
	    echo "Error deleting record: ".$sql."<br>".$conn->error;
	}
?>
