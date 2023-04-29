<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once 'includes/meta.php' ?>
    <title>Purchases | MonaHeist</title>
</head>
<body>
    <?php require_once 'includes/header.php' ?>
    <div> 
        <?php 
            require_once 'includes/db.php';
            $resultset = $mysqli->query("SELECT * FROM tblPurchase") or die($mysqli->error); ?> 
        
        <table id="tblStudentRecords " class="table table-striped table-bordered table-sm" cellspacing="0" width="100%"> 
            <thead> 
                <tr>
                    <th>purchaseId</th>
                    <th>perkId</th>
                    <th>quantity</th>
                    <th>buyerId</th>
                    <th>purchaseDate</th> 
                </tr> 
            </thead>
            
            <tbody> 
                <?php while($row = $resultset->fetch_assoc()): ?> 
                    <tr> 
                        <td><?php echo $row['purchaseId'] ?></td> 
                        <td><?php echo $row['perkId'] ?></td> 
                        <td><?php echo $row['quantity'] ?></td> 
                        <td><?php echo $row['buyerId'] ?></td> 
                        <td><?php echo $row['purchasedate'] ?></td> 
                        <td> <a href = "">VIEW</a> <a href = "">DELETE</a> </td> 
                    </tr>
                <?php endwhile; ?> 
            </tbody> 
        </table> 
    </div> 
    <?php require_once 'includes/footer.php' ?>
</body>
</html>












<?php $title = 'Dashboard'; require_once 'includes/header.php'; ?> 
    <div style='background-color:#ffff00'> 
        <center> 
            <p style="color:white">
            <h2>Student Information System</h2> 
            </p>
        </center> 
    </div> 
    <center>
        <p style="color:white">
            <h5>List of Students Registered</h5>
        </p>
    </center>
    

<?php require_once 'includes/footer.php'; ?>