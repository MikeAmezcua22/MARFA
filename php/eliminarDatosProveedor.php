<?php
  require_once "conexion.php";
  $conexion=Conectarse();
  $IdPr=$_POST['id'];
  $query="DELETE from proveedores where IdProveedor='$IdPr'";
  echo $delete = mysql_query($query);
 ?>
