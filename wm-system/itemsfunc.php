<?php
session_start();
require 'conn.php';

if (isset($_POST['save'])) {
    $item = mysqli_real_escape_string($conn, $_POST['itemtype']);
    $class = mysqli_real_escape_string($conn, $_POST['class']); 
    $unit = mysqli_real_escape_string($conn, $_POST['unit']);
    $quantity = mysqli_real_escape_string($conn, $_POST['quan']);
    

    $query = "INSERT INTO supplies (item, classification, unit, quantity) VALUES ('$item', '$class', '$unit', '$quantity')";

    $query_run = mysqli_query($conn, $query);
    if ($query_run) {
        $_SESSION['message'] = "Save Sucessfully";   
        header("Location: items.php");
        exit(0);
    }else{
        $_SESSION['message'] = "Save Not Sucessfully";   
        header("Location: items.php");
        exit(0);
    }
}


if (isset($_POST['delete_group'])) {
    $group = mysqli_real_escape_string($conn, $_POST['delete_group']);

    $query = "DELETE FROM supplies WHERE ID='$group'";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        $_SESSION['message'] = "item Deleted Successfully";
        header("Location: items.php");
        exit(0);
    }else{
        $_SESSION['message'] = "item Deleted Failed";
        header("Location: items.php");
        exit(0);
    }
}
if(isset($_POST['Update'])){
   
    $id = mysqli_real_escape_string($conn, $_POST['id']);
     $item = mysqli_real_escape_string($conn, $_POST['itemtype']);
     $classification = mysqli_real_escape_string($conn, $_POST['class']);
     $unit = mysqli_real_escape_string($conn, $_POST['unit']);
     $quantity = mysqli_real_escape_string($conn, $_POST['quan']);
    
 
     $query = "UPDATE supplies SET item = '$item', classification = '$classification', unit = '$unit', quantity = '$quantity' WHERE id = '$id' ";
 
     $query_run = mysqli_query($conn, $query);
     if($query_run){
         $_SESSION['message'] = "Updated Successfully";
         header("Location: itemsedit.php");
         exit(0);
     }else{
         $_SESSION['message'] = "Updated Failed";
         header("Location: itemsedit.php");
         exit(0);
     }
 }
?>