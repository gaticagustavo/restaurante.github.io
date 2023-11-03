<?php 
include 'GLOBAL/config.php';
include 'GLOBAL/conexion.php';
include 'carrito.php';
include './barras.php';
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La dame et le roi</title>
    <link href="index.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/log.jpg">
    <link href="css/menupla.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">
</head>
<body>

<?php 
if($_POST){

    $total=0;
    // inicia en 0
    $SID=session_id();
    // devolver una clave de la  seccion, es decir la cession carrito genera una clave y esa clave se va a guardar en session id
    // para evitar confucion con otro pedido
    $Numero=$_POST['numero'];
    
    foreach($_SESSION[' CARRITO'] as $indice=> $producto){
      // sirve para leer toda la informacion que existe en el carrito
        $total=$total+($producto['PRECIO']*$producto['CANTIDAD']);
        //recolectar la informacion y la va a almacenar en total 
    }
    // insertas datos de compra la base de datos de tblventas
    // inserta la informacion que el cliente esta seleccionando
    $sentencia=$pdo->prepare("INSERT INTO `tblventas`
           (`ID_V`, `ClaveTransaccion`, `paypalDatos`, `Fecha`, `Numero`, `Total`, `status`) 
    VALUES (NULL, :ClaveTransaccion,'', NOW(),:Numero, :Total, 'pendiente');");
    // el now es para devolver la fecha y tiempo actual utilizando funcion propia de mysql
    // extrae los datos del formulario
    $sentencia->bindParam(":ClaveTransaccion",$SID);
    $sentencia->bindParam(":Numero",$Numero);
    $sentencia->bindParam(":Total",$total);
    $sentencia->execute();
    // devuelve el ultimo id insertado en la base
    $idVenta=$pdo->lastInsertId();

    foreach($_SESSION[' CARRITO'] as $indice=> $producto){

    $sentencia=$pdo->prepare("INSERT INTO `tbldetalleventa` 
    (`ID`, `IDVENTA`, `IDPRODUCTO`, `PRECIOUNITARIO`, `CANTIDAD`, `DESCARGADO`) 
    VALUES (NULL,:IDVENTA,:IDPRODUCTO,:PRECIOUNITARIO, :CANTIDAD, '0');");

$sentencia->bindParam(":IDVENTA",$idVenta);
$sentencia->bindParam(":IDPRODUCTO",$producto['ID']);
$sentencia->bindParam(":PRECIOUNITARIO",$producto['PRECIO']);
$sentencia->bindParam(":CANTIDAD",$producto['CANTIDAD']);
$sentencia->execute();
// devuelve el ultimo id insertado en la base
$idVenta=$pdo->lastInsertId();
    }
    // echo "<h3>".$total."</h3";
}
?>
<!-- Include the PayPal JavaScript SDK -->
<!-- <script src="https://www.paypalobjects.com/api/checkout.js"></script> -->
<script src="https://www.paypal.com/sdk/js?client-id=AbOGjNXVyFMzVF4vVoDcG9qT0zjp97Tplvm5CFiQWmQim5DDYdvub_QdUHWzVkHd3cRk1iBFrRxzPMOb&currency=USD"></script>

<div class="jumbotron text-center">
  <h1 class="display-4">¡Paso Final!</h1>
  <hr class="my-4">
  <p class="lead">Estas a punto de pagar con paypal la cantidad de:
    <h4>$<?php echo number_format($total,2); ?></h4>
    <!-- Set up a container element for the button -->
    <div id="paypal-button-container"></div>
  </p>
  <p>Los producto podran ser descargador  una vez que se procese el pago</p>
</div> 


<body>
    <!-- contraseña pruebastienda28oct -->
    <script>
        // Render the PayPal button into #paypal-button-container
        paypal.Buttons({
           

            style: {
                size: 'responsive',
                shape: 'pill',
                label: 'pay'

            },
            // Set up the transaction
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            
                            value: '<?php echo $total;?>', currency:'MXN'},
                        description: "Compra de productos a la tienda por un valor de $ <?php echo number_format($total,2); ?> COP ",
                        reference_id: "<?php echo $SID; ?>#<?php echo openssl_encrypt($idVenta,COD,KEY);?>"
  //paypal en su documentacion nueva no utiliza custom pot que ahora utiliza reference_id, por eso se debe utilizar este capo
                    }]
                });
            },

            // Finalize the transaction
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(details) {
                    // Show a success message to the buyer
                    alert('Transaction completed by ' + details.payer.name.given_name + '!');
 // yo deje esta alerta para una mejor verificacion del codigo
                    console.log(data);
 //con este codigo se muestran las variables de data depaypal  en el consola del explorador
                    window.location="verificador.php?paymentID="+data.paymentID ;
                    // "&orderID="+data.payerID+"&payerID="+data.payerID;

                });
            }


        }).render('#paypal-button-container');
    </script>

<!-- <script>
    paypal.Button.render({
        env: 'sandbox', // sandbox | production
        style: {
            label: 'checkout',  // checkout | credit | pay | buynow | generic
            size:  'responsive', // small | medium | large | responsive
            shape: 'pill',   // pill | rect
            color: 'gold'   // gold | blue | silver | black
        },
 
        // PayPal Client IDs - replace with your own
        // Create a PayPal app: https://developer.paypal.com/developer/applications/create
 
        client: {
            sandbox:   'AZDQdnOHeoBeJbBawO0uXyQLTIrDOAqjsuMi-qpuiMKRh68lrpe5vYZZ_O8vF_RBYFph595DFExuFFzu',
            production: 'ATx7XQpkxIzvK5Xut0f5iykjhnzLOoEpa2e33vVOsg_ejaDazQxZNhtx8GA8h_DeKxjmT3nr5BcVLnf1'
        },
 
        // Wait for the PayPal button to be clicked
 
        payment: function(data, actions) {
            return actions.payment.create({
                payment: {
                    transactions: [
                        {
                            amount: { total: '0.01', currency: 'MXN' }, 
                            description:"Compra de productos a Develoteca:$<php echo number_format($total,2);?> ",
                            custom:"#<php echo openssl_encrypt($idVenta,COD,KEY);?"
                        }
                    ]
                }
            });
        },
 
        // Wait for the payment to be authorized by the customer
 
        onAuthorize: function(data, actions) {
            return actions.payment.execute().then(function() {
                console.log(data);
                window.location="verificador.php?facilitatorAccessToken="+data.facilitatorAccessToken+"&orderID="+data.orderID+"&payerID="+data.payerID

            });
        }
    
    }, '#paypal-button-container');
 
</script>     -->
</body>
</html>