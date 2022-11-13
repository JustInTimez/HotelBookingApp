<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 'On');

require __DIR__ . "./config.php"; 
session_start();

// Process login check to database
// Login form:
$LoginEmail = trim($_POST['LoginEmail']);
$LoginPassword = trim($_POST['LoginPassword']);

$sql = "SELECT * FROM users WHERE password = '". $LoginPassword ."'";
$result = $connect->query($sql);

if($result->num_rows == 1){


  $user = $result->fetch_assoc();
  $_SESSION['LoggedInUser'] = $user;


  // ************ Take out all echo tests such as this one below before HAND IN!! *********** //
  echo "Matched password, logging in...";

  // Close connection
  mysqli_close($connect);

  header("Location: ../home.php");
  exit();

} else{

  // Auth failed so user gets taken back to login page
  echo "Invalid password or email. Taking you back...";

  // Close connection
  mysqli_close($connect);

  header("Location: ../index.php");
  exit();
}
