<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 'On');

require_once __DIR__ . "/config.php"; 
session_start();


// Check if the user is already logged in, if yes then redirect them to homepage

if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] === true){
  header("location: /home.php");
  exit;
}

// Process login check to database
// Login form:
$LoginEmail = $_POST['LoginEmail'];
$LoginPassword = $_POST['LoginPassword'];

$query = mysqli_query($connect, "SELECT * FROM users WHERE password = '". $LoginPassword ."'");

if (!$query){
    die('Error: ' . mysqli_error($connect));
}

if(mysqli_num_rows($query) > 0){

  echo "Matched password, logging in...";

  // Close connection
  mysqli_close($connect);

  header("Location: ./home.php");
  exit();

} else{

  // Auth failed so user gets taken back to login page
  echo "Invalid password or email. Taking you back...";

  // Close connection
  mysqli_close($connect);

  header("Location: ./index.php");
  exit();
}
