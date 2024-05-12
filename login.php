<?php
session_start();

include ("db.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $Email = $_POST["mail"];
    $Password = $_POST["password"];

    if (!empty($Email) && !empty($Password) && !is_numeric($Email)) {
        $query = "select * from form where mail = '$Email' limit 1";
        $result = mysqli_query($con, $query);

        if ($result) {
            if ($result && mysqli_num_rows($result) > 0) {
                $user_data = mysqli_fetch_assoc($result);

                if ($user_data['pass'] == $Password) {
                    header("location: after-login.html");
                    die;
                }
            }
        }
        echo "<script type='text/javascript'> alert('wrong credentials')</script>";
    } else {
        echo "<script type='text/javascript'> alert('wrong credentials')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="login.css">

    <!-- icons file -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<style>
    body {
        background-image: url('backgrounds/third.png');
    }
</style>

<body>

    <!-- starting quote for login page -->
    <div class="quote">
        <hr>
        <p>"In the realm of digital workspace, education transcends
            boundaries. It's not confined to classrooms;</p>
        <p class="second-line">it's a continuous journey in the vast expanse of the internet." <b>- Anonymous</b></p>
        <hr>
    </div>

    <!-- the doodle of studying -->
    <div class="study-doodle">
        <img src="backgrounds/study_doodle.png" alt="">
    </div>

    <!-- login form start -->
    <div class="wrapper">
        <div class="back"><a href="index.html"><i class="bx bx-left-arrow-alt"></i></a></div>

        <form method="POST">
            <h1>Login</h1>
            <br>
            <hr>
            <div class="input-box">
                <input type="text" placeholder="Username" name="mail" required><i class="bx bx-user-circle"></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" name="password" required><i class="bx bx-lock"></i>
            </div>

            <div class="remember-forgot">
                <label><input type="checkbox">Remember me</label>
                <a href="#">forgot password?</a>
            </div>
            <br>
            <button type="submit" class="btn">Login</button>
            <br><br>
            <div class="register-link">
                <p>Don't have an account? <a href="registration_form.php">Register</a></p>
            </div>
        </form>
    </div>
    <!-- login form end  -->
</body>

</html>