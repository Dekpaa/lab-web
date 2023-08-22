<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Very simple form</title>
</head>
<body>

<?php 
$number="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = test_input($_POST["number"]);}
?>
<h1>Check Validation</h1>
<form method = "post" action = "">
Value :<input type="text" name="number" value="">
<input type="submit">
<?php 
$number = $_POST["number"];
if ($number > 100)
{ 
    
}
else{
      echo "GRADE : F";
}
?>
<script>
    function valid(){
        alert("True");
        alert("False");
    }
</script>
</body>
</html>