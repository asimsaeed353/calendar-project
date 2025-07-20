<?php

// 1. Connect to Local MySQL Server (using XAMP)
$username = "root";
$conn = new mysqli("localhost", $username, "password", "calendar");
$conn->set_charset("utf8mb4");