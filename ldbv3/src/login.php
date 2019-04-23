<?php

$servername = "localhost";
$username = "igitanp2_leeBee";
$password = "3499071";
$dbname = "igitanp2_mainDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

