<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css">
    <style>
        .error {
            color: red;
            font-size: 14px;
            ;
        }
    </style>
</head>

<body>
    <?php
    $username = $password = "";
    $usernameErr = $passwordErr = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["username"])) {
            $usernameErr = "Username is required";
        } else {
            $username = htmlspecialchars($_POST["username"]);
        }

        if (empty($_POST["password"])) {
            $passwordErr = "Password is required";
        } else {
            $password = htmlspecialchars($_POST["password"]);
        }

        if (empty($usernameErr) && empty($passwordErr)) {
            // echo "<p style='color:green; text-align:center;'>Login successful </p>";
        }
    }
    ?>
    <nav>
        <section class="navbar">
            <h2>XCompany</h2>
            <div class="atag">
                <a href="../index.html">Home</a> |
                <a href="http://localhost:8080/Web%20Technology/summer-wbt-2025/Assessment/php/login.php">Login</a> |
                <a
                    href="http://localhost:8080/Web%20Technology/summer-wbt-2025/Assessment/php/register.php">Registrations</a>
            </div>
        </section>
    </nav>
    <hr>
    <main class="main">
        <div class="login-box">
            <h2>Login</h2>
            <form method="post" action="">
                <div class="input-group">
                    <label>Username</label>
                    <input type="text" name="username" value="<?php echo $username; ?>">
                    <span class="error">*<?php echo $usernameErr; ?></span><br>
                </div>
                <div class="input-group">
                    <label>Password</label>
                    <input type="password" name="password">
                    <span class="error">*<?php echo $passwordErr; ?></span><br>
                </div>
                <hr>
                <input type="checkbox"> Remember Me <br>
                <button type="submit" class="btn">Login</button>
                <a href="forgotpass.php">Forgot password?</a>
            </form>
        </div>

    </main>
    <hr>
    <footer class="footer">
        <h5>Copyright</h5>
        &copy; 2017
    </footer>
</body>

</html>