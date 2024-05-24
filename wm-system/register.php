<?php
session_start();
require "conn.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.bootstrap5.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   
    <link rel="stylesheet" href="style/register.css">
    
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
    <h2>Sign Up</h2>
     <?php include('message.php')?>
    
  
    <form class="login-form" action="registerfunction.php" method="POST">
        <div class="form-group">
        <input type="hidden" class="form-control" name="name" id="id">
            <label for="nameuser">Name:</label>
            <input type="text" class="form-control" name="name" id="nameuser" placeholder="Enter your name" required>
            <label for="username">Username:</label>
            <input type="text" class="form-control" name="username" id="username" placeholder="Enter your username" required>
        </div>
        <div class="form-group password-toggle">
            <label for="password">Password:</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" required>
            <span class="toggle-btn" onclick="togglePassword()">Show</span>
            <label for="password">Confirm Password:</label>
            <input type="password" class="form-control" name="cpassword" id="password1" placeholder="Confirm your password" required>
            <span class="toggle-btn1" onclick="togglePassword1()">Show</span>
        </div>
        <div class="form-group">
            <label for="nameuser">Contact Number:</label>
            <input type="text" class="form-control" name="contactnumber" id="nameuser" placeholder="Enter your number" required>
        </div>
        <div class="form-group">
            <label for="status">Status:</label>
            <select name="status" class="form-control" id="nameuser" >
                <option name="status" value="Active">Active</option>
            </select>
           
        </div>
        <!--<button type="button" class="login-btn">Login</button>-->
        <input type="submit" value="Register" name="submit" class="login-btn">
    </form>
    <div class="create-account">
        <a href="login.php">Login</a>
    </div>
</div>
</div>
    </div>


    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
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
</script>
</body>
</html>