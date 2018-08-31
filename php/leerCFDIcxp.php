<?php

/**
 * Leer un archivo XML de un CFDI para obtener sus valores de los atributos
 * upq.isc.davidpacheco@gmail.com
 * Agosto 2017
 */
class LeerCFDIcxp {

	private $namespaces;
	private $xml;
	private $serie;
    private $folio;
    private $nombreEmisor;
	private $rfcEmisor;
	private $nombreReceptor;
	private $rfcReceptor;
	private $fecha;
	private $total;
	private $tipoComprobante;
	private $uuid;
    private $lugarExpedicion;
    private $metodoPago;
    private $fechaTimbrado;
    private $moneda;
	private $subtotal;
	private $totalImpuestosTrasladados;
	private $tasaCuota;
	private $tipoFactor;
	private $impuesto;

    /**
	 * archivoXML Ruta del archivo XML
	*/
    
	function cargaXmlcxp($archivoXML) {

		if (file_exists($archivoXML)) {
			libxml_use_internal_errors(true);
			$this -> xml = new SimpleXMLElement($archivoXML, null, true);
			$this -> namespaces = $this -> xml -> getNamespaces(true);
		} else {
			throw new Exception("Error al cargar archivo XML, verifique que el archivo exista.", 1);
		}

	}

	/**
	 * Obtener el RFC del Emisor
	 */
	function rfcEmisor() {
		$this -> xml -> registerXPathNamespace('t', $this -> namespaces['tfd']);

		foreach ($this -> xml ->xpath('//cfdi:Comprobante//cfdi:Emisor') as $emisor) {
			$this -> rfcEmisor = "{$emisor['Rfc']}";
		}

		return $this -> rfcEmisor;
	}

	/**
	 * Obtener el RFC del Receptor
	 */
	function rfcReceptor() {
		$this -> xml -> registerXPathNamespace('t', $this -> namespaces['tfd']);

		foreach ($this -> xml ->xpath('//cfdi:Comprobante//cfdi:Receptor') as $receptor) {
			$this -> rfcReceptor = "{$receptor['Rfc']}";
		}

		return $this -> rfcReceptor;
	}

	/**
	 * Obtener el RFC  del CFDI
	 */
	function total() {
		$this -> xml -> registerXPathNamespace('t', $this -> namespaces['tfd']);

		foreach ($this -> xml ->xpath('//cfdi:Comprobante') as $comprobante) {
			$this -> total =  "{$comprobante['Total']}";
		}
		return $this -> total;
	}

	/**
	 * Obtener la serie del CFDI
	 */
	function serie() {

		foreach ($this -> xml ->xpath('//cfdi:Comprobante') as $comprobante) {
			$this -> serie = $comprobante['serie'] != "" ? $comprobante['serie'] : $comprobante['Serie'];
		}

		return $this -> serie;
	}

	/**
	 * Obtener elfolio del CFDI
	 */
	function folio() {

		foreach ($this -> xml ->xpath('//cfdi:Comprobante') as $comprobante) {
			$this -> folio = $comprobante['folio'] != "" ? $comprobante['folio'] : $comprobante['Folio'];
		}

		return $this -> folio;
	}

	/**
	 * Obtener el la fecha del CFDI
	 */
	function fecha() {

		foreach ($this -> xml ->xpath('//cfdi:Comprobante') as $comprobante) {
			$this -> fecha = $comprobante['fecha'] != "" ? $comprobante['fecha'] : $comprobante['Fecha'];
		}

		return $this -> fecha;
	}

	/**
	 * Obtener el tipo del comprobante del  CFDI (Ingreso o Egreso);
	 */
	function tipoComprobante() {

		foreach ($this -> xml ->xpath('//cfdi:Comprobante') as $comprobante) {
			$this -> tipoComprobante = $comprobante['tipoDeComprobante'] != "" ? $comprobante['tipoDeComprobante'] : $comprobante['TipoDeComprobante'];
		}

		if (strcmp(strtolower($this -> tipoComprobante), 'ingreso') == 0 || strcmp(strtolower($this -> tipoComprobante), 'i') == 0) {
			$this -> tipoComprobante = "I";
		} else {
			$this -> tipoComprobante = "E";
		}

		return $this -> tipoComprobante;
	}

	/**
	 * Obtener el UUID de la factura
	 */
	function uuid() {

		$this -> xml -> registerXPathNamespace('t', $this -> namespaces['tfd']);

		foreach ($this->xml->xpath('//t:TimbreFiscalDigital') as $tfd) {
			$this -> uuid = "{$tfd['UUID']}";
		}

		return $this -> uuid;
    }
    
