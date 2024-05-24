<?php
session_start();
require 'conn.php';

if (isset($_POST['delete_group'])) {
    $group = mysqli_real_escape_string($conn, $_POST['delete_group']);

    $query = "DELETE FROM items WHERE ID='$group'";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        $_SESSION['message'] = "item Deleted Successfully";
        header("Location: supplygroups.php");
        exit(0);
    }else{
        $_SESSION['message'] = "item Deleted Failed";
        header("Location: supplygroups.php");
        exit(0);
    }
}

if(isset($_POST['Update'])){
   
    $id = mysqli_real_escape_string($conn, $_POST['id']);
     $name = mysqli_real_escape_string($conn, $_POST['Name']);
     $Description = mysqli_real_escape_string($conn, $_POST['Description']);
    
 
     $query = "UPDATE items SET Name = '$name', Description = '$Description' WHERE id = '$id' ";
 
     $query_run = mysqli_query($conn, $query);
     if($query_run){
         $_SESSION['message'] = "Updated Successfully";
         header("Location: supplygroups.php");
         exit(0);
     }else{
         $_SESSION['message'] = "Updated Failed";
         header("Location: supplygroups.php");
         exit(0);
     }
 }

if(isset($_POST['update_group'])){
   
   $group = mysqli_real_escape_string($conn, $_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $contact = mysqli_real_escape_string($conn, $_POST['contactnumber']);
    $status = mysqli_real_escape_string($conn, $_POST['stat']);

    $query = "UPDATE items SET name = '$name', username ='$username', password='$password', contactnumber='$contact', status='$status' WHERE id='$id' ";

    $query_run = mysqli_query($conn, $query);
    if($query_run){
        $_SESSION['message'] = "Updated Successfully";
        header("Location: supplygroups.php");
        exit(0);
    }else{
        $_SESSION['message'] = "Updated Failed";
        header("Location: supplygroups.php");
        exit(0);
    }
}

if (isset($_POST['submit'])) {
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
}
?>