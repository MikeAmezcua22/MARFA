<?php
require_once "conexion.php";
$conexion=Conectarse();

$indice = $_POST['indiceInsert'];
$cliente = $_POST['selectCliente'];

for($i=0; $i <= $indice; $i++){
    $uuid = $_POST['uuid'.$i];
    $impuesto = $_POST['impuesto'.$i];
    $lugarExpedicion = $_POST['lugarExpedicion'.$i];
    $fTimbrado = $_POST['fTimbrado'.$i];
    $metodoPago = $_POST['metodoPago'.$i];
    $moneda = $_POST['moneda'.$i];
    $nombreEmisor = $_POST['nombreEmisor'.$i];
    $nombreReceptor = $_POST['nombreReceptor'.$i];
    $rfcEmisor = $_POST['rfcEmisor'.$i];
    $rfcReceptor = $_POST['rfcReceptor'.$i];
    $subtotal = $_POST['subtotal'.$i];
    $tasaCuota = $_POST['tasaCuota'.$i];
    $tipoFactor = $_POST['tipoFactor'.$i];
    $total = $_POST['total'.$i];
    $totalImpuestosTrasladados = $_POST['totalImpuestosTrasladados'.$i];
    $fhVencimiento = $_POST['fhVencimiento'.$i];
    $receptorRFC = $_POST['rfcReceptor'.$i];

    $query = " INSERT INTO cuentas_por_cobrar ( UUID,
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
            VALUES( '".$uuid."',
                    '".$lugarExpedicion."',
                    '".$metodoPago."',
                    '".$fTimbrado."',
                    '".$total."',
                    '".$moneda."',
                    '".$subtotal."',
                    '".$nombreEmisor."',
                    '".$rfcEmisor."',
                    '".$nombreReceptor."',
                    '".$totalImpuestosTrasladados."',
                    '".$tasaCuota."',
                    '".$tipoFactor."',
                    '".$impuesto."',
                    '".$fhVencimiento."',
                    '".$receptorRFC."'
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