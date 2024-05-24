<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "warehouse";

$conn = new mysqli($servername, $username, $password, $dbname);

if(!$conn){
   die("Connection failed:". $conn->error);   
}

$sql = "SELECT id, name FROM items";
$result = $conn->query($sql);

$products = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $products[] = $row;
    }
}

$conn->close();

header('Content-Type: application/json');
echo json_encode($products);
?>