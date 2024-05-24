<?php
session_start();
require 'conn.php';


if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $contact = mysqli_real_escape_string($conn, $_POST['contactnumber']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);


    $query = "INSERT INTO users (name, username, contactnumber, status) VALUES ( '$name','$username','$contact','$status')";
    
    $query_run = mysqli_query($conn, $query);
    if($query_run){
        $_SESSION['message'] = "Registered Successfully";
        header("Location: register.php");
        exit(0);
    }else{
        $_SESSION['message'] = "Not Registered Successfully";
        header("Location: register.php");
        exit(0);
    }
}
/*if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['Name']);
    $description = mysqli_real_escape_string($conn, $_POST['Description']); 
  

    $query = "INSERT INTO items (Name, Description) VALUES ('$name', '$description')";

    $query_run = mysqli_query($conn, $query);
    if ($query_run) {
        $_SESSION['message'] = "Save Sucessfully";   
        header("Location: supplygroups.php");
        exit(0);
    }else{
        $_SESSION['message'] = "Save Not Sucessfully";   
        header("Location: supplygroups.php");
        exit(0);
    }
}*/

?>
