<?php
$serverhost = "localhost";
$username = "root";
$password = "root";
$dbname = "booking_app";

// Create connection
$connect = new mysqli($serverhost, $username, $password, $dbname);

// Check connection
if ($connect -> connect_error) {
  die("Connection failed: " . mysqli_connect_error());
  
} else {
  // echo "Connected successfully to DB named $dbname" . "<br>";
  return $connect;
}
