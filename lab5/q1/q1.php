<!DOCTYPE html>
<html lang="en">
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width:40%}
td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;}
tr:nth-child(even) {
  background-color: salmon;}
tr:nth-child(odd) {
  background-color: pink;}
th{
  background-color:cadetblue;
}
</style>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabulation of Personal Data</title>
</head>
<body>
  <h3>Tabulation of Personal Data</h3>
  <?php
  $age=array("Anip"=>"20","Hatta"=>"12","Nazri"=>"13","Mamat"=>"22");
  $y=1;
  ?>
<table>
<thead>
  <tr>
  <th>Id</th>
  <th>Name</th>
  <th>Ages</th>
  </tr>
<thead>
<tbody>
  <tr>
  <?php foreach ($age as $x => $x_value){ ?>
  <td><?php echo $y++; ?> </td>
  <td><?php echo $x; ?> </td>
  <td><?php echo $x_value; ?></td>
  </tr>
  <?php } ?>
</tbody>
</body>
</html>
