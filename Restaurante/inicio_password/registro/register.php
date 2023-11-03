<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="registro.css" rel="stylesheet">
    <title>REGISTRO</title>
    <link rel="shortcut icon" href="log.jpg">
</head>
<body> 
     <form action="./registro.php" method="POST">
     <h2>Registro</h2>
     <br>
    <div class=" input-wrapper">
    <label for="nombre">Nombre</label>
    <br>
    <input type="text" id="nombre" name="nombre" required>
    </div>
    <div class=" input-wrapper">
    <div class=" input-wrapper">
    <label for="Edad">Edad</label>
    <br>
    <input type="Edad" id="Edad" name="Edad" required>
   </div>
    <div class=" input-wrapper">
    <label for="correo">Correo electrónico</label>
    <br>
    <input type="email" id="correo" name="correo" required>
   </div>
   <div class=" input-wrapper">
    <label for="numero">Numero</label>
    <br>
    <input type="text" id="numero" name="numero" required>
    </div>
   <div class=" input-wrapper">
    <label for="contrasena">Contraseña</label>
    <br>
    <input type="password" id="contrasena" name="contrasena" required>
   </div> 
    <input  class="btn" type="submit" value="Registrar">
</form>
</body>
 <!-- <label for="usuario">usuario</label>
    <br>
    <input type="text" id="usuario" name="usuario" required>
    </div> -->
</html>



