
<!--
  Autor: MAAA
  Dexripción: CRUD Cuentas por cobrar
-->
<html>
  <head>
    <meta charset="utf-8">
      <?php require_once "scripts.php";  ?>
    <title></title>
  </head>
  <body>
 <!-- Require para MENU--> 
 <?php require_once("navbar.php") ?>
<!--****************************************-->

<!-- Contenedor para cargar la tabla DE CUENTAS POR COBRAR-->
<div class="container-fluid" style="margin-top:20px;">
  <div class="row">
    <div class="col-sm-12">
      <div class="card text-left">
        <div class="card-header">
          Cuentas por cobrar
        </div>
        <div class="card-body">
          <span class="btn btn-primary" data-toggle="modal" data-target="#AgregarNuevoXml">
            Agregar Nuevo <span class="fa fa-plus-circle">
            </span>
          </span>
          <hr>
        </div>
        <div id="dataTable" class="dataTable" style="overflow-x: scroll;">
          2 days ago
        </div>
      </div>
    </div>
  </div>
</div>
<!--********************************************-->

<!-- Contenedor para cargar la tabla DE CUENTAS POR COBRAR PAGADAS-->
<div class="container-fluid" style="margin-top:20px;">
  <div class="row">
    <div class="col-sm-12">
      <div class="card text-left">
        <div class="card-header">
          Facturas Pagadas
        </div>
        <div class="card-body">
          <span class="btn btn-primary" data-toggle="modal" data-target="#AgregarNuevoXml">
            Agregar Nuevo <span class="fa fa-plus-circle">
            </span>
          </span>
          <hr>
        </div>
        <div id="dataTable" class="dataTable" style="overflow-x: scroll;">
          2 days ago
        </div>
      </div>
    </div>
  </div>
</div>
<!--********************************************-->

<!--Modal para cargar Factura-->
  <?php require_once("./modales/cargarFactura.php")?>  
  
<!--***********************************************************************-->
  </body>
