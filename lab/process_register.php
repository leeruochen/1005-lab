<!DOCTYPE html>
<html lang="en">
    <?php include 'inc/head.inc.php'; ?>
    <body>
        <?php include 'inc/nav.inc.php'; ?>
        <main class ="container">
            <?php
                $email = $fname = $lname = $errorMsg = "";
                $success = true;

                function sanitize_input($data)
                    {
                        $data = trim($data);
                        $data = stripslashes($data);
                        $data = htmlspecialchars($data);
                        return $data;
                    }
                // check if form was submitted
                if ($_SERVER["REQUEST_METHOD"] == "POST")
                {
                    if (empty($_POST["email"]))
                    {
                        $errorMsg .= "Email is required.<br>";
                        $success = false;
                    }
                    else
                    {
                        $email = sanitize_input($_POST["email"]);
                        // validate email format
                        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
                        {
                            $errorMsg .= "Invalid email format.<br>";
                            $success = false;
                        }
                    }

                    if (empty($_POST["lname"]))
                    {
                        $errorMsg .= "Last name is required.<br>";
                        $success = false;
                    }
                    else
                    {
                        $lname = sanitize_input($_POST["lname"]);
                    }

                    if (empty($_POST["pwd"]) || empty($_POST["pwd_confirm"]))
                    {
                        $errorMsg .= "Password and confirmation are required.<br>";
                        $success = false;
                    }
                    else if ($_POST["pwd"] !== $_POST["pwd_confirm"])
                    {
                        $errorMsg .= "Passwords do not match.<br>";
                        $success = false;
                    }

                    if ($success)
                    {
                        echo "<h2>Your registration is successful!</h2>";
                        echo "<h3>Thank you for signing up, " . $lname . "</h3>";
                        echo "<div class=\"mb-3\"><a href='index.php' class='btn btn-primary'>Log in</a></div>";
                    }
                    else
                    {
                        echo "<h2>Oops!</h2>";
                        echo "<h3>The following errors were detected:</h3>";
                        echo "<p>" . $errorMsg . "</p>";
                        echo "<div class=\"mb-3\"><a href='register.php' class='btn btn-primary'>Return to Registration</a></div>";
                    }
                }
            ?>
        </main>
        <?php include 'inc/footer.inc.php'; ?>
    </body>
</html>

