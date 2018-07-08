<?php
  require_once "conexion.php";
  $conexion=Conectarse();

  $RfcC= $_POST['RfcCliente'];
  $RsC= $_POST['RazonSocial'];
  $EdC= $_POST['EstadoCliente'];
  $DsC= $_POST['DiasCredito'];
  $Sc= $_POST['SaldoCliente'];
  $TcC= $_POST['TelefonoContacto'];
  $Ccl= $_POST['CalleCliente'];
  $Nc= $_POST['NoCliente'];
  $Cc= $_POST['ColoniaCliente'];
  $CpC= $_POST['CodPostalCliente'];
  $Cdc= $_POST['CiudadCliente'];

 $query = "INSERT into clientes (RfcCliente,
                               RazonSocial,
                               EstadoCliente,
                               DiasCredito,
                               SaldoCliente,
                               TelefonoContacto,
                               Calle,
                               Numero,
                               Colonia,
                               CodPostal,
                               Ciudad)
          VALUES('".$RfcC."','".$RsC."',$EdC,$DsC,$Sc,'".$TcC."','".$Ccl."','".$Nc."','".$Cc."','".$CpC."','".$Cdc."')";

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
