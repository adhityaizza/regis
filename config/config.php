<?php

$server = "localhost";
$user = "root";
$password = "";
$database_name = "azin";

$connect = mysqli_connect($server, $user, $password, $database_name);
if(!$connect){
    die("unable to connect database: " . mysqli_connect_error());
}
?>
