<?php
// Establecer la conexión con la base de datos
$servername = "127.0.0.1:3308";
$username = "root";
$password = "";
$dbname = "restaurante";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar si se han enviado los datos del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $contrasena = $_POST['contrasena'];
    
    // Consultar la base de datos para verificar las credenciales
    $sql = "SELECT * FROM clientes WHERE username = '$nombre' AND contrasena = '$contrasena'";
    $result = $conn->query($sql);
    
    if ($result->num_rows === 1) {
        // Las credenciales son correctas, iniciar sesión
        session_start();
        $_SESSION['nombre'] = $nombre;
        echo "<script>alert('INICIO DE SECCION EXITOSO');</script>";
        header('Location: ../index.html ');
    } else  {
    echo "<div class='alert alert-danger'>Acceso denegado</div>";
    }
}
// Cerrar la conexión con la base de datos
$conn->close();
?>

