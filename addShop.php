<!DOCTYPE html>
<html lang="en">
<head>
    <?php $title="Add New Shop | MonaHeist"; require_once 'includes/meta.php' ?>
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
                    <h5>Add new Shop</h5>
                </p>
        </center>
 
        <form>
            <div class="form-group">
                <label for="inputShopId">Shop ID</label>
                <input type="text" class="form-control" id="inputShopId">
            </div>
            <br>
            <div class="form-group">
                <label for="inputName">Name</label>
                <input type="text" class="form-control" id="inputName">
            </div>
            <br>
            <div class="form-group">
                <label for="inputDescription">Description</label>
                <input type="text" class="form-control" id="inputDescription">
            </div>
            <br>
            <div class="form-group">
                <label for="inputCreateDate">Date Created</label>
                <input type="text" class="form-control" id="inputCreateDate">
            </div>
            <br>
        </form>
        <button type="submit" class="btn btn-success">Submit</button>
    </div>
    <?php require_once 'includes/footer.php' ?>
</body>
</html>