<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "cardatabase";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Create database
$name=$_POST['make'];
$email=$_POST['model'];



?>