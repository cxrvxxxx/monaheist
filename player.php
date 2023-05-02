<?php 
    require_once 'classes/dbhelper.php';
    $dbh = new DBHelper();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php $title="Player | MonaHeist"; require_once 'includes/meta.php' ?>
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
                    <h5>List of Players</h5>
                </p>
            </center>
 
            <div> 
                <?php $resultset = $dbh -> getAllPlayers(); ?> 
                
                <table id="tblStudentRecords " class="table table-striped table-bordered table-sm" cellspacing="0" width="100%"> 
                    <thead> 
                        <tr>
                            <th>Player ID</th>
                            <th>Level</th>
                            <th>Experience</th>
                            <th>Cash</th>
                            <th>Bank ID</th>
                            <th>Date Joined</th>
                        </tr> 
                    </thead>
                    
                    <tbody> 
                        <?php while($row = $resultset->fetch_assoc()): ?> 
                            <tr> 
                                <td><?php echo $row['id'] ?></td> 
                                <td><?php echo $row['level'] ?></td> 
                                <td><?php echo $row['experience'] ?></td> 
                                <td><?php echo $row['cash'] ?></td> 
                                <td><?php echo $row['bankId'] ?></td>
                                <td><?php echo $row['dateJoined'] ?></td>
                                <td> <a href = "">VIEW</a> <a href = "">DELETE</a> </td> 
                            </tr> <?php endwhile;?> 
                    </tbody> 
                </table> 
                <form method="post" action="addPlayer.php">
                    <button type="submit" class="btn btn-primary">Add New Record</button>
                </form>
            </div> 
            
        </div>
    <?php require_once 'includes/footer.php' ?>
</body>
</html>