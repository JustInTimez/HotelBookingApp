<?php
$serverhost = "localhost";
$username = "root";
$password = "root";
$dbname = "booking_app";

// Create connection
$connect = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$connect) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully. WOOHOO!";