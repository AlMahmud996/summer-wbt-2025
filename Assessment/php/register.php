<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="../css/register.css">
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
    $name = $email = $username = $password = $confirmpass = $gender = $dob = "";
    $nameErr = $emailErr = $usernameErr = $passwordErr = $confirmpassErr = $genderErr = $dobErr = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is Required";
        } else {
            $name = htmlspecialchars($_POST)["name"];
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["email"])) {
            $emailErr = "Email is Required";
        } else {
            $email = "";
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["username"])) {
            $usernameErr = "UserName is Required";
        } else {
            $username = htmlspecialchars($_POST)["username"];
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["password"])) {
            $passwordErr = "Password is Required";
        } else {
            $password = htmlspecialchars($_POST)["password"];
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["confirmpass"])) {
            $confirmpassErr = "Confirm your Password";
        } else {
            $confirmpass = htmlspecialchars($_POST)["confirmpass"];
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
        <div class="form-container">
            <h2>REGISTRATION</h2>
            <form method="post" action="">
                <label for="">Name</label>
                <input type="text" name="name">
                <span class="error">* <?php echo $nameErr; ?></span> <br>
                <hr>

                <label for="">Email</label>
                <input type="text" name="email"> i <span class="error">* <?php echo $emailErr; ?></span> <br><br>

                <hr>

                <label for="">User Name</label>
                <input type="text" name="username">
                <span class="error">* <?php echo $usernameErr; ?></span> <br> <br>
                <hr>

                <label for="">Password</label>
                <input type="text" name="password">
                <span class="error">* <?php echo $passwordErr; ?></span> <br> <br>
                <hr>

                <label for="">Confirm Password</label>
                <input type="text" name="confirmpass"><span class="error">* <?php echo $confirmpassErr; ?></span> <br>
                <br>
                <hr>

                <div class="gender">
                    <label>Gender</label>
                    <input type="radio" name="gender">Male
                    <input type="radio" name="gender">Female
                    <input type="radio" name="gender">Other <br>
                </div>

                <label>Date Of Birth</label>
                <input type="date" name="dob"><br>

                <input type="submit" value="Submit">
                <input type="reset" value="reset">
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