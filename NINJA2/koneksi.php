<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ninja_adventure";

// create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//check connection
if($conn->connect_error){
    die("connection failed: " . $conn->connect_error);
}

?>