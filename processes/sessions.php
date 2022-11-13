<?php
   include __DIR__ . './config.php';
   session_start();
   $user_check = $_SESSION['LoggedInUser'];
   
//    $sql = "SELECT * FROM users WHERE password = '". $LoginPassword ."'";

// //    $ses_sql = mysqli_query($db,"SELECT role FROM users WHERE role = '$user_check' ");
   
// //    $row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);
   
// //    $login_session = $row['username'];
   
   if(!isset($_SESSION['LoggedInUser'])){
      header("location: /index.php");
      die();
   }
?>