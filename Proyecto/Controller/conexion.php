<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "arca";

// Create connection
$conexion = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conexion->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>