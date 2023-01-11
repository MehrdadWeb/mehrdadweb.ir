<!DOCTYPE html>
<html>
<head>

</head>
<body>
    
<?php
// $servername = "localhost";
// $username = "mehrdadw_root";
// $password = "mehrdad";
// $dbname = "mehrdadw_linkDB";
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