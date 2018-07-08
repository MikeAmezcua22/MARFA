<?php
  require_once "conexion.php";
  $conexion=Conectarse();

  $RfcP= $_POST['RfcProveedor'];
  $RsP= $_POST['RazonSocialProveedor'];
  $EdP= $_POST['EstadoProveedor'];
  $DsP= $_POST['DiasCreditoProveedor'];
  $SP= $_POST['SaldoProveedor'];
  $TcP= $_POST['TelefonoContactoProveedor'];
  $CcP= $_POST['CalleProveedor'];
  $NP= $_POST['NoProveedor'];
  $CP= $_POST['ColoniaProveedor'];
  $CpP= $_POST['CodPostalProveedor'];
  $CdP= $_POST['CiudadProveedor'];

  //print "RFC" + $RfcC;
  //print "RsC" + $RsC;
  //print "EdC" + $EdC;
  //print "DsC" + $DsC;
  //print "Sc" + $Sc;
  //print "TcC" + $TcC;
  //print "Ccl" + $Ccl;
  //print "Cc" + $Cc;
  //print "Nc" + $Nc;
  //print "CpC" + $CpC;
  //print "Cdc" + $Cdc;


 $query = "INSERT into proveedores (RfcProveedor,
                               RazonSocial,
                               EstadoProveedor,
                               DiasCredito,
                               SaldoProveedor,
                               TelefonoContacto,
                               Calle,
                               Numero,
                               Colonia,
                               CodPostal,
                               Ciudad)
          VALUES('".$RfcP."','".$RsP."',$EdP,$DsP,$SP,'".$TcP."','".$CcP."','".$NP."','".$CP."','".$CpP."','".$CdP."')";

 $insert = mysql_query($query);

 if($insert){
    echo json_encode(array('insert'=> 'exito',
                           'error'=> false
                      )
                    );
  }

  if(!$insert){
    echo json_encode(array('insert' => 'no exito',
                           'error' =>true
                           )
                    );
  }
?>
