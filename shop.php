<!DOCTYPE html>
<html lang="en">
<head>
    <?php $title="Shop | MonaHeist"; require_once 'includes/meta.php' ?>
</head>
<body>
    <?php require_once 'includes/header.php' ?>
        <div class="container">
            <div style='background-color:#ffff00'> 
                <center> 
                    <p style="color:white">
                        <h2>Mona Heist</h2> 
                    </p>
                </center> 
            </div> 
 
            <center>
                <p style="color:white">
                    <h5>List of Shops</h5>
                </p>
            </center>
 
            <div> 
                <?php 
                    require_once 'includes/db.php'; 
                    $resultset = $mysqli->query("SELECT * from tblShop") or die($mysqli->error); ?> 
                
                <table id="tblStudentRecords " class="table table-striped table-bordered table-sm" cellspacing="0" width="100%"> 
                    <thead> 
                        <tr>
                            <th>Shop ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Date Created</th>
                        </tr> 
                    </thead>
                    
                    <tbody> 
                        <?php while($row = $resultset->fetch_assoc()): ?> 
                            <tr> 
                                <td><?php echo $row['shopID'] ?></td> 
                                <td><?php echo $row['name'] ?></td> 
                                <td><?php echo $row['description'] ?></td> 
                                <td><?php echo $row['createDate'] ?></td> 
                                <td> <a href = "">VIEW</a> <a href = "">DELETE</a> </td> 
                            </tr> <?php endwhile;?> 
                    </tbody> 
                </table> 
                <form method="post" action="addShop.php">
                    <button type="submit" class="btn btn-info">Add New Record</button>
                </form>
            </div> 
        </div>
    <?php require_once 'includes/footer.php' ?>
</body>
</html>