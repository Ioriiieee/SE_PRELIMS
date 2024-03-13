<?php
session_start();

include("connect.php");

if (isset($_POST["LoginAsAdmin"])) {
    $user = $_POST['user'];
    $password = $_POST['password'];

    // Retrieve admin credentials from the database
    $result = mysqli_query($con, "SELECT * FROM admin WHERE user = '$user'");
    if ($row = mysqli_fetch_assoc($result)) {
        // Check if the provided password matches the password stored in the database
        if ($password === $row['password']) { // Assuming password is stored as plaintext
            // Set session variable to indicate admin is logged in
            $_SESSION['user'] = $user;

            // Set success message for notification
            $_SESSION['success_message'] = 'Admin Login Successful';

            // Redirect to the productList page
            header("Location: prodList/productList.php");
            exit();
        } else {
            // Invalid password
            echo "<script>alert('Invalid password. Please try again.');</script>";
        }
    } else {
        // Admin user not found
        echo "<script>alert('Admin user not found.');</script>";
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
    <link rel="stylesheet" href="styleloginAdmin.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>
     <div class="header">TOOL AND DIE SHOP</div>
<body>
    <div class="wrapper">
        <form action="">
            <h1>WELCOME!</h1>
            <div class="input-box">
                <input type="text" placeholder="Username" required>
                <box-icon name='user'></box-icon>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" required>
                <box-icon name='lock-alt' type='solid'></box-icon>
                <span class="password-mask">&bull;</span>
            </div>
        
            <div class="rember-forgot">
                <label><input type="checkbox">Remember me</label>
                
                <div class="register link">
            <p> Don't have an account?<a href="regAdmin.php">Register</a>
            
            </p>
        </div>

            </div>
            <button type="submit" class="btn">LoginAsAdmin</button>
           
        





            </div>
            <style> @import url('https://fonts.googleapis.com/css2?family=Oleo+Script:wght@400;700&display=swap')</style>


            
 
