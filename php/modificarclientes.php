<?php
  require_once "conexion.php";
  $conexion=Conectarse();
  $IdCl=$_POST['idpersona'];
  $RfcC= $_POST['RfcClienteU'];
  $RsC= $_POST['RazonSocialU'];
  $EdC= $_POST['EstadoClienteU'];
  $Sc= $_POST['SaldoClienteU'];
  $TcC= $_POST['TelefonoContactoU'];
  $Ccl= $_POST['CalleClienteU'];
  $Nc= $_POST['NoClienteU'];
  $Cc= $_POST['ColoniaClienteU'];
  $CpC= $_POST['CodPostalClienteU'];
  $Cdc= $_POST['CiudadClienteU'];

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


 $query = "UPDATE clientes set RfcCliente = '$RfcC',
                               RazonSocial = '$RsC',
                               EstadoCliente = $EdC,
                               SaldoCliente = $Sc,
                               TelefonoContacto = '$TcC',
                               Calle = '$Ccl',
                               Numero = '$Nc',
                               Colonia = '$Cc',
                               CodPostal = '$CpC',
                               Ciudad = '$Cdc'
                  where IdCliente='$IdCl'";


 $update = mysql_query($query);

 if($update){
    echo json_encode(array('insert'=> 'exito',
                          'query' =>$query,
                           'error'=> false
                      )
                    );
  }

  if(!$update){
    echo json_encode(array('insert' => 'no exito',
                          'query' =>$query,
                           'error' =>true
                           )
                    );
  }
?>
