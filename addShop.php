<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = "Add Shop | MonaHeist";
    require_once 'includes/meta.php' ?>
</head>

<body>
    <?php require_once 'includes/header.php' ?>
    <div class="container">
        <div style='background-color:#ffff00'>
            <center>
                <p style="color:white">
                <h2>MonaHeist</h2>
                </p>
            </center>
        </div>

        <center>
            <p style="color:white">
            <h5>Add new Shop</h5>
            </p>
        </center>

        <form method="POST" action="addshop_submit.php">
            <div class="form-group">
                <label for="inputName">Name</label>
                <input name="name" type="text" class="form-control" id="inputName">
            </div>
            <br>
            <div class="form-group">
                <label for="inputDescription">Description</label>
                <input name="description" type="text" class="form-control" id="inputDescription">
            </div>
            <br>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
    <?php require_once 'includes/footer.php' ?>
</body>

</html>