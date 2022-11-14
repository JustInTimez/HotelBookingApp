<?php
include __DIR__ . "./processes/sessions.php";
session_start();

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 'On');

// if (!isset($_SESSION['LoggedInUser'])){
//     header("Location: ./index.php");
//     die(); 
// }

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="apple-touch-icon" sizes="180x180" href="./static/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./static/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./static/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="./static/images/favicon/site.webmanifest">

    <title>Hotels48 South Africa - Western Cape</title>
    <meta name="description" content="View, compare and book! This Hotel booking site was made with PHP, MySQL, JS and Bootstrap!">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./static/css/style.css">
    <!-- Custom JS -->
    <script src="./static/js/frontend.js" defer></script>
    <!-- Bootstrap CSS and JS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/2f8b7b32b4.js" crossorigin="anonymous"></script>
</head>