<?php
  require_once "conexion.php";
  $conexion=Conectarse();
  $IdFc=$_POST['id'];

  $query = "SELECT idFactura FROM relabonofactura WHERE idFactura = $IdFc";
  $rs = mysql_query($query);
  $nr = mysql_num_rows($rs);
  
  if ($rs > 0){ 
    $queryRel = "DELETE from relabonofactura WHERE idFactura = $IdFc";
    mysql_query($queryRel);
    
    $querycpc = "DELETE from cuentas_por_cobrar where IdFactura = $IdFc";
    
    $ejecutar = mysql_query($querycpc);
  }else{
    $querycpc = "DELETE from cuentas_por_cobrar where IdFactura = $IdFc";
    $ejecutar = mysql_query($querycpc);
  }  

  if($ejecutar){
      echo 1;
  }
 
  if(!$ejecutar){
      echo 0;
  }
  
 ?>
