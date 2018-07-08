<?php

require './leerCFDI.php';
$cfdi = new LeerCFDI();
$uploads_dir = './upload/';
$data = array();

for($i=0;$i < count($_FILES['fileXML']['name']); $i++ ) {
  $tmpFilePath = $_FILES['fileXML']['tmp_name'][$i];

  if ($tmpFilePath != ""){
    $newFilePath = $uploads_dir.$_FILES['fileXML']['name'][$i];

    //Upload the file into the temp dir
    if(move_uploaded_file($tmpFilePath, $newFilePath)) {

        $cfdi -> cargaXml($newFilePath);
        
        $uuid                      = $cfdi -> uuid();
        $lugarExpedicion           = $cfdi -> lugarExpedicion();
        $metodoPago                = $cfdi -> metodoPago();
        $fechaTimbrado             = $cfdi -> fechaTimbrado();
        $DiasCredito               = '';
        $total                     = $cfdi -> total();
        $moneda                    = $cfdi -> moneda();
        $subtotal                  = $cfdi -> subtotal();
        $nombreEmisor              = $cfdi -> nombreEmisor();
        $rfcEmisor                 = $cfdi -> rfcEmisor();
        $nombreReceptor            = $cfdi -> nombreReceptor();
        $rfcReceptor               = $cfdi -> rfcReceptor();
        $totalImpuestosTrasladados = $cfdi -> totalImpuestosTrasladados();
        $tasaCuota                 = $cfdi -> tasaCuota();
        $tipoFactor                = $cfdi -> tipoFactor();
        $impuesto                  = $cfdi -> impuesto();
    
        $data[] = array(
                        'uuid'                      => $uuid,
                        'lugarExpedicion'           => $lugarExpedicion,
                        'metodoPago'                => $metodoPago,
                        'fechaTimbrado'             => $fechaTimbrado,
                        'DiasCredito'               => '',
                        'total'                     => $total,
                        'moneda'                    => $moneda,
                        'subtotal'                  => $subtotal,
                        'nombreEmisor'              => $nombreEmisor,
                        'rfcEmisor'                 => $rfcEmisor,
                        'nombreReceptor'            => $nombreReceptor,
                        'rfcReceptor'               => $rfcReceptor,
                        'totalImpuestosTrasladados' => $totalImpuestosTrasladados,
                        'tasaCuota'                 => $tasaCuota,
                        'tipoFactor'                => $tipoFactor,
                        'impuesto'                  => $impuesto
                    );
                
    }
  }
}

    $json = json_encode($data);
    echo $json;

?>
