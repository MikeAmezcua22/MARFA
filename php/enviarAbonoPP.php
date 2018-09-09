<?php 
    require_once "conexion.php";
    $conexion=Conectarse();

    $idFactura = $_POST['idFacturaPP'];
    $abonoCantidad = $_POST['abonoEnviarPP'];

    $query = "  INSERT INTO relabonofacturacxp(idFactura,abono) 
                VALUES (".$idFactura.",".$abonoCantidad.")";
                
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