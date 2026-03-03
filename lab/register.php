<?php
require_once __DIR__ . '/inc/functions.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
    <?php include 'inc/head.inc.php'; ?>
    <body>
        <?php include 'inc/nav.inc.php'; ?>
        <?php include 'inc/header.inc.php'; ?>
        <main class ="container">
            <h1>Member Registration</h1>
            <p>
                For existing members, please go to the
                <a href="login.php">Sign In page</a>.
            </p>
            <form action="process_register.php" method="post">
                <div class="mb-3">
                    <label for="fname" class="form-label">First Name:</label>
                    <input type="text" id="fname" name="fname" class="form-control"
                        placeholder="Enter first name">
                </div>
                <div class="mb-3">
                    <label for="lname" class="form-label">Last Name:</label>
                    <input required maxlength="45" type="text" id="lname" name="lname" class="form-control" 
                        placeholder="Enter last name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input required maxlength="45" type="email" id="email" name="email" class="form-control"
                        placeholder="Enter email">
                </div>
                <div class="mb-3">
                    <label for="pwd" class="form-label">Password:</label>
                    <input required type="password" id="pwd" name="pwd" class="form-control"
                        placeholder="Enter password">
                </div>
                <div class="mb-3">
                    <label for="pwd_confirm" class="form-label">Confirm Password:</label>
                    <input required type="password" id="pwd_confirm" name="pwd_confirm" class="form-control"
                        placeholder="Confirm password">
                </div>
                <div class="mb-3 form-check">
                    <label for="agree" class="form-check-label">
                        <input required type="checkbox" name="agree" id="agree" class="form-check-input">
                        Agree to terms and conditions.
                    </label>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </main>
        <?php include 'inc/footer.inc.php'; ?>
    </body>
</html>