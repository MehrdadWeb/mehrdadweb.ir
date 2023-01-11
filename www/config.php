<?php
$servername = "localhost";
$username = "mehrdadw_lara";
$password = "zLI0PbsSDh7K";
$dbname = "mehrdadw_lara";

// Create connection
$conn = new mysqli($servername, $username,$password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>