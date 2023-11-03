 <?php 
include 'GLOBAL/config.php';
include 'carrito.php';
include 'barras.php';
?><!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La dame et le roi</title>
    <link rel="stylesheet" href="css/pedios.css">
    <link rel="stylesheet" href="../css/menupla.css">
    <link rel="shortcut icon" href="../img/log.jpg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">
</head>
<body >
<!-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La dame et le roi</title>
    
    <link rel="shortcut icon" href="../img/log.jpg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">
</head>
    <body> -->
      <!-- <head>
        
        <div class="card-contenido">
  <h3 style="text-align: center;">Hacer una reservación</h3>
  <form action="resercion.html">
    <div class="form-row">
       <select name="select" id="" > <option value="1 persona">1 persona</option><option value="2 persona">2 personas</option><option value="3 persona">3 personas</option><option value="4 persona">4 personas</option><option value="5 persona">5 personas</option><option value="6 persona">6 personas</option><option value="7 persona">7 personas</option><option value="8 persona">8 personas</option><option value="9 persona">9 personas</option><option value="10 persona">10 personas</option><option value="11 persona">11 personas</option><option value="12 persona">12 personas</option><option value="13 persona">13 personas</option><option value="14 persona">14 personas</option><option value="15 persona">15 personas</option><option value="16 persona">16 personas</option><option value="17 persona">17 personas</option><option value="18 persona">18 personas</option><option value="19 persona">19 personas</option><option value="20 persona">20 personas</option></select> -->
      <!-- <input type="date" vale="2023-10-05" min="2023-10-01"required>
      <input type="time" id="hora" name="hora"
      min="10:00" max="24:00" required>
    </div>
    <div class="form-row"> 
                            <input type="text" placeholder="Nombre completo" id="nombre" name="nombre"required>
                            <input type="text" placeholder="Telefono" id="telefono" name="telefono"required>

                        </div>
                        <div class="form-row">
                            <input type="number" placeholder="Personas por mesa" id="personas" name="personas" min="1"required>
                            <input type="submit" value="RESERVAR MESA">
  </form>
      </head>
      
  <script src="js/app.js" type="module"></script>
</body>
</html>  -->
    <h1 style="text-align: center;">Reservar</h1>
    <form action="guardar_reserva.php" method="post">
        <label for="restaurante">Restaurante:</label>
        <select name="restaurante" id="restaurante">
            <option value="1">Restaurante 1</option>
            <option value="2">Restaurante 2</option>
            <option value="3">Restaurante 3</option>
        </select> 

        <label for="fecha">Fecha:</label>
        <input type="date" name="fecha" id="fecha" required>

        <label for="hora">Hora:</label>
        <input type="time" name="hora" id="hora" required>

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>

        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido" required>

        <label for="correo">Correo:</label>
        <input type="email" name="correo" id="correo" required>

        <label for="telefono">Teléfono:</label>
        <input type="tel" name="telefono" id="telefono" required>

        <input type="submit" value="Reservar">
    </form>
</body>
</html>