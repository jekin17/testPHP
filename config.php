<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "larisa";
	 
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	 
	if(!$conn) 
	{
	    echo "Unable to connect database ".mysqli_error($conn).".\n";die;
	}
	else
	{
	    echo "Database connected successfully.\n";
	}
?>