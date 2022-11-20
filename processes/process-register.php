<?php

session_start();

include __DIR__ . "/../model/User.php";
include __DIR__ . "/config.php";

User::userRegister();