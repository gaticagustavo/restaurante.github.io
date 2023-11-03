<?php 
include '../GLOBAL/config.php';
include '../GLOBAL/conexion.php';
include '../Carrito.php';
include './barra.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La dame et le roi</title>
    <link href="../css/menu.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/menupla.css">
    <script src="./script.js"defer></script>
    <link rel="shortcut icon" href="../img/log.jpg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">
</head>
<body >

    <div class="menu">
      <button data-target="#Desayuno" name="slider">Desayuno</button>
      <button data-target="#Comida" name="slider">Comida</button>
      <button data-target="#Cena" name="slider">Cena</button>
      <button data-target="#Bebidas" name="slider">Bebidas</button>
      <button data-target="#Postre" name="slider">Postre</button>
      <button data-target="#Tradicional" name="slider">Tradicional</button>
    </div> 

    <!-- <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-content>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../img/Tartines.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1>BIENVENIDOS </h1>
          <h2>LA DAME ET LE ROI</h2>
        </div>
      </div> -->

    <div class="content">

      <div data-content id="Desayuno">
      <div class="row ">
        <h1>Desayuno</h1>
      <?php 
      $sentencia=$pdo->prepare("SELECT * FROM `desayuno` WHERE tipoComida LIKE 'Desayuno'");
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
      </div>   

      <div data-content id="Comida">
        <h1>Comida</h1>
        <div class="row ">
      <?php 
      $sentencia=$pdo->prepare("SELECT * FROM `desayuno`WHERE tipoComida LIKE 'Comida'");
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

      </div>
      <div data-content id="Cena">
        <h1>Cena</h1>
        <?php 
      $sentencia=$pdo->prepare("SELECT * FROM `desayuno` WHERE tipoComida LIKE 'Cena'");
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
    </div>

      <div data-content id="Bebidas">
        <h1>Bebidas</h1>
        <?php 
      $sentencia=$pdo->prepare("SELECT * FROM `desayuno` WHERE tipoComida LIKE 'Bebidas'");
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
    </div>     
    <div data-content id="Postre">
        <h1>Postre</h1>
        <?php 
      $sentencia=$pdo->prepare("SELECT * FROM `desayuno`WHERE tipoComida LIKE 'Postre'");
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
    </div>  
    
    <div data-content id="Tradicional">
        <h1>Tradicional</h1>
        <?php 
      $sentencia=$pdo->prepare("SELECT * FROM `desayuno` WHERE tipoComida LIKE 'Tradicional'");
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
    
    </div>  
    </div>
</body>
<!-- data-toogle="hover" = trascribir la informacio  que tengo en el img aun elemento popover -->
<!-- data-trigger="hover"=para que al ahora de pasar el maus muetre la descripcion-->
</html>