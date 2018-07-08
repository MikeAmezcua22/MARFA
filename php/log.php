<?php
include '/conexion.php';
//Se declaran las variables para usuario y password
  $usuario  = $_POST['username'];
  $password = $_POST['password'];
//Se crea la consulta para hacer que coincidan los POST con los valores de la tabla usuario
  $select = " SELECT NombreUsuario,
                     IdTipoUsuario
              FROM usuarios
              WHERE NombreUsuario = '".$usuario."'
              AND Password = '".$password."'";

  $usuario = mysql_query($select);
  $numero_filas = mysql_num_rows($usuario);
//Si el valor de la consulta fue 1 entonces se ejecuta el siguiente codigo
  if($numero_filas === 1){
    $datos = mysql_fetch_array(mysql_query($select));

    echo json_encode(array('nombreUsuario'=> $datos{'NombreUsuario'},
                           'tipoUsuario' => $datos{'IdTipoUsuario'},
                           'error' => false
                          )
                    );
  }
//Si el valor de la consulta fue 0 entonces se ejecuta el siguiente codigo
  if($numero_filas === 0){
    echo json_encode(array('error' =>true,
                           'tipoUsuario' => 0));
  }

?>
