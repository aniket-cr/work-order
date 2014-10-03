<?php
$IP="localhost";   // hostname
$user="root";		// database username
$pass="oldtrafford";	// password
$db="acc";			// database name
$con=mysqli_connect($IP,$user,$pass,$db);
if (mysqli_connect_errno()) {echo "Failed to connect to MySQL: " . mysqli_connect_error();}?>