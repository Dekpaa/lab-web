<?php 
include "conn.php";

if(isset($_POST['send'])){
$name = $_POST['name'];
$position = $_POST['position'];
$dept = $_POST['dept'];
    
//    validation
    
/*if (($name == " ")){
echo "you have no tasks entered";
} */   
    
    
//echo $name;

$sql = "INSERT INTO employee (name, position, dept)
VALUES ('$name', '$position', '$dept');";    
//$sql = "INSERT INTO employee (name) VALUES ('$name')";    

$val=$conn->query($sql);    

header('location:index2.php');    

/*if($val){
echo "<h2 >Successfully added into tasks lists</h2></p>";*/    
//}    
    
}

?>
