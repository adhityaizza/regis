<?php
include("../config/config.php");

$name = $_POST['name'];
$username = $_POST['username'];
$password = md5($_POST['password']);

$sql = "INSERT INTO user(name, username, password) VALUES ('$name', '$username', '$password')";
$query = mysqli_query($connect, $sql);

if($query){
    echo '<script>alert("Congratulations! Your registration was successful.");</script>';
    echo '<script>window.location.href = "../index.php";</script>';
}else{
    echo '<script>alert("Your registration was failed.");</script>';
    echo '<script>window.location.href = "../pages/register.php";</script>';
}

?>