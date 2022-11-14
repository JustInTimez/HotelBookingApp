<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 'On');

session_start();
include __DIR__ . "/../model/User.php";
require __DIR__ . "/config.php"; 

User::userRegister();