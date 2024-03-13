<?php
// Establish database connection
include("connect.php");

// Check if the form is submitted
if (isset($_POST["register"])) {
    // Retrieve username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Insert admin credentials into the admin table
    $query = "INSERT INTO admin (user, password) VALUES ('$username', '$password')";
    $result = mysqli_query($con, $query);

    if ($result) {
        // Registration successful
        echo "<script>alert('Admin registration successful');</script>";
        // Redirect to admin login page
        header("Location: SE_Prelims/adminLogin.php");
        exit(); // Ensure no further code execution after redirect
    } else {
        // Registration failed
        echo "<script>alert('Error: Admin registration failed');</script>";
    }
}
?>


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tool and Die Shop - Admin Registration</title>
    <link rel="stylesheet" href="styleloginAdmin.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Oleo+Script:wght@400;700&display=swap');
    </style>
</head>
<body>
    <div class="header">TOOL AND DIE SHOP</div>
    <div class="wrapper">
        <form action="adminLogin.php" method="post"> <!-- Point to the PHP script for handling admin registration -->
            <h1>ADMIN REGISTRATION</h1>
            <div class="input-box">
                <input type="text" name="username" placeholder="Username" required>
                <box-icon name='user'></box-icon>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Password" required>
                <box-icon name='lock-alt' type='solid'></box-icon>
                <span class="password-mask">&bull;</span>
            </div>
        
            <div class="rember-forgot">
                <label><input type="checkbox">Remember me</label>

            </div>
            <button type="submit" class="btn" name="register">Register</button>
        </form>
    </div>
</body>
</html>
