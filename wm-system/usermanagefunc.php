<?php
include "conn.php";
if(isset($_POST['delete_func'])){
$user = mysqli_real_escape_string($conn, $_POST['delete_func']);
$query ="DELETE FROM users WHERE id='$user'";
$query_run = mysqli_query($conn, $query);


if($query_run){
    $_SESSION['message'] = "Deleted Successfully";
    header("Location: users.php");
    exit(0);
}else{
    $_SESSION['message'] = "Deleted Failed";
    header("Location: users.php");
    exit(0);
}

}

if(isset($_POST['update'])){
   
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $contact = mysqli_real_escape_string($conn, $_POST['contactnumber']);
    $status = mysqli_real_escape_string($conn, $_POST['stat']);

    $query = "UPDATE users SET name = '$name', username ='$username', password='$password', contactnumber='$contact', status='$status' WHERE id='$id' ";

    $query_run = mysqli_query($conn, $query);
    if($query_run){
        $_SESSION['message'] = "Updated Successfully";
        header("Location: users.php");
        exit(0);
    }else{
        $_SESSION['message'] = "Updated Failed";
        header("Location: users.php");
        exit(0);
    }
}

if(isset($_POST['save1'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $contact = mysqli_real_escape_string($conn, $_POST['contactnumber']);
    $status = mysqli_real_escape_string($conn, $_POST['stat']);

    $query = "INSERT INTO users (name, username, password, contactnumber, status) VALUES ('$name', '$username' ,'$password','$contact','$status')";

    $query_run = mysqli_query($conn, $query);
    if($query_run){
        $_SESSION['message'] = "Created Successfully";
        header("Location: usermanage.php");
        exit();
    }else{
        $_SESSION['message'] = "Not Created Successfully";
        header("Location: usermanage.php");
        exit();
    }
}
?>