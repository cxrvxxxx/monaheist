<?php
require_once 'classes/dbhelper.php';
$dbh = new DBHelper();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = "Banks | MonaHeist";
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
            <h4 class="title">List of Bank Accounts</h4>
            </p>
        </center>

        <div>
            <?php $banks = $dbh->getAllBanks(); ?>

            <table id="tblStudentRecords " class="table table-striped table-bordered table-sm" cellspacing="0"
                width="100%">
                <thead>
                    <tr>
                        <th>Owner/Account No.</th>
                        <th>Balance</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($banks as $bank): ?>
                        <tr>
                            <td>
                                <?php echo $bank->getId(); ?>
                            </td>
                            <td>
                                <?php echo "$" . $bank->getBalance(); ?>
                            </td>
                            <td>
                                <form method="GET" action="editbank.php">
                                    <input type="hidden" name="id" value="<?php echo $bank->getId(); ?>">
                                    <button type="submit" class="btn btn-light">Edit</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
<?php require_once 'includes/footer.php'; ?>