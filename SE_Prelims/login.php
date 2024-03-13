<?php
session_start();

include("connect.php");

if (isset($_POST["login"])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Validate user credentials
    $result = mysqli_query($con, "SELECT * FROM registration WHERE email = '$email' AND password = '$password'");
    if (mysqli_num_rows($result) > 0) {
        // Set session variable to indicate user is logged in
        $_SESSION['user'] = $email;

        // Set success message for notification
        $_SESSION['success_message'] = 'Login Successful';

        // Redirect to the productList page
        header("Location: prodList/productList.php");
        exit();
    } else {
        echo "<script>alert('Invalid email or password. Please try again.');</script>";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tool and Die Shop</title>
    <link rel="stylesheet" href="stylelogin.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
  
</head>
    <div class="header">TOOL AND DIE SHOP</div>
<body>
    <!-- Login Form -->
    <form action="" id="login-form" method="post">
        <h1>WELCOME!</h1>
        <div class="input-box">
            <input type="text" placeholder="Username" required name="email">
            <box-icon name='user'></box-icon>
        </div>
        <div class="input-box">
            <input type="password" placeholder="Password" required name="password">
            <box-icon name='lock-alt' type='solid'></box-icon>
            <span class="password-mask">&bull;</span>
        </div>

        <div class="rember-forgot">
            <label><input type="checkbox">Remember me</label>
            <a href="#">Forgot password?</a>
        </div>
        <button type="submit" class="btn" name="login">Login</button>

        <div class="register link">
            <p> Don't have an account?<a href="regForm.php">Register</a>
            
            </p>
        </div>
        
    </form>

    <script src="script.js"></script>
</body>

</html>
