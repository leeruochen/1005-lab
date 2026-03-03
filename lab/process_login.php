<?php
require_once __DIR__ . '/inc/functions.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
    <?php include 'inc/head.inc.php'; ?>
    <body>
        <?php include 'inc/nav.inc.php'; ?>
        <main class ="container">
            <?php
                $email = $pwd = $fname = $lname = $errorMsg = "";
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
                    }

                    if (empty($_POST["pwd"]))
                    {
                        $errorMsg .= "Password is required.<br>";
                        $success = false;
                    }

                    if ($success)
                    {
                        authenticateUser();
                        if ($success)
                        {
                            echo "<h2>Your login is successful!</h2>";
                            echo "<h3>Welcome back, " . $fname . " " . $lname . "</h3>";
                            echo "<div class=\"mb-3\"><a href='index.php' class='btn btn-primary'>Return to Home</a></div>";
                        }
                        else
                        {
                            echo "<h2>Oops!</h2>";
                            echo "<h3>The following errors were detected:</h3>";
                            echo "<p>" . $errorMsg . "</p>";
                            echo "<div class=\"mb-3\"><a href='login.php' class='btn btn-primary'>Return to Login</a></div>";
                        }
                    }
                    else
                    {
                        echo "<h2>Oops!</h2>";
                        echo "<h3>The following errors were detected:</h3>";
                        echo "<p>" . $errorMsg . "</p>";
                        echo "<div class=\"mb-3\"><a href='login.php' class='btn btn-primary'>Return to Login</a></div>";
                    }
                }
            ?>
        </main>
        <?php include 'inc/footer.inc.php'; ?>
    </body>
</html>

