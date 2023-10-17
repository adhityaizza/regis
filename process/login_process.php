<?php
include '../config/config.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

if(!empty($username) && !empty($password)){
    $query = mysqli_query($connect, "select * from user where username='$username' && password='$password'");

    $result = mysqli_num_rows($query);

    if($result>0){
        header("location:../pages/home.php");
    }else{
        echo '<script>alert("Your login was failed.");</script>';
        echo '<script>window.location.href = "../index.php";</script>';
    }
}else{
    header("location:../index.php?app=failed");
}
?>