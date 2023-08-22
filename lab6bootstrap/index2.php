<?php 
include "conn.php";

$sql = "SELECT * FROM user";    

$val=$conn->query($sql);    
$rows=$val;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
</head>
<body>
    
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">img</th>
                            <th scope="col">name</th>
                            <th scope="col">position</th>
                            <th scope="col">department</th>
                            <th scope="col">update</th>
                            <th scope="col">delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php while($row=$rows->fetch_assoc()):?>
                            <td class="col-md-4"><img src="<?php echo $row['img'];?>"  width="100"></td>
                            <td class="col-md-4"><?php echo $row['name'];?></td>
                            <td class="col-md-2"><?php echo $row['position'];?></td>
                            <td class="col-md-2"><?php echo $row['dept'];?></td>
                            <td><a href="update.php?id=<?php echo $row['update'];?>" >Update</a></td>
                            <td><a href="delete.php?id=<?php echo $row['delete'];?>" >Delete</a></td>
                        </tr>
                        <?php endwhile; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
