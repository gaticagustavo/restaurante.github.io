<?php
$servername = "127.0.0.1:3308"; // Nombre del servidor (puede variar)
$username = "root"; // Nombre de usuario de la base de datos
$password = ""; // Contraseña de la base de datos
$database = "restaurante"; // Nombre de la base de datos

// Crear la conexión
$conn = mysqli_connect($servername, $username, $password, $database);

// Verificar la conexión
if (!$conn) {
    die("Conexión fallida: " . $mysqli_connect_error());
}

// Resto de tu código PHP
echo "conexion exitosa";
?>


