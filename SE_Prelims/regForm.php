<?php
include("connect.php");

if (isset($_POST["submit"])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if email already exists
    $duplicate = mysqli_query($con, "SELECT * FROM registration WHERE email = '$email'");
    if (mysqli_num_rows($duplicate) > 0) {
        echo "<script>alert('Email is already registered. Please choose a different email.');</script>";
    } else {
        // Insert new record if email is not duplicated
        $query = mysqli_query($con, "INSERT INTO registration (username, email, password) VALUES('$username', '$email', '$password')");

        if ($query) {
            echo "<script>alert('Registration Successful'); window.location.href = 'login.php';</script>";
        } else {
            echo "<script>alert('Error during registration');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="stylelogin.css"> <!-- Link to your login CSS -->
    <link rel="stylesheet" href="styleregister.css"> <!-- Link to your register CSS -->
</head>
<body>
    <div class="wrapper">
        <!-- Registration Form -->
        <form action="" id="register-form" method="post">
            <h1>REGISTER</h1>
            <input type="text" id="reg-username" placeholder="Username" name="username" required>
            <input type="email" id="reg-email" placeholder="Email" name="email" required>
            <input type="password" id="reg-password" placeholder="Password" name="password" required>

            <button type="submit" name="submit">Submit</button>

            <div class="register link" id="login-link">
                <p>Already have an account? <a href="login.php">Login</a></p>
            </div>
        </form>
    </div>
</body>
</html>
<script src="script.js"></script>

<script src="script.js"></script>
