<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dbName = "user_db";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}