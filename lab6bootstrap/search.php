<?php 
include "conn.php";
$name=$_GET['name'];

//$sql = "SELECT * FROM employee";  

$name = "%".$name ."%";
//echo "Your seach is ".$name;


$sql = "SELECT * FROM employee WHERE name LIKE '$name' ORDER BY name ASC;";  

$val=$conn->query($sql);    
$rows=$val;
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
        <div>
            <div>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">ABC Company Sdn Bhd</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="http://localhost/dat21303/test2b/index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Employee List</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Dropdown
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                                </li>
                            </ul>
                            <form class="d-flex" action="search2.php" method="post" >
                                <input class="form-control me-2" type="search" name="name" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>

        </div>
        <div class="row">

            <div class="mx-auto" style="width: 200px;">
                <h4>Employee List</h4>
            </div>
            <div class="col-md-10 col-md-offset-3">
                <p></p>

                <!-- Button trigger modal -->
                <!-- Button trigger modal -->

                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal"> Add New Employee</button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#searchModal"> Search </button>

                <button type="button" class="btn btn-outline-dark" "float-right" onclick="window.print()">Print List</button>
                <button type="button" class="btn btn-outline-dark" "float-right" onclick="search4.php">Print List</button>
        
                <p></p>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Items </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <!--        FORM ADD TASK            -->
                                <!--        FORM ADD TASK            -->

                                <form action="add.php" method="post">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"></label>
                                        Name: <input type="text" name="name" class="form-control" id="newtask" placeholder="">
                                        Position: <input type="text" name="position" class="form-control" id="newtask" placeholder="">
                                        Salary: <input type="text" name="salary" class="form-control" id="newtask" placeholder="">
                                    </div>
                                    <button type="submit" name="send" class="btn btn-primary">Tambah</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Search name </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <!--        FORM ADD TASK            -->
                                <!--        FORM ADD TASK            -->

                                <form action="search2.php" method="GET">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"></label>
                                        search name <input type="text" name="name" class="form-control" id="newtask" placeholder="">
                                    </div>
                                    <button type="submit" name="send" class="btn btn-primary">Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!--                Item table -->
                <!--                Item table -->

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">name</th>
                            <th scope="col">position</th>
                            <th scope="col">image</th>
                            <th scope="col">update</th>
                            <th scope="col">delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <?php while($row=$rows->fetch_assoc()):?>

                            <th><?php echo $row['id'];?></th>

                            <td class="col-md-10"><?php echo $row['name'];?></td>
                            <td class="col-md-10"><?php echo $row['position'];?></td>
                            <!-- <td class="col-md-10"><?php //echo $row['dept'];?></td> -->


                            <td class="col-md-2"><img src="<?php echo "img/". $row['dept'];?>" alt="Girl in a jacket" width="100"></td>

                            <td><a href="update.php?id=<?php echo $row['id'];?>" class="btn btn-warning">Update</a></td>

                            <td><a href="delete.php?id=<?php echo $row['id'];?>" class="btn btn-success">Delete</a></td><!-- 
                            <td><a href="attendDetail.php?id=<?php// echo $row['id'];?>&name=<?php// echo $row['name'];?>&month=<?php //echo $row['month'];?>" class="btn btn-success">View Attendance Details</a></td> -->


                        </tr>
                        <?php endwhile; ?>

                    </tbody>
                </table>
                <!--                end of table-->
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