<?php
require_once 'classes/dbhelper.php';
$dbh = new DBHelper();

$bank = $dbh->getBankById($_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = "Edit Bank | MonaHeist";
    require_once 'includes/meta.php' ?>
</head>

<body>
    <?php require_once 'includes/header.php' ?>
    <div class="container">
        <div style='background-color:#ffff00'>
            <center>
                <p style="color:white">
                <h2>Edit Bank</h2>
                </p>
            </center>
        </div>

        <form method="POST" action="editbank_submit.php">
            <div class="form-group">
                <label for="inputBankId">ID</label>
                <input name="id" type="number" class="form-control" id="inputBankId"
                    value="<?php echo $bank->getId() ?>" readonly>
            </div>
            </br>
            <div class="form-group">
                <label for="inputBalance">Balance</label>
                <input name="balance" type="number" class="form-control" id="inputBalance"
                    value="<?php echo $bank->getBalance(); ?>" required>
            </div>
            </br>
            <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div>
</body>

</html>