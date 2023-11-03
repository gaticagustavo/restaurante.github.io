<?php 
session_start();

$mensaje="";

if(isset($_POST['btnAccion'])){

  switch ($_POST['btnAccion']){
  
 case 'Agregar':

    if(is_numeric(openssl_decrypt( $_POST['id'],COD,KEY))){
      $ID = openssl_decrypt( $_POST['id'],COD,KEY);
      $mensaje.="OK ID correcto".$ID."<br/>";

    }else{
      $mensaje.="Ups...ID incorrecto".$ID."<br/>";
    }
    if(is_string(openssl_decrypt($_POST['nombre'],COD,KEY))){
      $NOMBRE=openssl_decrypt($_POST['nombre'],COD,KEY);
      $mensaje.="OK NOMBRE".$NOMBRE."<br/>";
    }else{ $mensaje.="Uppss..algo pasa con el nombre"."<br/>"; break;}

      if(is_numeric(openssl_decrypt($_POST['cantidad'],COD,KEY))){
        $CANTIDAD=openssl_decrypt($_POST['cantidad'],COD,KEY);
        $mensaje.="OK CANTIDAD".$CANTIDAD."<br/>";
      }else{ $mensaje.="Uppss..algo pasa con la cantidad"."<br/>"; break;}
      
      if(is_numeric(openssl_decrypt($_POST['precio'],COD,KEY))){
        $PRECIO=openssl_decrypt($_POST['precio'],COD,KEY);
        $mensaje.="OK PRECIO".$PRECIO."<br/>";
      }else{ $mensaje.="Uppss..algo pasacon el precio"."<br/>"; break;}
  
      if(!isset($_SESSION[' CARRITO'])){
        $producto=array(
          'ID'=>$ID,
          'NOMBRE'=>$NOMBRE,
          'CANTIDAD'=>$CANTIDAD,
          'PRECIO'=>$PRECIO
        );
        $_SESSION[' CARRITO'][0]=$producto;
      }else{
        
        $NumeroProductos=count($_SESSION[' CARRITO']);
        $producto=array(
          'ID'=>$ID,
          'NOMBRE'=>$NOMBRE,
          'CANTIDAD'=>$CANTIDAD,
          'PRECIO'=>$PRECIO
        );
        $_SESSION[' CARRITO'][$NumeroProductos]=$producto;
        // echo "<script>alert('Producto agregado al carrito');</script>";
       $mensaje= "";
      }
      //$mensaje= print_r($_SESSION,true);
      
      break;

      case "Eliminar":
        if(is_numeric(openssl_decrypt($_POST['id'],COD,KEY))){
          $ID=openssl_decrypt($_POST['id'],COD,KEY);
         
          foreach($_SESSION[' CARRITO'] as $indice=>$producto){
            // leer todos loa productos que estan en dicho carrito
            if($producto['ID']==$ID){             
               unset($_SESSION[' CARRITO'][$indice]);
               ($_SESSION[' CARRITO']=array_values($_SESSION[" CARRITO"]));
              echo "<script>alert('eliminado');</script>";

            }
          }
    
        }else{
          $mensaje.="Ups...ID incorrecto".$id."<br/>";
        }
        break;
  }

}
?>