<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "akiraGames";

$conection = mysqli_connect($server, $user, $password, $database);

if(!$conection){
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_select_db($conection, $database);
