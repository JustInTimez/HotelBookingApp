<?php

session_start();

include __DIR__ . "./config.php"; 
include __DIR__ . "/../model/User.php";

User::userUpdate();