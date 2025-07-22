<?php

// 1. Connect to Local MySQL Server (using XAMP)
// $username = "root";
// $conn = new mysqli("localhost", $username, "password", "calendar");
// $conn->set_charset("utf8mb4");

// 1. Connect to Local MySQL Server (VUSWH) (using XAMP)

$host = "localhost";
$username = "root";
$password = "";
$dbName = "calendar";


$conn = new mysqli($host, $username, $password, $dbName);
$conn->set_charset("utf8mb4");