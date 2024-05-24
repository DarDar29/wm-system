<?php
session_start();
require 'conn.php';

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['Name']);
    $description = mysqli_real_escape_string($conn, $_POST['Description']); 
  

    $query = "INSERT INTO equipment_groups (name, description) VALUES ('$name', '$description')";

    $query_run = mysqli_query($conn, $query);
    if ($query_run) {
        $_SESSION['message'] = "Save Sucessfully";   
        header("Location: equimentgroup.php");
        exit(0);
    }else{
        $_SESSION['message'] = "Save Not Sucessfully";   
        header("Location: equimentgroup.php");
        exit(0);
    }
}
?>
?>