<?php
session_start();
	$servername = "cp9";
	$username = "valtozoj";
	$password = "Valtozo1234";
	$dbname = "valtozoj_donation";

    // $servername = "localhost";
	// $username = "root";
	// $password = "";
	// $dbname = "donation";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8mb4");
?>