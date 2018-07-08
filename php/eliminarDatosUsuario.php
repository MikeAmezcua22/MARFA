<?php
  require_once "conexion.php";
  $conexion=Conectarse();
  $IdUs=$_POST['id'];
  $query="DELETE from usuarios where IdUsuarios='$IdUs'";
  echo $delete = mysql_query($query);
 ?>
