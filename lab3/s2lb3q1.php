 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <title>Document</title>
 </head>
 <body>
     

 
 <?php
$markah = $_GET["marks"];
$name = $_GET["name"];
     
     echo "Name : $name<br>";

if ($markah > 69) {
  echo "GRADE : A";
}
elseif ($markah > 49) {
    
      echo "GRADE : B";

}
elseif ($markah > 29) {
    
      echo "GRADE : C";

}


else{
    
      echo "GRADE E";

}
?>


 </body>
 </html>