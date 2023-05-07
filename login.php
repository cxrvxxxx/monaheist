<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = "Login | MonaHeist";
    require_once 'includes/meta.php' ?>
</head>

<body class="index-page sidebar-collapse">
    <?php require_once 'includes/header.php' ?>
    <div class="container">
        <div style='background-color:#ffff00'>
            <center>
                <p style="color:white">
                <h2>Mona Heist</h2>
                </p>
            </center>
        </div>
        <div class="container mt-5">
            <center>
                <p style="color:white">
                <h4 class="title">Log-In</h4>
                </p>
            </center>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <!-- Login Form -->
                    <div class="card">
                        <div class="card-body">
                            <form action="login.php" method="POST">
                                <div class="form-group">
                                    <label for="username">Username:</label>
                                    <input type="text" class="form-control" id="username" name="username" required>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="password">Password:</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                                <button type="submit" class="btn btn-info mt-3">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <?php require_once 'includes/footer.php' ?>
</body>

</html>