</html>
<script type="text/javascript">
  $(document).ready(function(){
    $('#dataTable').load('php/tablacuentascobrar.php')
  });

  // Leer archivo CFDI
  $("form#data").submit(function(e){
    e.preventDefault();

    var formData = new FormData(this);

    $.ajax({
        url: 'php/upload.php',
        type: 'POST',
        data: formData,
        success: function (data) {
          var obj = jQuery.parseJSON(data)   
          
          $.each(obj, function(key, value){
            $.date = function(data) {
              var d = new Date(data);
              var day = d.getDate();
              var month = d.getMonth() + 1;
              var year = d.getFullYear();
              if (day < 10) {
                  day = "0" + day;
              }
              if (month < 10) {
                  month = "0" + month;
              }
              var date = day + "/" + month + "/" + year;

              return date;
            };
            
            document.getElementById("tablaResultado").innerHTML += 
                  " <tr><td colspan='4' height='30px'><b>** Factura Numero: "+ key +"</b></td></tr>"+
                  "<tr>"+
                  "    <td><b>UUID</b></td>"+
                  "    <td> "+
                  "      <label id='uuid"+key+"'>"+value.uuid+"</label>"+
                  "       <input type='hidden' value='"+value.uuid+"' name='uuid"+key+"' id='uuidi"+key+"'></input>"+
                  "    </td>"+
                  "    <td><b>Fecha Timbrado</b></td>"+
                  "    <td>"+
                  "        <label id='fTimbrado"+key+"'>"+$.date(value.fechaTimbrado)+"</label>"+
                  "        <input type='hidden' value="+value.fechaTimbrado+" name='fTimbrado"+key+"' id='fTimbradoi"+key+"'></input>"+
                  "      </td>"+
                  "  </tr>"+
                  "  <tr>"+
                  "    <td><b>Impuesto</b></td>"+
                  "    <td>"+
                  "        <label id='impuesto"+key+"'>"+value.impuesto+"</label>"+
                  "        <input type='hidden' value="+value.impuesto+" name='impuesto"+key+"' id='impuestoi"+key+"'></input>"+
                  "      </td>"+
                  "    <td><b>Lugar Expedici&oacute;n</b></td>"+
                  "    <td>"+
                  "        <label id='lugarExpedicion"+key+"'>"+value.lugarExpedicion+"</label>"+
                  "        <input type='hidden' value="+value.lugarExpedicion+" name='lugarExpedicion"+key+"' id='lugarExpedicioni"+key+"'/>"+
                  "      </td>"+
                  "  </tr>"+
                  "  <tr>"+
                  "     <td><b>Metodo de Pago</b></td>"+
                  "     <td>"+
                  "        <label id='metodoPago"+key+"'>"+value.metodoPago+"</label>"+
                  "        <input type='hidden' value="+value.metodoPago+" name='metodoPago"+key+"' id='metodoPagoi"+key+"'></input>"+
                  "      </td>"+
                  "    <td><b>Moneda</b></td>"+
                  "   <td>"+
                  "      <label id='moneda"+key+"'>"+value.moneda+"</label>"+
                  "      <input type='hidden' name='moneda"+key+"' value="+value.moneda+" id='monedai"+key+"' />"+
                  "    </td>"+
                  "  </tr>"+
                  "  <tr>"+
                  "    <td><b>Nombre del Emisor</b></td>"+
                  "    <td>"+
                  "      <label id='nombreEmisor"+key+"'>"+value.nombreEmisor+"</label>"+
                  "      <input type='hidden' name='nombreEmisor"+key+"' value="+value.nombreEmisor+" id='nombreEmisori"+key+"'></input>"+
                  "    </td>"+
                  "    <td><b>Nombre del Receptor</b></td>"+
                  "   <td><label id='nombreReceptor"+key+"'>"+value.nombreReceptor+"</label>"+
                  "      <input type='hidden' name='nombreReceptor"+key+"' value="+value.nombreReceptor+" id='nombreReceptori"+key+"' />"+
                  "    </td>"+
                  "  </tr>"+
                  "  <tr>"+
                  "    <td><b>RFC Emisor</b></td>"+
                  "     <td><label id='rfcEmisor"+key+"'>"+value.rfcEmisor+"</label>"+
                  "        <input type='hidden' name='rfcEmisor"+key+"' value="+value.rfcEmisor+" id='rfcEmisori"+key+"' />"+
                  "      </td>"+
                  "    <td><b>RFC Receptor</b></td>"+
                  "    <td>"+
                  "        <label id='rfcReceptor"+key+"'>"+value.rfcReceptor+"</label>"+
                  "        <input type='hidden' name='rfcReceptor"+key+"' value="+value.rfcReceptor+" id='rfcReceptori"+key+"'/></td>"+
                  "  </tr>"+
                  "  <tr>"+
                  "    <td><b>Subtotal</bn></td>"+
                  "    <td>"+
                  "      <label id='subtotal"+key+"'>"+value.subtotal+"</label>"+
                  "      <input type='hidden' name='subtotal"+key+"' value="+value.subtotal+" id='subtotali"+key+"' />"+
                  "    </td>"+
                  "    <td><b>Tasa o Cuota</b></td>"+
                  "   <td>"+
                  "      <label id='tasaCuota"+key+"'>"+value.tasaCuota+"</label>"+
                  "      <input type='hidden' name='tasaCuota"+key+"' value="+value.tasaCouta+" id='tasaCuotai"+key+"' /> "+
                  "    </td>"+
                  "  </tr>"+
                  "  <tr>"+
                  "    <td><b>Tipo de Factor</b></td>"+
                  "    <td>"+
                  "      <label id='tipoFactor"+key+"'>"+value.tipoFactor+"</label>"+
                  "      <input type='hidden' name='tipoFactor"+key+"' value="+value.tipoFactor+" id='tipoFactori"+key+"' /> "+
                  "    </td>"+
                  "    <td><b>Total</b></td>"+
                  "     <td><label id='total"+key+"'>"+value.total+"</label>"+
                  "      <input type='hidden' name='total"+key+"' value="+value.total+" id='totali"+key+"' /></td>"+
                  "  </tr>"+
                  "  <tr>"+
                  "    <td><b>Total de Impuestos Trasladados</b></td>"+
                  "    <td>"+
                  "      <label id='totalImpuestosTrasladados"+key+"'>"+value.totalImpuestosTrasladados+"</label>"+
                  "      <input type='hidden' value="+value.totalImpuestosTrasladados+" name='totalImpuestosTrasladados"+key+"' id='totalImpuestosTrasladadosi"+key+"' /></td>"+
                  "    <td style='background-color: yellow; color: black;'><b>Fecha de Vencimiento:</b></td>"+
                  "    <td><input id='fhVencimiento"+key+"' name='fhVencimiento"+key+"' type='date' required></td>"+
                  "  </tr>";
                
                  document.getElementById("indiceInsert").value = key;

          })
          
          $('#tablaResultado').css("display","inline");
        },
        cache: false,
        contentType: false,
        processData: false
    });
  })

  $("form#dataCFDI").submit(function(e){
    e.preventDefault()

    var formData = new FormData(this);

    $.ajax({
        url: 'php/guardarCFDI.php',
        type: 'POST',
        data: formData,
        success: function (data) {
          console.log(data);
          alert("Información guardada con éxito");
          location.reload();
        },
        cache: false,
        contentType: false,
        processData: false
    });
  })

  function makeFileList() {
    var input = document.getElementById("fileXML");
    var ul = document.getElementById("fileList");
    while (ul.hasChildNodes()) {
      ul.removeChild(ul.firstChild);
    }
    for (var i = 0; i < input.files.length; i++) {
      var li = document.createElement("li");
      li.innerHTML = input.files[i].name;
      ul.appendChild(li);
    }
    if(!ul.hasChildNodes()) {
      var li = document.createElement("li");
      li.innerHTML = 'No Files Selected';
      ul.appendChild(li);
    }
  }

</script>
