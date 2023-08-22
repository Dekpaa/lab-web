<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    
   

 <?php
$marks = 5;
//$marks = $_GET["marks"];
echo "Marks obtained: $marks";    
echo "<br>";
    
/*if ($marks > 70) {
  echo "Grade A";
}
    elseif ($marks > 60){
        echo "Grade B"; 
        
    }
    
    else{
       echo "Grade F";  
    }*/
        
    
   switch ($marks){
       case ($marks > 69):
           echo"A-Great Job";
           break;
       case ($marks > 59):
           echo"B-Good Job";
           break;
       
       default:
           echo "F-Try again";
           break;
           
           
   } 
    
    
?>

</body>
</html>
