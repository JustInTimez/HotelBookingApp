<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 'On');

require __DIR__ . "/config.php"; 
session_start();


// Check if the user is already logged in, if yes then redirect them to homepage
// if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] === true){
//   header("location: /home.php");
//   exit;
// }

// Process register form inputs to database
// Register form:

$RegfirstName = trim($_POST['RegInputName']);
$ReglastName = trim($_POST['RegInputSurname']);
$RegEmail = trim($_POST['RegInputEmail']);
$RegPassword = trim($_POST['RegInputPassword']);



// Performing insert query into DB table users

$sql = "INSERT INTO users (first_name, last_name, email, password, role) VALUES ('$RegfirstName',
    '$ReglastName','$RegEmail','$RegPassword', 'customer')";
    
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