    // Mis Rutas

    /**
	 * Obtener Lugar de expedicion
	 */

    function lugarExpedicion() {
		$this -> xml -> registerXPathNamespace('c', $this -> namespaces['tfd']);

		foreach ($this -> xml ->xpath('//cfdi:Comprobante') as $Comprobante) {
			$this -> lugarExpedicion = "{$Comprobante['LugarExpedicion']}";
		}
		return $this -> lugarExpedicion;
    }
    
    /**
     * Metodo de  Pago
     */

    function metodoPago() {
		$this -> xml -> registerXPathNamespace('t', $this -> namespaces['tfd']);

		foreach ($this -> xml ->xpath('//cfdi:Comprobante') as $Comprobante) {
			$this -> metodoPago = "{$Comprobante['MetodoPago']}";
        }
        
		return $this -> metodoPago;
    }

    /**
     * Metodo de  Pago
     */

    function fechaTimbrado() {

		$this -> xml -> registerXPathNamespace('t', $this -> namespaces['tfd']);

		foreach ($this->xml->xpath('//t:TimbreFiscalDigital') as $tfd) {
			$this -> fechaTimbrado = "{$tfd['FechaTimbrado']}";
		}

		return $this -> fechaTimbrado;
    }

    function moneda() {
		$this -> xml -> registerXPathNamespace('c', $this -> namespaces['cfdi']);

		foreach ($this -> xml ->xpath('//c:Comprobante') as $comprobante) {
			$this -> moneda = "{$comprobante['Moneda']}";
		}
		return $this -> moneda;
    }

    function subtotal() {
		$this -> xml -> registerXPathNamespace('c', $this -> namespaces['cfdi']);

		foreach ($this -> xml ->xpath('//c:Comprobante') as $comprobante) {
			$this -> subtotal = "{$comprobante['SubTotal']}";
        }
        
		return $this -> subtotal;
    }

    function nombreEmisor() {
		$this -> xml -> registerXPathNamespace('c', $this -> namespaces['cfdi']);

		foreach ($this -> xml ->xpath('//c:Comprobante//cfdi:Emisor') as $emisor) {
			$this -> nombreEmisor = "{$emisor['Nombre']}";
		}

		return $this -> nombreEmisor;
	}

	function nombreReceptor() {
		$this -> xml -> registerXPathNamespace('c', $this -> namespaces['cfdi']);

		foreach ($this -> xml ->xpath('//cfdi:Comprobante//cfdi:Receptor') as $receptor) {
			$this -> nombreReceptor ="{$receptor['Nombre']}";
		}

		return $this -> nombreReceptor;
	}

	
	function totalImpuestosTrasladados(){
		$this -> xml -> registerXPathNamespace('c', $this -> namespaces['cfdi']);

		foreach ($this -> xml ->xpath('//cfdi:Comprobante//cfdi:Impuestos') as $impuestos) {
			$this -> totalImpuestosTrasladados = "{$impuestos['TotalImpuestosTrasladados']}";
		}

		return $this -> totalImpuestosTrasladados;
	}

	function tasaCuota(){
		$this -> xml -> registerXPathNamespace('c', $this -> namespaces['cfdi']);

		foreach ($this -> xml ->xpath('//cfdi:Comprobante//cfdi:Impuestos//cfdi:Traslados//cfdi:Traslado') as $impuestos) {
			$this -> tasaCuota = "{$impuestos['TasaOCuota']}";
		}

		return $this -> tasaCuota;
	}

	function tipoFactor(){
		$this -> xml -> registerXPathNamespace('c', $this -> namespaces['cfdi']);

		foreach ($this -> xml ->xpath('//cfdi:Comprobante//cfdi:Impuestos//cfdi:Traslados//cfdi:Traslado') as $impuestos) {
			$this -> tipoFactor = "{$impuestos['TipoFactor']}";
		}

		return $this -> tipoFactor;
	}

	function impuesto(){
		$this -> xml -> registerXPathNamespace('c', $this -> namespaces['cfdi']);

		foreach ($this -> xml ->xpath('//cfdi:Comprobante//cfdi:Impuestos//cfdi:Traslados//cfdi:Traslado') as $impuestos) {
			$this -> impuesto = "{$impuestos['Impuesto']}";
		}

		return $this -> impuesto;
	}
	
}

?>