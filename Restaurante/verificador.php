<?php 
  print_r($_GET);

   $CLIENTID="AZDQdnOHeoBeJbBawO0uXyQLTIrDOAqjsuMi-qpu
   iMKRh68lrpe5vYZZ_O8vF_RBYFph595DFExuFFzu";
   $SECRET="EB6TuFlxqGSjySYD7HUSUfUWpkSyT1onCJxZnL43KEl6GnvFdH_YYNXH9cRQTax_WmXjpaFiMiurw6m7";

   $Login= curl_init("https://api.sandbox.paypal.com/v1/oauth2/token");

   curl_setopt($Login,CURLOPT_RETURNTRANSFER,TRUE);
  
   // curl-setopt va a hacer relacion con variable login e inicialice el valor CURLOPT_RETURNTRANSFER que nos devuelva la informacion que estos solicitando

   curl_setopt($Login,CURLOPT_USERPWD,$CLIENTID.":".$SECRET);

  curl_setopt($Login,CURLOPT_POSTFIELDS,"grant_type=client_credentials");

  $Respuesta=curl_exec($Login);

  //  print_r($Respuesta);
  
    $objRespuesta=json_decode($Respuesta);
    
    $AccessToken=$objRespuesta->access_token;

  //  print_r($accessToken);

  // $payerID=$objRespueta->payerID;

  // print_r($AccessToken);

  $venta= curl_init("https://api-m.sandbox.paypal.com/v1/payments/payment".$_GET['paymentID']);
  curl_setopt($venta,CURLOPT_HTTPHEADER,array("Content-Type: application/json","Authorization: Bearer".$AccessToken));
  //$RespuestaVenta=curl_exec($venta);
    //print_r($RespuestaVenta);

 curl_setopt($venta, CURLOPT_RETURNTRANSFER, TRUE);

  $RespuestaVenta=curl_exec($venta);

  //print_r($RespuestaVenta);

  $objDatosTransaccion=json_decode($RespuestaVenta);
 
  print_r($objDatosTransaccion->payer->payer_info->numero);

  $state=$objDatosTransaccion->state;
  $numero=$objDatosTransaccion->payer->payer_info->numero;

  $total=$objDatosTransaccion->Transaccion[0]->amount->total;
  $currency= $objDatosTransaccion->Transaccions[0]->amount->currency;
  $custom= $objDatosTransaccion->Transaccions[0]->custom;


?>