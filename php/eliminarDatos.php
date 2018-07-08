<?php
  require_once "conexion.php";
  $conexion=Conectarse();
  $IdCl=$_POST['id'];
  $query="DELETE from clientes where IdCliente='$IdCl'";
  echo $delete = mysql_query($query);
 ?>
