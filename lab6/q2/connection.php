<?php
    $conn = mysqli_connect("localhost", "root", "", "personal_info");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
      echo "Connected successfully";
?>