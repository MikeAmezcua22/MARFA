
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
          Cuentas por Pagar
        </div>
        <div class="card-body">
          <span class="btn btn-primary" data-toggle="modal" data-target="#AgregarNuevoXmlCxP">
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
  <?php require_once("./modales/cargaFacturacxp.php")?>  
  
<!--***********************************************************************-->
  </body>
</html>
<script type="text/javascript">
  $(document).ready(function(){
    $('#dataTable').load('php/tablacuentasporpagar.php')
  });

  // Leer archivo CFDI
  $("form#datacxp").submit(function(e){
    e.preventDefault();

    var formDatacxp = new FormData(this);

    $.ajax({
        url: 'php/uploadcxp.php',
        type: 'POST',
        data: formDatacxp,
        success: function (datacxp) {
          var obj = jQuery.parseJSON(datacxp)   
          
          $.each(obj, function(key, value){
            $.date = function(datacxp) {
              var d = new Date(datacxp);
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
            
            document.getElementById("tablaResultadocxp").innerHTML += 
                  " <tr><td colspan='4' height='30px' color='blue'><b>Factura Numero: "+ key +"</b></td></tr>"+
                  "<tr>"+
                  "    <td><b>UUID</b></td>"+
                  "    <td> "+
                  "      <label id='uuidcxp"+key+"'>"+value.uuidcxp+"</label>"+
                  "       <input type='hidden' value='"+value.uuidcxp+"' name='uuidcxp"+key+"' id='uuidi"+key+"'></input>"+
                  "    </td>"+
                  "    <td><b>Fecha Timbrado</b></td>"+
                  "    <td>"+
                  "        <label id='fTimbradocxp"+key+"'>"+$.date(value.fechaTimbradocxp)+"</label>"+
                  "        <input type='hidden' value="+value.fechaTimbradocxp+" name='fTimbradocxp"+key+"' id='fTimbradoi"+key+"'></input>"+
                  "      </td>"+
                  "  </tr>"+
                  "  <tr>"+
                  "    <td><b>Impuesto</b></td>"+
                  "    <td>"+
                  "        <label id='impuestocxp"+key+"'>"+value.impuestocxp+"</label>"+
                  "        <input type='hidden' value="+value.impuestocxp+" name='impuestocxp"+key+"' id='impuestoi"+key+"'></input>"+
                  "      </td>"+
                  "    <td><b>Lugar Expedici&oacute;n</b></td>"+
                  "    <td>"+
                  "        <label id='lugarExpedicioncxp"+key+"'>"+value.lugarExpedicioncxp+"</label>"+
                  "        <input type='hidden' value="+value.lugarExpedicioncxp+" name='lugarExpedicioncxp"+key+"' id='lugarExpedicioni"+key+"'/>"+
                  "      </td>"+
                  "  </tr>"+
                  "  <tr>"+
                  "     <td><b>Metodo de Pago</b></td>"+
                  "     <td>"+
                  "        <label id='metodoPagocxp"+key+"'>"+value.metodoPagocxp+"</label>"+
                  "        <input type='hidden' value="+value.metodoPagocxp+" name='metodoPagocxp"+key+"' id='metodoPagoi"+key+"'></input>"+
                  "      </td>"+
                  "    <td><b>Moneda</b></td>"+
                  "   <td>"+
                  "      <label id='monedacxp"+key+"'>"+value.monedacxp+"</label>"+
                  "      <input type='hidden' name='monedacxp"+key+"' value="+value.monedacxp+" id='monedai"+key+"' />"+
                  "    </td>"+
                  "  </tr>"+
                  "  <tr>"+
                  "    <td><b>Nombre del Emisor</b></td>"+
                  "    <td>"+
                  "      <label id='nombreEmisorcxp"+key+"'>"+value.nombreEmisorcxp+"</label>"+
                  "      <input type='hidden' name='nombreEmisorcxp"+key+"' value="+value.nombreEmisorcxp+" id='nombreEmisori"+key+"'></input>"+
                  "    </td>"+
                  "    <td><b>Nombre del Receptor</b></td>"+
                  "   <td><label id='nombreReceptorcxp"+key+"'>"+value.nombreReceptorcxp+"</label>"+
                  "      <input type='hidden' name='nombreReceptorcxp"+key+"' value="+value.nombreReceptorcxp+" id='nombreReceptori"+key+"' />"+
                  "    </td>"+
                  "  </tr>"+
                  "  <tr>"+
                  "    <td><b>RFC Emisor</b></td>"+
                  "     <td><label id='rfcEmisorcxp"+key+"'>"+value.rfcEmisorcxp+"</label>"+
                  "        <input type='hidden' name='rfcEmisorcxp"+key+"' value="+value.rfcEmisorcxp+" id='rfcEmisori"+key+"' />"+
                  "      </td>"+
                  "    <td><b>RFC Receptor</b></td>"+
                  "    <td>"+
                  "        <label id='rfcReceptorcxp"+key+"'>"+value.rfcReceptorcxp+"</label>"+
                  "        <input type='hidden' name='rfcReceptorcxp"+key+"' value="+value.rfcReceptorcxp+" id='rfcReceptori"+key+"'/></td>"+
                  "  </tr>"+
                  "  <tr>"+
                  "    <td><b>Subtotal</bn></td>"+
                  "    <td>"+
                  "      <label id='subtotalcxp"+key+"'>"+value.subtotalcxp+"</label>"+
                  "      <input type='hidden' name='subtotalcxp"+key+"' value="+value.subtotalcxp+" id='subtotali"+key+"' />"+
                  "    </td>"+
                  "    <td><b>Tasa o Cuota</b></td>"+
                  "   <td>"+
                  "      <label id='tasaCuotacxp"+key+"'>"+value.tasaCuotacxp+"</label>"+
                  "      <input type='hidden' name='tasaCuotacxp"+key+"' value="+value.tasaCuotacxp+" id='tasaCuotai"+key+"' /> "+
                  "    </td>"+
                  "  </tr>"+
                  "  <tr>"+
                  "    <td><b>Tipo de Factor</b></td>"+
                  "    <td>"+
                  "      <label id='tipoFactorcxp"+key+"'>"+value.tipoFactorcxp+"</label>"+
                  "      <input type='hidden' name='tipoFactorcxp"+key+"' value="+value.tipoFactorcxp+" id='tipoFactori"+key+"' /> "+
                  "    </td>"+
                  "    <td><b>Total</b></td>"+
                  "     <td><label id='totalcxp"+key+"'>"+value.totalcxp+"</label>"+
                  "      <input type='hidden' name='totalcxp"+key+"' value="+value.totalcxp+" id='totali"+key+"' /></td>"+
                  "  </tr>"+
                  "  <tr>"+
                  "    <td><b>Total de Impuestos Trasladados</b></td>"+
                  "    <td>"+
                  "      <label id='totalImpuestosTrasladadoscxp"+key+"'>"+value.totalImpuestosTrasladadoscxp+"</label>"+
                  "      <input type='hidden' value="+value.totalImpuestosTrasladadoscxp+" name='totalImpuestosTrasladadoscxp"+key+"' id='totalImpuestosTrasladadosi"+key+"' /></td>"+
                  "    <td style='background-color: yellow; color: black;'><b>Fecha de Vencimiento:</b></td>"+
                  "    <td><input id='fhVencimientocxp"+key+"' name='fhVencimientocxp"+key+"' type='date' required></td>"+
                  "  </tr>";
                
                  document.getElementById("indiceInsertcxp").value = key;

          })
          
          $('#tablaResultadocxp').css("display","inline");
        },
        cache: false,
        contentType: false,
        processData: false
    });
  })

  $("form#dataCFDIcxpa").submit(function(e){
    e.preventDefault()

    var formDatagcxp = new FormData(this);

    $.ajax({
        url: 'php/guardarCFDIcxp.php',
        type: 'POST',
        data: formDatagcxp,
        success: function (dataCFDIcxpa) {
          console.log(dataCFDIcxpa);
          alert("Información guardada con éxito");
          location.reload();
        },
        cache: false,
        contentType: false,
        processData: false
    });
  })

  function makeFileListcxp() {
    var input = document.getElementById("fileXMLcxp");
    var ul = document.getElementById("fileListcxp");
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
