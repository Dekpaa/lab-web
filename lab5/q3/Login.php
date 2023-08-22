<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid black;}
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;}
button {
  background-color: salmon;
  color: black;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;}
button:hover {
  opacity: 0.8;}
.container {
  padding: 16px;}
span.psw {
  float: right;
  padding-top: 16px;}
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;}
  .cancelbtn {
     width: 100%;}}
</style>
</head>
<body>
<h2>Login</h2>
<form action="successPage.php" method="post">
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="name" required>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <button type="submit">Login</button>
  </div>
</form>
</body>
</html>