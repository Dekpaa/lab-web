<?php 
include "conn.php";
$id=$_GET['id'];

$sql = "SELECT * FROM employee WHERE id='$id'";    

$rows=$conn->query($sql);    
$row=$rows->fetch_assoc();

//var_dump($row);

if(isset($_POST['send'])){

    $name=$_POST['name'];
    $position=$_POST['position'];
    $dept=$_POST['dept'];
    
$sql = "UPDATE employee set name='$name',position='$position', dept='$dept' WHERE id='$id' ";
  $conn->query($sql); 
    
    header('location: index2.php');
    

}


?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="mx-auto" style="width: 200px;">
                <h3>Item List</h3>
            </div>
            <div class="col-md-10 col-md-offset-3">
                <p></p>

                <!-- Button trigger modal -->
                <!-- Button trigger modal -->

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> Add </button>
                
                
                <button type="button" class="btn btn-outline-dark" "float-right" onclick="window.print()">Print List</button>
                <p></p>

                <form method="POST" >
                    <div class="form-group">
                        Name: <input type="text" name="name" class="form-control" id="newtask" value="<?php echo $row['name'];?>">
                        
                        Image: <input type="text" name="dept" class="form-control" id="newtask" value="<?php echo $row['dept'];?>">
                        
                        Position: <input type="text" name="position" class="form-control" id="newtask" value="<?php echo $row['position'];?>">
                        
                        
                    </div>
                    <button type="submit" name="send" class="btn btn-danger">Update</button>
                </form>


            </div>

        </div>

    </div>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
