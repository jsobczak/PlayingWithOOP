<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'model/User.php';

$obj = new User();

echo "User created!";