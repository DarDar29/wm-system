<?php
session_start();
include "conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>User Edit</title>
</head>
<body>
    <div class="container mt-5">
    <?php include "message.php";?>
</div>
        <div class="row">
            <div class="card">
                <div class="car-header">
                    <h4>User Edit
                        <a href="users.php" class="btn btn-warning float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                <?php
                if(isset($_GET['id'])){
                    $user = mysqli_real_escape_string($conn, $_GET['id']);
                    $query = "SELECT * FROM users WHERE id ='$user'"; 
                    $query_run = mysqli_query($conn, $query);

                    if(mysqli_num_rows($query_run) > 0){
$users = mysqli_fetch_array($query_run);
?>

<form action="usermanagefunc.php" method="POST">
    <input type="hidden" name="id" value="<?=$users['id'];?>" class="form-control">
<div class="mb-3">
    <label for="name">Name</label>
    <input type="text" value="<?=$users['name'];?>" name="name" class="form-control">
</div>
<div class="mb-3">
    <label for="username">Username</label>
    <input type="text" value="<?=$users['username'];?>" name="username" class="form-control">
</div>
<div class="mb-3">
    <label for="password">Password</label>
    <input type="text" value="<?=$users['password'];?>" name="password" class="form-control">
</div>
<div class="mb-3">
<label for="contactnumber">Contact Number</label>
    <input type="text" value="<?=$users['contactnumber'];?>" name="contactnumber" class="form-control">
</div>
<div class="mb-3">
    <label for="stat">Status</label>
    <select name="stat" id="stat" class="form-control">
    <option value="Active"  class="form-control" name="stat">Active</option>
    <option value="Offline" class="form-control" name="stat">Offline</option>
    </select>
</div>
<div class="mb-3">
   <button type="submit" name="update" class="btn btn-primary">Update</button>
</div>
<?php
                    }else{
                        echo "<h4>No name found</h4>";
                    }
                }
                ?>
</form>
        </div>
        </div>
        </div>
    </div>
</body>
</html>