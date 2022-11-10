<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 'On');

require_once __DIR__ . "/config.php"; 
session_start();


// Check if the user is already logged in, if yes then redirect them to homepage
// if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] === true){
//   header("location: /home.php");
//   exit;
// }

// Process register form inputs to database
// Register form:

$RegfirstName = $_POST['RegInputName'];
$ReglastName = $_POST['RegInputSurname'];
$RegEmail = $_POST['RegInputEmail'];
$RegPassword = $_POST['RegInputPassword'];



// Performing insert query into DB table users

$sql = "INSERT INTO users (first_name, last_name, email, password) VALUES ('$RegfirstName',
    '$ReglastName','$RegEmail','$RegPassword')";
    
    if ($connect->query($sql) === TRUE) {
        echo "New record created successfully";

        // Close connection
        mysqli_close($connect);

        header("Location: ./home.php");
        exit();

      } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
        
        // Close connection
        mysqli_close($connect);

        header("Location: ./index.php");
        exit();
      }