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
    
    <div> 
        <?php 
            $mysqli = new mysqli('localhost', 'root','','dbg5sumalpong') or die (mysqli_error($mysqli)); 
            $resultset = $mysqli->query("SELECT * from tbl_user") or die($mysqli->error); ?> 
        
        <table id="tblStudentRecords " class="table table-striped table-bordered table-sm" cellspacing="0" width="100%"> 
            <thead> 
                <tr>
                    <th>ID Number</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Gender</th>
                    <th>Action</th> 
                </tr> 
            </thead>
            
            <tbody> 
                <?php while($row = $resultset->fetch_assoc()): ?> 
                    <tr> 
                        <td><?php echo $row['ID'] ?></td> 
                        <td><?php echo $row['First Name'] ?></td> 
                        <td><?php echo $row['Last Name'] ?></td> 
                        <td><?php echo $row['Age'] ?></td> 
                        <td><?php echo $row['Location'] ?></td> 
                        <td><?php echo $row['Email'] ?></td> 
                        <td> <a href = "">VIEW</a> <a href = "">DELETE</a> </td> 
                    </tr> <?php endwhile;?> 
            </tbody> 
        </table> 
    </div> 
<?php require_once 'includes/footer.php'; ?>