<?php
require_once 'classes/dbhelper.php';
$dbh = new DBHelper();

$players = $dbh->getAllPlayers();
$perks = $dbh->getAllPerks();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php $title="Add New Purchase | MonaHeist"; require_once 'includes/meta.php' ?>
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
                    <h5>Add Purchase</h5>
                </p>
        </center>
        <form method="POST" action="addpurchase_submit.php">
            <div class="form-group">
                <label for="inputPerkId">Perk</label>
                <select name="perkId" class="form-select" id="inputPerkId">
                    <option>Choose perk...</option>
                    <?php foreach ($perks as $perk): ?>
                        <option value="<?php echo $perk->getId() ?>"><?php echo $perk->getName() ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for="inputQuantity">Quantity</label>
                <input name="quantity" type="number" class="form-control" id="inputQuantity" value="1">
            </div>
            <br>
            <div class="form-group">
                <label for="inputBuyerId">Buyer</label>
                <select name="buyerId" class="form-select" id="inputBuyerId">
                    <option>Select buyer...</option>
                    <?php foreach ($players as $player): ?>
                        <option value="<?php echo $player->getId() ?>"><?php echo $player->getId() ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <br>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
    <?php require_once 'includes/footer.php' ?>
</body>
</html>