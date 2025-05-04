<?php
$servername = "localhost";

$username = "root";
$password = "";
$database_name = "landing_page";

// $username = "easytechx";
// $password = "_^Mlr+NnZ=ga";
// $database_name = "easytechx_landing_page";

$conn = mysqli_connect($servername, $username, $password, $database_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>