<?php

session_start();

include __DIR__ . "./config.php"; 
include __DIR__ . "/../model/Bookings.php";

$bookigId = $_POST['bookigId'];

Booking::cancelBooking($bookigId);