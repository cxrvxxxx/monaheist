<?php
require_once 'classes/dbhelper.php';
$dbh = new DBHelper();

$perks = $dbh->getAllPerks();
$shops = $dbh->getAllShops();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = "Add New Listing | MonaHeist";
    require_once 'includes/meta.php' ?>
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
            <h5>Add Listing</h5>
            </p>
        </center>
        <form method="POST" action="addshoplisting_submit.php">
            <div class="form-group">
                <label for="inputPerkId">Perk</label>
                <select name="perkId" class="form-select" id="inputPerkId" required>
                    <option selected disabled value="">Choose perk...</option>
                    <?php foreach ($perks as $perk): ?>
                        <option value="<?php echo $perk->getId() ?>"><?php echo $perk->getName() ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for="inputPerkId">Shop</label>
                <select name="shopId" class="form-select" id="inputPerkId" required>
                    <option selected disabled value="">Choose shop...</option>
                    <?php foreach ($shops as $shop): ?>
                        <option value="<?php echo $shop->getId() ?>"><?php echo $shop->getName() ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for="inputStock">Stock</label>
                <input name="stock" type="number" class="form-control" id="inputStock" required>
            </div>
            <br>
            <div class="form-group">
                <label for="inputPrice">Price</label>
                <input name="price" type="number" class="form-control" id="inputPrice" required>
            </div>
            <br>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
    <?php require_once 'includes/footer.php' ?>
</body>

</html>