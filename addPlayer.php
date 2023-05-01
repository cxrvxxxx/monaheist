<!DOCTYPE html>
<html lang="en">
<head>
    <?php $title="Add New Player | MonaHeist"; require_once 'includes/meta.php' ?>
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
                    <h5>Add new Player</h5>
                </p>
        </center>
 
        <form>
            <div class="form-group">
                <label for="inputPlayerId">Player ID</label>
                <input type="text" class="form-control" id="inputPlayerId">
            </div>
            <br>
            <div class="form-group">
                <label for="inputLevel">Level</label>
                <input type="text" class="form-control" id="inputLevel">
            </div>
            <br>
            <div class="form-group">
                <label for="inputExperience">Experience</label>
                <input type="text" class="form-control" id="inputExperience">
            </div>
            <br>
            <div class="form-group">
                <label for="inputCash">Cash</label>
                <input type="text" class="form-control" id="inputCash">
            </div>
            <br>
            <div class="form-group">
                <label for="inputBankId">Bank ID</label>
                <input type="text" class="form-control" id="inputBankId">
            </div>
            <br>
            <div class="form-group">
                <label for="inputJoinDate">Date Joined</label>
                <input type="text" class="form-control" id="inputJoinDate">
            </div>
            <br>
        </form>
        <button type="submit" class="btn btn-success">Submit</button>
    </div>
    <?php require_once 'includes/footer.php' ?>
</body>
</html>