<?php
  require_once "conexion.php";
  $conexion=Conectarse();
  $IdCl=$_POST['idpersonaProveedor'];
  $RfcC= $_POST['RfcProveedorUProveedor'];
  $RsC= $_POST['RazonSocialUProveedor'];
  $EdC= $_POST['EstadoProveedorUProveedor'];
  $DsC= $_POST['DiasCreditoUProveedor'];
  $Sc= $_POST['SaldoProveedorUProveedor'];
  $TcC= $_POST['TelefonoContactoUProveedor'];
  $Ccl= $_POST['CalleProveedorUProveedor'];
  $Nc= $_POST['NoProveedorUProveedor'];
  $Cc= $_POST['ColoniaProveedorUProveedor'];
  $CpC= $_POST['CodPostalProveedorUProveedor'];
  $Cdc= $_POST['CiudadProveedorUProveedor'];

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


 $query = "UPDATE proveedores set RfcProveedor = '$RfcC',
                               RazonSocial = '$RsC',
                               EstadoProveedor = $EdC,
                               DiasCredito = $DsC,
                               SaldoProveedor = $Sc,
                               TelefonoContacto = '$TcC',
                               Calle = '$Ccl',
                               Numero = '$Nc',
                               Colonia = '$Cc',
                               CodPostal = '$CpC',
                               Ciudad = '$Cdc'
                  where IdProveedor=$IdCl";


 $update = mysql_query($query);

 if($update){
    echo json_encode(array('insert'=> 'exito',
                           'error'=> false
                      )
                    );
  }

  if(!$update){
    echo json_encode(array('insert' => 'no exito',
                           'error' =>true
                           )
                    );
  }
?>
