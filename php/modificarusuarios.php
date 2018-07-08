<?php
  require_once "conexion.php";
  $conexion=Conectarse();
  $IdUs=$_POST['IdUsuarios'];
  $NombreUs= $_POST['NombreUsuarioMod'];
  $Nombre= $_POST['Nombre'];
  $ApePaUs= $_POST['ApellidoPaternoMod'];
  $ApeMaUs= $_POST['ApellidoMaternoMod'];
  $PassUs= $_POST['PasswordMod'];
  $CoEleUS= $_POST['CorreoElectronicoMod'];
  $TelConUs= $_POST['TelContactoUsuarioMod'];
  $FechaNacUs= $_POST['FechaDeNacimientoMod'];
  $TipoUs= $_POST['TipodeUsuarioMod'];

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


 $query = "UPDATE usuarios set NombreUsuario = '$NombreUs',
                               Nombre = '$Nombre',
                               ApellidoPaterno = '$ApePaUs',
                               ApellidoMaterno = '$ApeMaUs',
                               Password = '$PassUs',
                               Email = '$CoEleUS',
                               TelContactoUsuario = '$TelConUs',
                               FechaNacimiento = '$FechaNacUs',
                               IdTipoUsuario = $TipoUs
                  where IdUsuarios =$IdUs";


 $update = mysql_query($query);

 if($update){
    echo json_encode(array('insert'=> 'exito',
                            'query'=>$query,
                           'error'=> false
                      )
                    );
  }

  if(!$update){
    echo json_encode(array('insert' => 'no exito',
                          'query'=>$query,
                           'error' =>true
                           )
                    );
  }
?>
