<!DOCTYPE html>
<html lang="en">
<head>
    <?php $title="Developers & Moderators | MonaHeist"; require_once 'includes/meta.php' ?>
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
                    <h5>List of Developers</h5>
                </p>
            </center>

            <div> 
                <?php 
                    require_once 'includes/db.php'; 
                    $resultset = $mysqli->query("SELECT * from tblDeveloper") or die($mysqli->error); ?> 
                
                <table id="tblStudentRecords " class="table table-striped table-bordered table-sm" cellspacing="0" width="100%"> 
                    <thead> 
                        <tr>
                            <th>Developer ID</th>
                            <th>Player ID</th>
                            <th>Level</th>
                            <th>Date Joined</th>
                        </tr> 
                    </thead>
                    
                    <tbody> 
                        <?php while($row = $resultset->fetch_assoc()): ?> 
                            <tr> 
                                <td><?php echo $row['devId'] ?></td> 
                                <td><?php echo $row['playerId'] ?></td> 
                                <td><?php echo $row['level'] ?></td> 
                                <td><?php echo $row['dateJoined'] ?></td> 
                                <td> <a href = "">VIEW</a> <a href = "">DELETE</a> </td> 
                            </tr> <?php endwhile;?> 
                    </tbody> 
                </table> 
                <form method="post" action="adddev.php">
                    <button type="submit" class="btn btn-dark">Add New Record</button>
                </form>
            </div> 
            <br><br>
            <center>
                <p style="color:white">
                    <h5>List of Moderators</h5>
                </p>
            </center>

            <div> 
                <?php 
                    require_once 'includes/db.php'; 
                    $resultset = $mysqli->query("SELECT * from tblModerator") or die($mysqli->error); ?> 
                
                <table id="tblStudentRecords " class="table table-striped table-bordered table-sm" cellspacing="0" width="100%"> 
                    <thead> 
                        <tr>
                            <th>Moderator ID</th>
                            <th>Player ID</th>
                            <th>Level</th>
                            <th>Date Joined</th>
                        </tr> 
                    </thead>
                    
                    <tbody> 
                        <?php while($row = $resultset->fetch_assoc()): ?> 
                            <tr> 
                                <td><?php echo $row['modId'] ?></td> 
                                <td><?php echo $row['playerId'] ?></td> 
                                <td><?php echo $row['level'] ?></td> 
                                <td><?php echo $row['dateJoined'] ?></td> 
                                <td> <a href = "">VIEW</a> <a href = "">DELETE</a> </td> 
                            </tr> <?php endwhile;?> 
                    </tbody> 
                </table> 
                <form method="post" action="addmod.php">
                    <button type="submit" class="btn btn-dark">Add New Record</button>
                </form>
            </div> 
        </div>
    <?php require_once 'includes/footer.php' ?>
</body>
</html>