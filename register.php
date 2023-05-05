<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = "Home | MonaHeist";
    require_once 'includes/meta.php' ?>
</head>

<body>
    <?php require_once 'includes/header.php' ?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <!-- Login Form -->
                <!-- Registration Form -->
                <div class="card mt-3">
                    <div class="card-header">
                        Register
                    </div>
                    <div class="card-body">
                        <form action="register.php" method="POST">
                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="form-group mt-3">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="form-group mt-3">
                                <label for="confirmPassword">Confirm Password:</label>
                                <input type="password" class="form-control" id="password" name="confirmPassword"
                                    required>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once 'includes/footer.php' ?>
    <script>
        function checkPasswords() {
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirmPassword").value;
            if (password != confirmPassword) {
                alert("Passwords do not match");
                return false;
            }
            return true;
        }
    </script>
</body>

</html>