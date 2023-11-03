<?php 
// cadena de conexion obtenemos la informacion de DB y de servidor del archivo config 
$servidor = "mysql:dbname=".BD.";host=".SERVIDOR;

try{
    // creamos variable pdo e creamos istancia pdo y ese recibe parametros para la conexion
    $pdo= new PDO($servidor,USUARIO,PASSWORD,
    array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    // array es para cambiar los valores  de codificacion por default ese va a elimiar caracteres extraños
    // echo"<script>alert('conectado...')</script>";
}catch(PDOException $e){
    // echo"<script>alert('Error...')</script>";
}


// $username = "root";
// $password = "";
// $dbname = "restaurante";

?>