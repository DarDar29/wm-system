<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Inventory Management</title>
</head>
<body>
    <div class="container mt-5">
    <?php include "message.php";?>
</div>
        <div class="row">
            <div class="card">
                <div class="car-header">
                    <h4>User Management
                        <a href="users.php" class="btn btn-warning float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
<form action="usermanagefunc.php" method="POST">
<div class="mb-3">
    <input type="hidden" name="id" class="form-control">
</div>
<div class="mb-3">
    <label for="name">Name</label>
    <input type="text" name="name" class="form-control">
</div>
<div class="mb-3">
    <label for="username">Username</label>
    <input type="text" name="username" class="form-control">
</div>
<div class="mb-3">
    <label for="password">Password</label>
    <input type="text" name="password" class="form-control">
</div>
<div class="mb-3">
<label for="contactnumber">Contact Number</label>
    <input type="text" name="contactnumber" class="form-control">
</div>
<div class="mb-3">
    <label for="stat">Status</label>
    <select name="stat" id="stat" class="form-control">
    <option value="Active" class="form-control" name="stat">Active</option>
    <option value="Offline" class="form-control" name="stat">Offline</option>
    </select>
</div>
<div class="mb-3">
   <button type="submit" name="save1" class="btn btn-primary">Save</button>
</div>
</form>
        </div>
        </div>
        </div>
    </div>
</body>
</html>