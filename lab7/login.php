<?php require 'session.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<style>
    form .container{
        background: black;
        background-size: 50;}
    h5{
        color: white;
        padding: 10px;}
</style>
<body>
    <form action="" method="POST">
        <div class="container">
        <h5>Login</h5>
        </div>
        <label for="username">Username:</label><br>
        <input type="text" name="username" id="username"><br><br>
        <label for="passowrd">Password:</label><br>
        <input type="password" name="password" id="password"><br><br>
        <button type="submit">Login</button>
    </form> 
    <?php
        if ($_SERVER['REQUEST_METHOD']=='POST'){
            $username = $_POST['username'];
            $password = $_POST['password'];
            require_once('config.php');
            $sql = "SELECT * FROM customers WHERE username = '$username' AND password = '$password'";
            $sqlStatus = "SELECT status FROM customers";
            $result = mysqli_query($connect,$sql);
            $resultStatus = mysqli_query($connect,$sqlStatus);
            $check = mysqli_fetch_array($result);
            $checkStatus = mysqli_fetch_array($resultStatus);
            if(isset($check)){
                $_SESSION['username'] = $username;
                if(isset($checkStatus)){
                    echo "success";
                    $options= mysqli_fetch_array($resultStatus);
                    $_SESSION['status'] = $options;
                    header("Location: welcome.php");
                }
            }
        }
    ?>
</body>
</html>