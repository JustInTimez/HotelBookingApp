<?php

session_start();

include __DIR__ . "/../model/Bookings.php";
include __DIR__ . "/config.php";

Booking::createBooking();