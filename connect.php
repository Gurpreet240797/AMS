<?php
	$servername = "localhost" ;
	$username   = "root" ;
	$password   = "" ;
	$db ="ams";
	// Create connection
	$con = new mysqli($servername, $username, $password, $db);
	if($con->connect_error)
	{
		die("connection failed :" .$con->connect_error);
	}
	//echo "Connected successfully<br>";
?>
