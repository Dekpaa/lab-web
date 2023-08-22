<?php
include "conn.php";
$id=$_GET['id'];
//echo $id;

$sql="DELETE FROM employee WHERE id = '$id'";

$val= $conn->query($sql);
if($val){
header('location: index2.php');

};


?>