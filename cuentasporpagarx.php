<!--
  Autor: MAAA
  Dexripción: CRUD Cuentas por pagar
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
  <!--*****************-->

<!-- Contenedor para cargar la tabla DE CUENTAS POR COBRAR-->
<div class="container-fluid" style="margin-top:20px;">
  <div class="row">
    <div class="col-sm-12">
      <div class="card text-left">
        <div class="card-header">
          Cuentas por pagar
        </div>
        <div class="card-body">
          <span class="btn btn-primary" data-toggle="modal" data-target="#AgregarNuevoXmlCxP">
            Agregar Nuevo <span class="fa fa-plus-circle">
            </span>
          </span>
          <hr>
        </div>
        <div id="dataTable" class="dataTable" style="overflow-x: scroll;">
        
        </div>
      </div>
    </div>
  </div>
</div>
<!--********************************************-->
<!--Modal para cargar Factura-->

<?php require_once("./modales/cargaFacturacxP.php")?>  
  
<!--***********************************************************************-->
  </body>
</html>
<script type="text/javascript">
  $(document).ready(function(){
    $('#dataTable').load('php/tablacuentasporpagar.php')
  });
  
  $("form#datacxp").submit(function(e){
    e.preventDefault();

    var formDatacxp = new FormData(this);
    console.log(formDatacxp)
    $.ajax({
        /*
         * En el metodo ajax se necesitan enviar los parametros url, type, data, su callback
         * el cual es success y su metodo catch(para obtener errores)
         * no lo tienes declarado pero es un metodo que existe. 
         * 
         */
        url: 'php/uploadcxp.php',
        type: 'POST',
        data: formDatacxp,
        success: function (datacxp) {
          console.log(datacxp)
          var objcxp = jQuery.parseJSON(datacxp)   
          
          $.each(objcxp, function(key, value){
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
                  "      <label id='uuidcxp"+key+"'>"+value.uuid+"</label>"+
                  "       <input type='hidden' value='"+value.uuid+"' name='uuidcxp"+key+"' id='uuidicxp"+key+"'></input>"+
                  "    </td>"+
                  "    <td><b>Fecha Timbrado</b></td>"+
                  "    <td>"+
                  "        <label id='fTimbradocxp"+key+"'>"+$.date(value.fechaTimbrado)+"</label>"+
                  "        <input type='hidden' value="+value.fechaTimbrado+" name='fTimbradocxp"+key+"' id='fTimbradoicxp"+key+"'></input>"+
                  "      </td>"+
                  "  </tr>"+
                  "  <tr>"+
                  "    <td><b>Impuesto</b></td>"+
                  "    <td>"+
                  "        <label id='impuestocxp"+key+"'>"+value.impuesto+"</label>"+
                  "        <input type='hidden' value="+value.impuesto+" name='impuestocxp"+key+"' id='impuestoicxp"+key+"'></input>"+
                  "      </td>"+
                  "    <td><b>Lugar Expedici&oacute;n</b></td>"+
                  "    <td>"+
                  "        <label id='lugarExpedicioncxp"+key+"'>"+value.lugarExpedicion+"</label>"+
                  "        <input type='hidden' value="+value.lugarExpedicion+" name='lugarExpedicioncxp"+key+"' id='lugarExpedicionicxp"+key+"'/>"+
                  "      </td>"+
                  "  </tr>"+
                  "  <tr>"+
                  "     <td><b>Metodo de Pago</b></td>"+
                  "     <td>"+
                  "        <label id='metodoPagocxp"+key+"'>"+value.metodoPago+"</label>"+
                  "        <input type='hidden' value="+value.metodoPago+" name='metodoPagocxp"+key+"' id='metodoPagoicxp"+key+"'></input>"+
                  "      </td>"+
                  "    <td><b>Moneda</b></td>"+
                  "   <td>"+
                  "      <label id='monedacxp"+key+"'>"+value.moneda+"</label>"+
                  "      <input type='hidden' name='monedacxp"+key+"' value="+value.moneda+" id='monedaicxp"+key+"' />"+
                  "    </td>"+
                  "  </tr>"+
                  "  <tr>"+
                  "    <td><b>Nombre del Emisor</b></td>"+
                  "    <td>"+
                  "      <label id='nombreEmisorcxp"+key+"'>"+value.nombreEmisor+"</label>"+
                  "      <input type='hidden' name='nombreEmisorcxp"+key+"' value="+value.nombreEmisor+" id='nombreEmisoricxp"+key+"'></input>"+
                  "    </td>"+
                  "    <td><b>Nombre del Receptor</b></td>"+
                  "   <td><label id='nombreReceptorcxp"+key+"'>"+value.nombreReceptor+"</label>"+
                  "      <input type='hidden' name='nombreReceptorcxp"+key+"' value="+value.nombreReceptor+" id='nombreReceptoricxp"+key+"' />"+
                  "    </td>"+
                  "  </tr>"+
                  "  <tr>"+
                  "    <td><b>RFC Emisor</b></td>"+
                  "     <td><label id='rfcEmisorcxp"+key+"'>"+value.rfcEmisor+"</label>"+
                  "        <input type='hidden' name='rfcEmisorcxp"+key+"' value="+value.rfcEmisor+" id='rfcEmisoricxp"+key+"' />"+
                  "      </td>"+
                  "    <td><b>RFC Receptor</b></td>"+
                  "    <td>"+
                  "        <label id='rfcReceptorcxp"+key+"'>"+value.rfcReceptor+"</label>"+
                  "        <input type='hidden' name='rfcReceptorcxp"+key+"' value="+value.rfcReceptor+" id='rfcReceptoricxp"+key+"'/></td>"+
                  "  </tr>"+
                  "  <tr>"+
                  "    <td><b>Subtotal</bn></td>"+
                  "    <td>"+
                  "      <label id='subtotalcxp"+key+"'>"+value.subtotal+"</label>"+
                  "      <input type='hidden' name='subtotalcxp"+key+"' value="+value.subtotal+" id='subtotalicxp"+key+"' />"+
                  "    </td>"+
                  "    <td><b>Tasa o Cuota</b></td>"+
                  "   <td>"+
                  "      <label id='tasaCuotacxp"+key+"'>"+value.tasaCuota+"</label>"+
                  "      <input type='hidden' name='tasaCuotacxp"+key+"' value="+value.tasaCouta+" id='tasaCuotaicxp"+key+"' /> "+
                  "    </td>"+
                  "  </tr>"+
                  "  <tr>"+
                  "    <td><b>Tipo de Factor</b></td>"+
                  "    <td>"+
                  "      <label id='tipoFactorcxp"+key+"'>"+value.tipoFactor+"</label>"+
                  "      <input type='hidden' name='tipoFactorcxp"+key+"' value="+value.tipoFactor+" id='tipoFactoricxp"+key+"' /> "+
                  "    </td>"+
                  "    <td><b>Total</b></td>"+
                  "     <td><label id='totalcxp"+key+"'>"+value.total+"</label>"+
                  "      <input type='hidden' name='totalcxp"+key+"' value="+value.total+" id='totalicxp"+key+"' /></td>"+
                  "  </tr>"+
                  "  <tr>"+
                  "    <td><b>Total de Impuestos Trasladados</b></td>"+
                  "    <td>"+
                  "      <label id='totalImpuestosTrasladadoscxp"+key+"'>"+value.totalImpuestosTrasladados+"</label>"+
                  "      <input type='hidden' value="+value.totalImpuestosTrasladados+" name='totalImpuestosTrasladadoscxp"+key+"' id='totalImpuestosTrasladadosicxp"+key+"' /></td>"+
                  "    <td style='background-color: yellow; color: black;'><b>Fecha de Vencimiento:</b></td>"+
                  "    <td><input id='fhVencimiento"+key+"' name='fhVencimiento"+key+"' type='date' required></td>"+
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

  /*$("form#dataCFDIcxp").submit(function(e){
    e.preventDefault()

    var formDatacxp = new FormData(this);

    $.ajax({
        url: 'php/guardarCFDIcxp.php',
        type: 'POST',
        datacxp: formDatacxp,
        success: function (datacxp) {
          console.log(datacxp);
          alert("Información guardada con éxito");
          location.reload();
        },
        cache: false,
        contentType: false,
        processData: false
    });
  })*/

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

  
  
  
  
  </script>