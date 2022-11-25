<?php

require "config/constants.php";

$servername = "us-cdbr-east-06.cleardb.net";
$username = "b6f0ded1d0cab1";
$password = "4491d803";
$db = "heroku_93afb0207f5c90b";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
