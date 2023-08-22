<?php


$servername = "localhost";
$username = "dat21303";
$password = "";
$dbname = "test2s";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>