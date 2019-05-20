<?php
$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "loginPhp";

$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

if (!$conn){
    die("Conexion fallo". mysqli_connect_error());
}else{
    echo "Conexion exitosa";
}
