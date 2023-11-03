<?php
// Conexión a la base de datos
$servername = "127.0.0.1:3306";
$username = "root";
$password = "12345678";
$dbname = "restaurante";
$conexion = mysqli_connect($servername, $username, $password, $dbname);
// Obtener los datos del formulario
$email = $_POST['email'];
$contrasena = $_POST['contrasena'];
session_start();
$_SESSION["email"] = $email;
//consulta a la base
$consulta = "SELECT * FROM usuario WHERE email='$email' AND contrasena='$contrasena'";
$resultado = mysqli_query($conexion, $consulta);
$fila = mysqli_num_rows($resultado);
// Verificar la conexión
if ($fila) {
    echo "Inicio de sesión exitoso";
}
else{
    ?>
    <?php
include("");
}
// Obtener los datos del formulario
$contrasena = $_POST['contrasena'];
// Verificar las credenciales del usuario
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    echo "Inicio de sesión exitoso";
} else {
    echo "Email o contraseña incorrectos";
}
$conn->close();
?>
