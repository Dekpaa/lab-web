<?php
    require 'session.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1>Hye:<?php echo $_SESSION['username'];?></h1>
    <h1>Your Status: <?php echo implode("",$_SESSION['status']);?></h1>
    <a href="logout.php">Sign Out</a>
</body>
</html>