<?php
session_start();
include "koneksi.php";

$username1 = $_POST["username1"];
$passwot = $_POST["passwot"];

$query = mysqli_query($conn, "SELECT * FROM anggota WHERE username1='$username1' AND passwot='$passwot'");
if($data = mysqli_num_rows($query) > 0){
    $_SESSION["username"] = $username;
    header("location: landing.php");
}else{
    header("location: login.php");
}

?>