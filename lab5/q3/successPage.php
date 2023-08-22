<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>succesPage</title>
    <style>
        body{font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;  color: blue; font-size: larger; }
    </style>
</head>
<body>
    <?php
    $cookie_name ="user";
    $cookie_value =$_POST["name"];
    setcookie($cookie_name, $cookie_value, time() + (86400*30), "/");
    ?>
    Welcome <?php echo $_POST ["name"]; ?><br>
</body>
</html>