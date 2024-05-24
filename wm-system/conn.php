<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "warehouse";

$conn = new mysqli($servername, $username, $password, $dbname);

if(!$conn){
   die("Connection failed:". $conn->error);   
}


?>