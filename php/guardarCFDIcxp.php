<?php
require_once "conexion.php";
$conexion=Conectarse();

$indicecxp = $_POST['indiceInsertcxp'];
$cliente = $_POST['selectCliente'];

for($i=0; $i <= $indicecxp; $i++){
    $uuidcxp = $_POST['uuidcxp'.$i];
    $impuestocxp = $_POST['impuestocxp'.$i];
    $lugarExpedicioncxp = $_POST['lugarExpedicioncxp'.$i];
    $fTimbradocxp = $_POST['fTimbradocxp'.$i];
    $metodoPagocxp = $_POST['metodoPagocxp'.$i];
    $monedacxp = $_POST['monedacxp'.$i];
    $nombreEmisorcxp = $_POST['nombreEmisorcxp'.$i];
    $nombreReceptorcxp = $_POST['nombreReceptorcxp'.$i];
    $rfcEmisorcxp = $_POST['rfcEmisorcxp'.$i];
    $rfcReceptorcxp = $_POST['rfcReceptorcxp'.$i];
    $subtotalcxp = $_POST['subtotalcxp'.$i];
    $tasaCuotacxp = $_POST['tasaCuotacxp'.$i];
    $tipoFactorcxp = $_POST['tipoFactorcxp'.$i];
    $totalcxp = $_POST['totalcxp'.$i];
    $totalImpuestosTrasladadoscxp = $_POST['totalImpuestosTrasladadoscxp'.$i];
    $fhVencimientocxp = $_POST['fhVencimientocxp'.$i];
    $receptorRFCcxp = $_POST['rfcReceptorcxp'.$i];

    $query = " INSERT INTO cuentas_por_pagar ( UUID,
                                                LugarExpedicion,
                                                MetodoPago,
                                                FechaEmision,
                                                Total,
                                                Moneda,
                                                Subtotal,
                                                EmisorNombre,
                                                EmisorRfc,
                                                ReceptorNombre,
                                                Total_ImpuestosTrasladados,
                                                TasaCuota,
                                                TipoFactor,
                                                Impuestos,
                                                FechaVencimiento,
                                                ReceptorRFC)
            VALUES( '".$uuidcxp."',
                    '".$lugarExpedicioncxp."',
                    '".$metodoPagocxp."',
                    '".$fTimbradocxp."',
                    '".$totalcxp."',
                    '".$monedacxp."',
                    '".$subtotalcxp."',
                    '".$nombreEmisorcxp."',
                    '".$rfcEmisorcxp."',
                    '".$nombreReceptorcxp."',
                    '".$totalImpuestosTrasladadoscxp."',
                    '".$tasaCuotacxp."',
                    '".$tipoFactorcxp."',
                    '".$impuestocxp."',
                    '".$fhVencimientocxp."',
                    '".$receptorRFCcxp."'
                    );";

    echo $query;
    $insert = mysql_query($query);    
    
}

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