<?php
  require_once "conexion.php";
  $conexion=Conectarse();

  $NombreUsuario= $_POST['NombreUsuario'];
  $Nombre= $_POST['Nombre'];
  $ApellidoPaterno= $_POST['ApellidoPaterno'];
  $ApellidoMaterno= $_POST['ApellidoMaterno'];
  $Password= $_POST['Password'];
  $CorreoElectronico= $_POST['CorreoElectronico'];
  $TelContactoUsuario= $_POST['TelContactoUsuario'];
  $FechaDeNacimiento= $_POST['FechaDeNacimiento'];
  $TipodeUsuario= $_POST['TipodeUsuario'];



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


 $query = "INSERT INTO usuarios (NombreUsuario,
                               Nombre,
                               ApellidoPaterno,
                               ApellidoMaterno,
                               Password,
                               Email,
                               TelContactoUsuario,
                               FechaNacimiento,
                               IdTipoUsuario)
          VALUES('$NombreUsuario','$Nombre','$ApellidoPaterno','$ApellidoMaterno','$Password','$CorreoElectronico','$TelContactoUsuario','$FechaDeNacimiento',$TipodeUsuario)";
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
