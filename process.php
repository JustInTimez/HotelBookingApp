<?php
include_once __DIR__ . "/head.php";
include_once __DIR__ . "/config.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<?php

// Process login and register forms to database
// Register form:

$RegfirstName = $_POST['RegInputName'];
$ReglastName = $_POST['RegInputSurname'];
$RegEmail = $_POST['RegInputEmail'];
$RegPassword = $_POST['RegInputPassword'];

// Performing insert query execution into DB table users

$sql = "INSERT INTO users (first_name, last_name, email, password) VALUES ('$RegfirstName',
    '$ReglastName','$RegEmail','$RegPassword')";
    
    if ($connect->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
      }
    
// Close connection
mysqli_close($connect);

header("Location: ./home.php");
exit();



// Login form:
// $LoginEmail = $_POST['LoginEmail'];
// $LoginPassword = $_POST['LoginPassword'];

?>

</html>