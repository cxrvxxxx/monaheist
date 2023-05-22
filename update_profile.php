<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = "Update Profile | MonaHeist";
    require_once 'includes/meta.php' ?>
</head>

<body class="index-page sidebar-collapse">
    <?php require_once 'includes/header.php' ?>
    <div class="wrapper">
        <div class="page-header page-header-small">
            <div class="page-header-image" data-parallax="true" style="background-image:url('images/homephoto.jpg');">
            </div>
            <div class="container">
                <div class="photo-container">
                    <img src="images/monaners.jpg" class="rounded-circle img-fluid img-raised" alt="">
                </div>
                <h3 class="title">Welcome,
                    <?php echo $_SESSION['username']; ?>
                </h3>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <!-- Update Profile -->
                <div class="card">
                    <div class="card-body">
                        <form action="update_profile_submit.php" method="POST">
                            <!-- ERROR: password mismatch -->
                            <div class="alert alert-danger <?php echo (isset($_GET['wrongpw'])) ? "" : "d-none"; ?>"
                                role="alert">
                                Passwords do not match
                            </div>
                            <input name="userId" type="hidden" class="form-control" id="userId"
                                value="<?php echo $_SESSION['userId']; ?>">
                            <!-- USERNAME -->
                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input type="text" class="form-control" id="username" name="username"
                                    value="<?php echo $_SESSION['username']; ?>" readonly>
                            </div>

                            <!-- FIRST NAME -->
                            <div class="form-group">
                                <label for="firstname">Firstname:</label>
                                <input type="text" class="form-control" id="firstname" name="firstname"
                                    value="<?php echo $_SESSION['firstname']; ?>" required>
                            </div>

                            <!-- LAST NAME -->
                            <div class="form-group">
                                <label for="lastname">Lastname:</label>
                                <input type="text" class="form-control" id="lastname" name="lastname"
                                    value="<?php echo $_SESSION['lastname']; ?>" required>
                            </div>

                            <?php
                            $birthdate = explode('-', $_SESSION['birthdate']);
                            $year = intval($birthdate[0]);
                            $month = intval($birthdate[1]);
                            $day = intval($birthdate[2]);
                            ?>

                            <!-- BIRTHDAY -->
                            <div class="form-group row d-flex justify-content-center">
                                <label for="birthdate">Birthdate:</label>
                                <select type="number" name="month" class="form-select col-md-3 mx-1" id="birthdate"
                                    required>
                                    <option disabled value="">Month</option>
                                    <?php for ($i = 1; $i <= 12; $i++): ?>
                                        <option value="<?php echo $i ?>" <?php echo $i === $month ? 'selected' : ''; ?>><?php echo $i ?></option>
                                    <?php endfor; ?>
                                </select>

                                <select type="number" name="day" class="form-select col-md-3 mx-1" id="birthdate"
                                    required>
                                    <option disabled value="">Day</option>
                                    <?php for ($i = 1; $i <= 31; $i++): ?>
                                        <option value="<?php echo $i ?>" <?php echo $i === $day ? 'selected' : ''; ?>><?php echo $i ?></option>
                                    <?php endfor; ?>
                                </select>

                                <select type="number" name="year" class="form-select col-md-4 mx-1" id="birthdate"
                                    required>
                                    <option disabled value="">Year</option>
                                    <?php for ($i = 1940; $i <= date('Y'); $i++): ?>
                                        <option value="<?php echo $i ?>" <?php echo $i === $year ? 'selected' : ''; ?>><?php echo $i ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>

                            <!-- GENDER -->
                            <div class="form-group">
                                <label for="gender">Gender:</label>
                                <input type="text" class="form-control" id="gender" name="gender"
                                    value="<?php echo $_SESSION['gender']; ?>" required>
                            </div>

                            <!-- PASSWORD -->
                            <div class="form-group mt-3">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>

                            <!-- CONFIRM PASSWORD -->
                            <div class="form-group mt-3">
                                <label for="confirmPassword">Confirm Password:</label>
                                <input type="password" class="form-control" id="password" name="confirmPassword">
                            </div>
                            <button type="submit" class="btn btn-success mt-3">Update</button>
                            <a href="user_profile.php"><button type="button"
                                    class="btn btn-danger mt-3">Cancel</button></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once 'includes/footer.php' ?>
</body>

</html>