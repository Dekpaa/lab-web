<!DOCTYPE html>
<html>
<head>
<style>
.center {
    margin: auto;
    width: 60%;
/*    padding: 40px 30px 40px 30px;*/
}
table, th, td  {
  border: 1px solid black;
        width: 60%;
}
</style>
</head>
<body>

<div class="center">

<table >
    
   <tr>
    <th>Name</th>
    <th>age</th>
  </tr> 
    
    


<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");



foreach($age as $x => $val) {
    
//  echo "$x = $val<br>";
    
echo "<tr>";
    echo"<td>";echo $x;echo "</td>";
    echo "<td>"; echo $val;echo "</td>";
echo "</tr>";
    
    
}
?>



</table>

    
</div>


</body>
</html>
