<?php
$servername = "localhost";

$username = "root";
$password = "";
$database_name = "landing_page";

// $username = "easytechx";
// $password = "_^Mlr+NnZ=ga";
// $database_name = "easytechx_landing_page";

$conn = new mysqli($servername, $username, $password, $database_name);
$conn->set_charset("utf8mb4");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>