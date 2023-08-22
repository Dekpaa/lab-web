<?php
    include 'connection.php';
    if(isset($_POST['save'])){
        $name = $_POST['name'];
        $matricNumber = $_POST['matricNo'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        mysqli_query($conn,"INSERT INTO user_info VALUES ('','$name','$matricNumber','$address','$gender')");
    }elseif(isset($_POST['delete'])){
        $matricNumber = $_POST['matricNo'];
        mysqli_query($conn,"DELETE FROM user_info WHERE MatricNo = '$matricNumber'");
    }elseif(isset($_POST['search'])){
        $name = $_POST['name'];
        $matricNumber = $_POST['matricNo'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $result = mysqli_query($conn,"SELECT name,matricNo FROM user_info");

        echo "<br>";
        if (mysqli_num_rows($result) > 0) {
            echo "<br>";
            while($row = mysqli_fetch_assoc($result)) {
              echo "- Name: " . $row['name'] . " " .$row["matricNo"]."<br>";
            }
        } else {
            echo " <br> 0 results";
        }
    }elseif(isset($_POST['update'])){
        $name = $_POST['name'];
        $matricNumber = $_POST['matricNo'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $result = mysqli_query($conn, "UPDATE user_info SET Name = '$name' WHERE matricNo = '$matricNumber' ");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h1>Personal Info</h1>

    <form action="" method="POST">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" size="20"><br>

        <label for="matricNo">Matric No: </label><br>
        <input type="text" id="matricNo" name="matricNo" size="20"><br>
        
        <label for="address">Address : </label><br>
        <textarea name="address" id="address" name="address" cols="55" rows="10"></textarea><br>

        <label for="gender">Gender:</label>
        <select id="gender" name="gender">
        <option value="male">Male</option>
        <option value="female">Female</option>
        </select><br><br>
        <button type="submit" name="save">Save</button>
        <button type="reset" name="reset">Reset</button>
        <button type="submit" name="search">Search</button>
        <button type="submit" name="update">Update</button>
        <button type="submit" name="delete">Delete</button>
    </form>
</body>
</html>

