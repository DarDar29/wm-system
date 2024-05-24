<?php
include('conn.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style/forgotpass.css">
    
    <title>Register</title>
</head>
<body>
<div class="line ">

<div class="content">
    <div class="shadow-text"> <h2>Warehouse </h2>
    <h2 >Management </h2>
    <h2 >System </h2>
    <h2 >with </h2>
    <h2 >2d   </h2>
    <h2 >Layout</h2></div>
   
</div>
</div> 
<div class="right-line">
    <div class="content1">
    <div class="login-container">
    <h2>Reset Password</h2>
    <p>Please enter your phone number. <br>
You will receive a code to create a new password via text message.</p>
    <form class="login-form" action="loginfunction.php" method="POST">
    <div class="form-group get-otp">
            <label for="nameuser">Contact Number:</label>
            <input type="text" class="form-control" name="nameuser" id="nameuser" placeholder="Enter your number">
            <span class="toggle-btn2" onclick="getotp()">Get OTP</span>
        </div>
        <div class="form-group password-toggle">
            <label for="password">New Password:</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Enter your new password">
            <span class="toggle-btn" onclick="togglePassword()">Show</span>
            <label for="password">Confirm Password:</label>
            <input type="password" class="form-control" name="password" id="password1" placeholder="Confirm your password">
            <span class="toggle-btn1" onclick="togglePassword1()">Show</span>
        </div>
       
        <!--<button type="button" class="login-btn">Login</button>-->
        <input type="submit" value="Save" name="submit" class="login-btn">
    </form>
    <div class="create-account">
        <a href="login.php">Login</a>
    </div>
</div>
</div>
    </div>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

<script>
    function togglePassword() {
        var passwordInput = document.getElementById('password');
        var toggleBtn = document.querySelector('.toggle-btn');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            toggleBtn.textContent = 'Hide';
        } else {
            passwordInput.type = 'password';
            toggleBtn.textContent = 'Show';
        }
    }
    function togglePassword1() {
        var passwordInput = document.getElementById('password1');
        var toggleBtn = document.querySelector('.toggle-btn1');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            toggleBtn.textContent = 'Hide';
        } else {
            passwordInput.type = 'password';
            toggleBtn.textContent = 'Show';
        }
    }
    function getotp() {
        var passwordInput = document.getElementById('nameuser');
        var toggleBtn = document.querySelector('.toggle-btn2');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            toggleBtn.textContent = 'Get OTP';
        } else {
            passwordInput.type = 'password';
            toggleBtn.textContent = 'Get OTP';
        }
    }
</script>
</body>
</html>