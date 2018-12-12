<?php 

$servername = "localhost";
$admin = "root";
$admin_pass = "okay";
$dbname = "eyewkzwr_aiden";

// Create connection
$conn = new mysqli($servername, $admin, $admin_pass, $dbname);
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
} 


?>