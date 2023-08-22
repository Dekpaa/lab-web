<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student table</title>
</head>
<body>
<?php

    $conn = mysqli_connect("localhost", "root", "","uthmpagoh");
    // Check connection
    if(!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "CREATE DATABASE uthmpagoh";
    if (mysqli_query($conn, $sql)) {
        echo "Database created successfully";
    }else{
        echo "Error creating database: " . mysqli_error($conn);
    }
    
    $sql = "CREATE TABLE student (
        Id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        Names VARCHAR(30) NOT NULL,
        Ages INT(6),
        States VARCHAR(30),
        Scores INT(6)
        )";

    if (mysqli_query($conn, $sql)) {
        echo "Table MyGuests created successfully";
    }else {
        echo "Error creating table: " . mysqli_error($conn);
    }

    $sql = "INSERT INTO student VALUES (1, 'Gabriel', 20, 'Kedah',30),
                                        (2, 'Michael', 12, 'Penang',10),
                                        (3,'Ronaldo',13,'Perak',98),
                                        (4,'Roberto',22,'Perak',76)";

    if(mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    }else{
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    $sql = "SELECT * from Student";
    if ($result = mysqli_query($conn, $sql)) {
        echo "Total rows in this table : " . mysqli_num_rows( $result ) . "\n";
    }

    $sql = "SELECT * FROM student";
    
    $table = mysqli_query($conn,$sql);

    echo "<table>";
        echo "<tr>";
            echo "<th>Id</th>";
            echo "<th>Names</th>";
            echo "<th>Ages</th>";
            echo "<th>States</th>";
            echo "<th>Scores</th>";
        echo "</tr>";
        while($row = mysqli_fetch_array($table)){
            echo "<tr>";
                echo "<td>" . $row['Id'] . "</td>";
                echo "<td>" . $row['Names'] . "</td>";
                echo "<td>" . $row['Ages'] . "</td>";
                echo "<td>" . $row['States'] . "</td>";
                echo "<td>" . $row['Scores'] . "</td>";
                echo "<br>";
            echo "</tr>";
        }
    echo "</table>";

    $sql = "SELECT Names FROM student WHERE Scores >= 30";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
            echo "<tr>";
            while($row = mysqli_fetch_assoc($result)) {
                echo " - Name: " . $row["Names"] . "<br>";
            }
            echo "</tr>";
        echo "</table>";
    }else{
        echo "0 results";
    }
    $sql = "DELETE FROM student WHERE States = 'Penang' ";
    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
    }else{
        echo "Error deleting record: " . mysqli_error($conn);
    }
?>
</body>
</html>