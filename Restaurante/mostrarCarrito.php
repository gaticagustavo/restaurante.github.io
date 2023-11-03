<?php 
include 'GLOBAL/config.php';
include 'carrito.php';
include 'barras.php';?>
<!DOCTYPE html>
<html lang="en">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La dame et le roi</title>
    <link href="css/menu.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/menupla.css">
    <link rel="shortcut icon" href="../img/log.jpg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">
</head>
<body>
<div class="col-md-8 container" style="background-color:black; ">
    <div panel panel-default jumbotron>
       <h1 class="nav justify-content-center navbar bg-body-tertiary">CARRITO<h1 >
      </div>
    </div>
  </div>
    <nav class="navbar navbar-expand-lg  navbar bg-dark border-body" >
      <!-- <div class="container-fluid">
        <a class="navbar-brand" href="index.html"><img src="img/log.jpg" width="100px" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="nav nav-underline">
            <a class="nav-link active" aria-current="page" ></a> -->
            <!-- <a class="nav-link bi bi-journal-text" href="./Menu/Menu.php"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16" style="color: wheat;">
                <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
              </svg>Menu</a>
            <a class="nav-link bi bi-journal-plus" href="pedios.html"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-journal-plus" viewBox="0 0 16 16" style="color: wheat;">
                <path fill-rule="evenodd" d="M8 5.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 .5-.5z"/>
                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
              </svg>ORDRES</a>
            <a class="nav-link" href="conocenos.html">connais-nous</p></a>
            <a class="nav-link disabled" aria-disabled="true">Contact</a>
          </div>
        </div>
      </div> -->
    </nav> 

    <br>
    <h3>Lista del carrito</h3>
    <?php 
    if(!empty($_SESSION[' CARRITO'])){?>
    <table class="table table-light table-borderd">
        <tbody>
            <tr>
                <td width="40%">Descripcion</td>
                <td width="15%" class="text-center">Cantidad</td>
                <td width="20%" class="text-center">Precio</td>
                <td width="20%" class="text-center">Total</td>
                <td width="5%" class="text-center">--</td>
            </tr>
            <?php $total=0;?>
            <?php foreach($_SESSION[' CARRITO'] as $indice=>$producto){?>
            <tr>
                <td width="40%" ><?php echo $producto['NOMBRE']?></td>
                <td width="40%" class="text-center"><?php echo $producto['CANTIDAD']?></td>
                <td width="15%" class="text-center"><?php echo $producto['PRECIO']?></td>
                <td width="20%" class="text-center"><?php echo number_format($producto['PRECIO']*$producto['CANTIDAD'],2);?></td>
                <td width="20%" class="text-center"></td>
                <td width="5%" >   

                  <form action="" method="post">
                    
                    <input type="hidden" 
                    name="id" 
                    id="id"
                    value="<?php echo openssl_encrypt($producto['ID'],COD,KEY);?>">
                    <button 
                    class="btn btn-denger" 
                    type="submit"
                    name="btnAccion"
                    value="Eliminar">Eliminar
                    </button>
                  </form>
                </td>
            </tr>

            <?php $total=$total+($producto['PRECIO']*$producto['CANTIDAD']);?>
            <?php }?>
            <tr>
              <td colspan="3" align="right"><h3>Total</h3></td>
              <td  align="right"><h3>$<?php echo number_format($total,2);?></h3></td>
              <td></td>
            </tr>

            <tr>
              <td colspan="5">
                <form action="pagar.php" method="post">
                  <div class="alert alert-succes">
                  <div class="form-group">
                  <label for="my-input">Correo de contrato</label>
                  <input id="numero"  name="numero"
                   class="form-control" type="numero"
                   placeholder="Por favor escribe su numero"
                   required>
                </div>
                <small id="numeroHeld" class="form-text text-muted">
              el producto se  comunicara a ese numero
              </small>
             </div>
              <button class="btn btn-primary btn-lg btn-block" type="submit" value="proceder"
              name="btnAccion">
                Proceder a pagar >>>
              </button>

                </form>             
              </td>
            </tr>
        </tbody>
    </table>
    <?php }else{ ?>
      <div  class="alert alert-success">
        no hay producto en el carrito...
      </div>
     <?php }?>
</body>
</html>