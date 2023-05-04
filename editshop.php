<?php
require_once 'classes/dbhelper.php';
$dbh = new DBHelper();

$shop = $dbh->getShopById($_POST['id']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = "Edit Shop | MonaHeist";
    require_once 'includes/meta.php' ?>
</head>

<body>
    <?php require_once 'includes/header.php' ?>
    <div class="container">
        <div style='background-color:#ffff00'>
            <center>
                <p style="color:white">
                <h2>Edit Shop</h2>
                </p>
            </center>
        </div>

        <form method="POST" action="editshop_submit.php">
            <div class="form-group">
                <label for="inputPlayerId">ID</label>
                <input name="id" type="number" class="form-control" id="inputPlayerId"
                    value="<?php echo $shop->getId() ?>" readonly>
            </div>
            </br>
            <div class="form-group">
                <label for="inputName">Name</label>
                <input name="name" type="text" class="form-control" id="inputName"
                    value="<?php echo $shop->getName(); ?>">
            </div>
            </br>
            <div class="form-group">
                <label for="inputDescription">Description</label>
                <input name="description" type="text" class="form-control" id="inputDescription"
                    value="<?php echo $shop->getDescription(); ?>">
            </div>
            </br>
            <div class="form-group">
                <label for="inputDateCreated">Date Created</label>
                <input name="dateCreated" type="text" class="form-control" id="inputDateCreated"
                    value="<?php echo $shop->getDateCreated(); ?>" readonly>
            </div>
            </br>
            <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div>
</body>

</html>