<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "spa";
$port = 3306;

$conn = new mysqli($servername, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
