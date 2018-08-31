<?php

require './leerCFDIcxp.php';
$cfdicxp = new LeerCFDIcxp();
$uploads_dir = './uploadcxp/';
$datacxp = array();

for($i=0;$i < count($_FILES['fileXMLcxp']['name']); $i++ ) {
  $tmpFilePath = $_FILES['fileXMLcxp']['tmp_name'][$i];

  if ($tmpFilePath != ""){
    $newFilePath = $uploads_dir.$_FILES['fileXMLcxp']['name'][$i];

    //Upload the file into the temp dir
    if(move_uploaded_file($tmpFilePath, $newFilePath)) {

        $cfdicxp -> cargaXmlcxp($newFilePath);
        
        $uuid                      = $cfdicxp -> uuid();
        $lugarExpedicion           = $cfdicxp -> lugarExpedicion();
        $metodoPago                = $cfdicxp -> metodoPago();
        $fechaTimbrado             = $cfdicxp -> fechaTimbrado();
        $DiasCredito               = '';
        $total                     = $cfdicxp -> total();
        $moneda                    = $cfdicxp -> moneda();
        $subtotal                  = $cfdicxp -> subtotal();
        $nombreEmisor              = $cfdicxp -> nombreEmisor();
        $rfcEmisor                 = $cfdicxp -> rfcEmisor();
        $nombreReceptor            = $cfdicxp -> nombreReceptor();
        $rfcReceptor               = $cfdicxp -> rfcReceptor();
        $totalImpuestosTrasladados = $cfdicxp -> totalImpuestosTrasladados();
        $tasaCuota                 = $cfdicxp -> tasaCuota();
        $tipoFactor                = $cfdicxp -> tipoFactor();
        $impuesto                  = $cfdicxp -> impuesto();
    
        $datacxp[] = array(
                        'uuidcxp'                      => $uuid,
                        'lugarExpedicioncxp'           => $lugarExpedicion,
                        'metodoPagocxp'                => $metodoPago,
                        'fechaTimbradocxp'             => $fechaTimbrado,
                        'DiasCreditocxp'               => '',
                        'totalcxp'                     => $total,
                        'monedacxp'                    => $moneda,
                        'subtotalcxp'                  => $subtotal,
                        'nombreEmisorcxp'              => $nombreEmisor,
                        'rfcEmisorcxp'                 => $rfcEmisor,
                        'nombreReceptorcxp'            => $nombreReceptor,
                        'rfcReceptorcxp'               => $rfcReceptor,
                        'totalImpuestosTrasladadoscxp' => $totalImpuestosTrasladados,
                        'tasaCuotacxp'                 => $tasaCuota,
                        'tipoFactorcxp'                => $tipoFactor,
                        'impuestocxp'                  => $impuesto
                    );
                
    }
  }
}

    $json = json_encode($datacxp);
    echo $json;

?>
