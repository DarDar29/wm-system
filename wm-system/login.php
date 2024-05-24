<?php
include('conn.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style/login.css">
    
    <title>Log In</title>
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
    <h2>Login</h2>
   <?php if (isset($_GET['error'])) { ?>
    <p class="error"><?php echo $_GET['error']; ?></p>
   <?php } ?>
    <form class="login-form" action="loginfunction.php" method="POST">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" name="username" id="username" placeholder="Enter your username">
        </div>
        <div class="form-group password-toggle">
            <label for="password">Password:</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password">
            <span class="toggle-btn" onclick="togglePassword()">Show</span>
        </div>
        <!--<button type="button" class="login-btn">Login</button>-->
        <input type="submit" value="Login" name="submit" class="login-btn">
    </form>
    <div class="create-account">
        <a href="register.php">Dont have an Account?</a>
    </div>
    <div class="forgot-password">
        <a href="forgotpass.php">Forgot Password?</a>
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
</script>
</body>
</html>