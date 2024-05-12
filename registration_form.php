<?php
session_start();

include ("db.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $Firstname = $_POST['fname'];
    $Lastname = $_POST['lname'];
    $Email = $_POST['mail'];
    $Password = $_POST['pass'];

    if (!empty($Email) && !empty($Password) && !is_numeric($Email)) {

        $query = "insert into form(fname, lname, mail, pass) values ('$Firstname', '$Lastname', '$Email', '$Password')";

        mysqli_query($con, $query);

        echo "<script type='text/javascript'> alert('Successfully Registered')</script>";

        header("Location: after-registration.html");
        die;

    } else {
        echo "<script type='text/javascript'> alert('Please Enter Some Valid Information')</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>

    <link rel="stylesheet" href="registration_form.css">

    <!-- icon files link -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<style>
    body {
        background-image: url('backgrounds/third.png');
    }
</style>

<body>

    <!-- welcome to gump and quote starts -->
    <div class="welcome-png">
        <img src="backgrounds/welcome_gump.png" alt="">
    </div>

    <div class="quote">
        <hr>
        <p>“It's better to give than to receive. Especially advice.”</p>
        <hr>
    </div>

    <!-- doodle of a cartoon  -->
    <div class="doodle">
        <img src="backgrounds/register-page.png" alt="">
    </div>

    <!-- registration_form starts here  -->
    <div class="wrapper">
        <div class="back"><a href="login.php"><i class="bx bx-left-arrow-alt"></i></a></div>
        <form method="POST">

            <!-- form start -->
            <h1>Register</h1>
            <br>
            <hr>
            <div class="inputbox">
                <input type="text" placeholder="First Name" name="fname" required>
            </div>

            <div class="inputbox">
                <input type="text" placeholder="Last Name" name="lname" required>
            </div>

            <div class="inputbox">
                <input type="email" placeholder="Email-id" name="mail" required>
            </div>

            <div class="inputbox">
                <input type="password" placeholder="Password" name="pass" required>
            </div>


            <div class="terms">
                <label>
                    <input type="checkbox" required> I agree to the terms and conditions
                </label>
            </div>
            
            <br>

            <button type="submit" class="btn">Register</button>
            <div class="login-link">
                <p> Already have an account? <a href="login.php">Login</a></p>
            </div>
        </form>
    </div>
    <!-- registration_form end -->

</body>

</html>