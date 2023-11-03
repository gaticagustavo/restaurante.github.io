<?php
$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "restaurante";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Consulta para obtener la capacidad del restaurante
$sql = "SELECT capacidad FROM restaurantes WHERE id = " . $_POST['restaurante'];
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Calcular la cantidad de reservas del día
    $sql = "SELECT COUNT(*) FROM reservas WHERE fecha = '" . $_POST['fecha'] . "' AND restaurante_id = " . $_POST['restaurante'];
    $reservas_hoy = $conn->query($sql);
    $cantidad_reservas = $reservas_hoy->fetch_row()[0];

    // Comprobar si la capacidad del restaurante no ha sido alcanzada
    if ($cantidad_reservas < $result->fetch_assoc()['capacidad']) {
        // Guardar la reserva en la base de datos
        $sql = "INSERT INTO reservas (restaurante_id, fecha, hora, nombre, apellido, correo, telefono) VALUES ('" . $_POST['restaurante'] . "', '" . $_POST['fecha'] . "', '" . $_POST['hora'] . "', '" . $_POST['nombre'] . "', '" . $_POST['apellido'] . "', '" . $_POST['correo'] . "', '" . $_POST['telefono'] . "')";

        if ($conn->query($sql) === TRUE) {
            echo "Reserva realizada con éxito.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo '<script>alert("Lo sentimos, la capacidad del restaurante ha sido alcanzada.");</script>';
     }
    } else {
    echo "Error: No se pudo encontrar el restaurante.";
}

$conn->close();


?>
<script>
    const nodemailer = require('nodemailer');

async function sendEmailConfirmation(user) {
    let transporter = nodemailer.createTransport({
        service: 'gmail',
        auth: {
            user: 'YOUR_EMAIL',
            pass: 'YOUR_PASSWORD'
        }
    });

    let mailOptions = {
        from: 'YOUR_EMAIL',
        to: user.email,
        subject: 'Confirmación de registro',
        text: `¡Gracias por registrarte, ${user.name}! Por favor, confirma tu correo electrónico haciendo clic en el siguiente enlace:`
    };

    await transporter.sendMail(mailOptions);
}
app.post('/register', async (req, res) => {
    // Aquí debe ir su lógica actual de registro de usuarios

    // Asumiendo que su lógica de registro devuelve un objeto de usuario llamado 'user'
    try {
        await sendEmailConfirmation(user);
        res.status(200).json({ message: 'Registro exitoso. Se ha enviado un correo electrónico de confirmación.' });
    } catch (error) {
        res.status(500).json({ message: 'Error al enviar el correo electrónico de confirmación.' });
    }
});
</script>