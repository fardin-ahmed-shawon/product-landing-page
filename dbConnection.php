<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "landing_page";

$conn = mysqli_connect($servername, $username, $password, $database_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>