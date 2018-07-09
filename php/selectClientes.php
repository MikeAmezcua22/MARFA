<?php 
    require_once "conexion.php";
    $conexion=Conectarse();

    $query = "SELECT IdCliente, RazonSocial FROM  clientes";

    $result=mysql_query($query);

    echo "<select name='selectCliente' class='form-control'>";
        while($valor=mysql_fetch_array($result)){  
            echo '<option value="'. $valor['IdCliente'].'" > '.$valor['RazonSocial'].''."</option>";                     
        } 
    
    echo "</select>";
?>
