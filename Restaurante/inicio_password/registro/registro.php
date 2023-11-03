<?php
// Conexión a la base de datos
$servername = "127.0.0.1:3308";
$username = "root";
$password = "";
$dbname = "restaurante";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Obtener los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores del formulario
    $nombre = $_POST["nombre"];
    //$usuario = $_POST["usuario"];
    $Edad = $_POST["Edad"];
    $correo = $_POST["correo"];
    $numero = $_POST["numero"];
    $contrasena = password_hash($_POST['contrasena'],PASSWORD_BCRYPT);
    
    // Insertar los valores en la base de datos
    $sql = "INSERT INTO `tbl_registro_usuario` (nombre,Edad, correo,contrasena) VALUES ('$nombre', '$Edad', '$correo','$contrasena')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('REGISTRO EXITOSO');</script>";
        header("location: ../index.php");
    } else {
        echo "Error al registrar: " . mysqli_error($conn);
    }
}
?>
