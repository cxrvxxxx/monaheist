<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = "Register | MonaHeist";
    require_once 'includes/meta.php' ?>
</head>

<body class="index-page sidebar-collapse">
    <?php require_once 'includes/header.php' ?>
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
            <h4 class="title">Register</h4>
            </p>
        </center>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <!-- Registration Form -->
                <div class="card mt-3">
                    <div class="card-body">
                        <form action="register_submit.php" method="POST">
                            <!-- USERNAME -->
                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>

                            <!-- FIRST NAME -->
                            <div class="form-group">
                                <label for="firstname">Firstname:</label>
                                <input type="text" class="form-control" id="firstname" name="firstname" required>
                            </div>

                            <!-- LAST NAME -->
                            <div class="form-group">
                                <label for="lastname">Lastname:</label>
                                <input type="text" class="form-control" id="lastname" name="lastname" required>
                            </div>

                            <!-- BIRTHDAY -->
                            <div class="form-group row d-flex justify-content-center">
                                <label for="birthdate">Birthdate:</label>
                                <select type="number" name="month" class="form-select col-md-3 mx-1" id="birthdate" required>
                                    <option disabled selected value="">Month</option>
                                    <?php for($i = 1 ; $i <= 12; $i++): ?>
                                        <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                    <?php endfor; ?>
                                </select>

                                <select type="number" name="day" class="form-select col-md-3 mx-1" id="birthdate" required>
                                    <option disabled selected value="">Day</option>
                                    <?php for($i = 1 ; $i <= 31; $i++): ?>
                                        <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                    <?php endfor; ?>
                                </select>
                                
                                <select type="number" name="year" class="form-select col-md-4 mx-1" id="birthdate"  required>
                                <option disabled selected value="">Year</option>
                                    <?php for($i = 1940 ; $i <= date('Y'); $i++): ?>
                                        <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>

                            <!-- GENDER -->
                            <div class="form-group">
                                <label for="gender">Gender:</label>
                                <input type="text" class="form-control" id="gender" name="gender" required>
                            </div>

                            <!-- PASSWORD -->
                            <div class="form-group mt-3">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>

                            <!-- CONFIRM PASSWORD -->
                            <div class="form-group mt-3">
                                <label for="confirmPassword">Confirm Password:</label>
                                <input type="password" class="form-control" id="password" name="confirmPassword"
                                    required>
                            </div>
                            <button type="submit" class="btn btn-success mt-3">Register</button>
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