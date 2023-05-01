<!DOCTYPE html>
<html lang="en">
<head>
    <?php $title="Add New Developer | MonaHeist"; require_once 'includes/meta.php' ?>
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
                    <h5>Add new developer</h5>
                </p>
        </center>

        <form>
            <div class="form-group">
                <label for="inputDevId">Developer ID</label>
                <input type="text" class="form-control" id="inputDevId">
            </div>
            <br>
            <div class="form-group">
                <label for="inputPlayerId">Player ID</label>
                <input type="text" class="form-control" id="inputPlayerId">
            </div>
            <br>
            <div class="form-group">
                <label for="inputlevel">Level</label>
                <input type="text" class="form-control" id="inputlevel">
            </div>
            <br>
            <div class="form-group">
                <label for="inputDateJoined">Date Joined</label>
                <input type="text" class="form-control" id="inputDateJoined">
            </div>
            <br>
        </form>
        <button type="submit" class="btn btn-success">Submit</button>
    </div>
    <?php require_once 'includes/footer.php' ?>
</body>
</html>