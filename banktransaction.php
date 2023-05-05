<?php
require_once 'classes/dbhelper.php';
$dbh = new DBHelper();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = "Bank Transactions | MonaHeist";
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
            <h5>List of Transactions</h5>
            </p>
        </center>

        <div>
            <?php $transactions = $dbh->getAllBankTransactions(); ?>

            <table id="tblStudentRecords " class="table table-striped table-bordered table-sm" cellspacing="0"
                width="100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Owner/Account No.</th>
                        <th>Sender</th>
                        <th>Amount</th>
                        <th>Receiver</th>
                        <th>Date Processed</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($transactions as $transaction): ?>
                        <tr>
                            <td>
                                <?php echo $transaction->getId(); ?>
                            </td>
                            <td>
                                <?php echo $transaction->getBankId(); ?>
                            </td>
                            <td>
                                <?php echo $transaction->getSenderId(); ?>
                            </td>
                            <td>
                                <?php echo "$" . $transaction->getAmount(); ?>
                            </td>
                            <td>
                                <?php echo $transaction->getReceiverId(); ?>
                            </td>
                            <td>
                                <?php echo $transaction->getDateProcessed(); ?>
                            </td>
                            <td>
                                <form method="POST" action="deletebanktransaction.php">
                                    <input type="hidden" name="id" value="<?php echo $transaction->getId(); ?>">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <a href="addtransaction.php"><button type="button" class="btn btn-info">Add Transaction</button></a>
        </div>
    </div>
</body>
<?php require_once 'includes/footer.php'; ?>