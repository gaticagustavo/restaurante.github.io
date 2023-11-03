<?php 
include '../GLOBAL/config.php';
include '../GLOBAL/conexion.php';
include '../Carrito.php';
include 'barra.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La dame et le roi</title>
    <link href="index.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">
</head>
<body>
<div class="col-md-8 container" style="background-color:black; ">
    <div panel panel-default jumbotron>
        <h1 class="nav justify-content-center navbar bg-body-tertiary">MENU</h1>
      </div>
    </div>
  </div>
    <!-- <nav class="navbar navbar-expand-lg  navbar bg-dark border-body" >
      <div class="container-fluid">
        <a class="navbar-brand" href="../index.html"><img src="../img/log.jpg" width="100px" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="nav nav-underline">
            <!-- <a class="nav-link active" aria-current="page" ></a> -->
            <a class="nav-link bi bi-journal-text" href="../index.html"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16" style="color: wheat;">
  <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z"/>
  <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z"/>
</svg>Home</a>
            <a class="nav-link bi bi-journal-plus" href="../pedios.html"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-journal-plus" viewBox="0 0 16 16" style="color: wheat;">
  <path fill-rule="evenodd" d="M8 5.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 .5-.5z"/>
  <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
  <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
</svg>ORDRES</a>

            <a class="nav-link  bi bi-cart-fill" href="../mostrarCarrito.php"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16" style="color: wheat;">
                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
    </svg>
        <?php echo $mensaje;?>chariot(<?php 
             echo (empty($_SESSION[' CARRITO']))?0:count($_SESSION[' CARRITO']);
             ?>)</a>
             </a>

            <a class="nav-link" href="conocenos.html">connais-nous</p></a>
            <a class="nav-link disabled" aria-disabled="true">Contact</a>
          </div>
        </div>
      </div>
    </nav> -->
    <br>
    <button  class="btn btn-primary"
     name="btnAccion" 
     value="Agregar" 
     type="submit">
     Desayuno</button>

     <button  onclick="location.href='comida.php'" class="btn btn-primary"
     name="btnAccion" 
     value="Comida" 
     type="submit">
     Comida</button>
     
     <button onclick="" class="btn btn-primary"
     name="btnAccion" 
     value="Agregar" 
     type="submit">
     Cena</button>

     <button class="btn btn-primary"
     name="btnAccion" 
     value="Agregar" 
     type="submit">
     Bebida</button> 

     <button class="btn btn-primary"
     name="btnAccion" 
     value="Agregar" 
     type="submit">
     Tradicional</button>
     <button class="btn btn-primary"
     name="btnAccion" 
     value="Agregar" 
     type="submit">
     Postre</button>
    <br>
    <br>

    <div class="row ">
      <?php 
      $sentencia=$pdo->prepare("SELECT * FROM `desayuno`");
      $sentencia->execute();
      $listaProducto=$sentencia->fetchAll(PDO::FETCH_ASSOC);
      // print_r($listaProducto);
      ?>
      <?php  foreach($listaProducto as $producto){?>
      <div class="col-3">
        <div class="card">
        <img
        
        title="<?php echo $producto['NOMBRE'];?>"
        alt="<?php echo $producto['NOMBRE'];?>"
        class="card-img-top"
       src="<?php echo $producto['IMAGEN'];?>"
        data-bs-toggle="popover" 
        data-bs-content="<?php echo $producto['DESCRIPCION'];?> "
       data-trigger="hover";
         height="220px"
         >
   <div class="card-body">
    <span><?php echo $producto['NOMBRE'];?></span>
    <h5 class="card-title"><?php echo $producto['PRECIO'];?></h5>
    <p class="card-text"> <?php echo $producto['DESCRIPCION'];?></p>
    <form action="" method="post">
      <input type="hidden" name="id"  id="id" value="<?php echo openssl_encrypt($producto['Clave_R'],COD,KEY); ?>">
      <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt( $producto['NOMBRE'],COD,KEY); ;?>">
      <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt( $producto['PRECIO'],COD,KEY); ;?>">
      <input type="hidden" name="Descripcion" id="Descripcion" value="<?php echo openssl_encrypt( $producto['DESCRIPCION'],COD,KEY); ;?>">

      <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1,COD,KEY);?>">


      <button class="btn btn-primary"
     name="btnAccion" 
     value="Agregar" 
     type="submit">
     Agregar al carrito</button>
    </form>
    
   </div>
  </div>
 </div> 
      <?php }
      ?>
    </div>
    <script>
      $(function () {
        $('[data-toggle="popover"]').popover()
      });



// para mostrar titulo y descripcion el cual de forma busca un poer para que lo convierta  a pover 
    </script>
</body>
<!-- data-toogle="hover" = trascribir la informacio  que tengo en el img aun elemento popover -->
<!-- data-trigger="hover"=para que al ahora de pasar el maus muetre la descripcion-->
</html>