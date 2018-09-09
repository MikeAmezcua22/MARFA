
//Este modulo es para el inicio de sesión
jQuery(document).on('submit','#formlg',function(event){
  event.preventDefault();

  jQuery.ajax({
    url:'php/log.php',
    type:'POST',
    dataType:'json',
    data: $(this).serialize(),
    beforesend: function(){

    }
  })
  .done(function(res){
    console.log(res)
    console.log(res.Nombre)
    console.log(res.ApellidoPaterno)
    if(res.error === true){
      $('#err').css('display','inline');

    //  setTimeout(function(){$('#err').css('display','none')}, 2000);
    }

    if(parseInt(res.tipoUsuario) === 1){
      window.location.href = "admin.php";
      localStorage.setItem("Nombre",res.Nombre)
      localStorage.setItem("ApellidoPaterno",res.ApellidoPaterno)
    }

    if(parseInt(res.tipoUsuario) === 2){
      window.location.href = "dashboard.php";
    }

  })
  .fail(function(resp){
    console.log(resp.responseText);
  })
});

//Esta funcion agrega nuevo cliente
jQuery(document).on('submit','#formadd',function(event){
  event.preventDefault();
    jQuery.ajax({
      url:'php/agregardatos.php',
      type:'POST',
      dataType:'json',
      data: $(this).serialize(),
      beforesend: function(){
     }
  })
  .done(function(res){
    console.log(res)
    if(res.insert === "exito"){
       location.reload();
    }

    if(res.insert === 'sin exito'){
      console.log("error")
    }

  })
 .fail(function(res){
    console.log(res);
  })
});



//Esta funcion agrega nuevo proveedor
jQuery(document).on('submit','#formaddproveedor',function(event){
  event.preventDefault();
    jQuery.ajax({
      url:'php/agregaproveedor.php',
      type:'POST',
      dataType:'json',
      data: $(this).serialize(),
      beforesend: function(){
     }
  })
  .done(function(res){
    console.log(res)
    if(res.insert === "exito"){
       location.reload();
    }

    if(res.insert === 'sin exito'){
      console.log("error")
    }

  })
 .fail(function(res){
    console.log(res);
  })
});

//Esta funcion agrega nuevo usuario
jQuery(document).on('submit','#formaddusuario',function(event){
  event.preventDefault();
    jQuery.ajax({
      url:'php/agregarnuevousuario.php',
      type:'POST',
      dataType:'json',
      data: $(this).serialize(),
      beforesend: function(){
     }
  })
  .done(function(res){
    console.log(res.insert);
    if(res.insert == "exito"){
       location.reload();
    }

    if(res.insert == 'sin exito'){
      console.log("error")
    }

  })
 .fail(function(res){
    console.log(res);
  })
});
//Este código corresponde al modulo de actualizar datos para CLIENTES
function agregaform(datos){
  d=datos.split('||');
  $('#idpersona').val(d[0]);
  $('#RfcClienteU').val(d[1]);
  $('#RazonSocialU').val(d[2]);
  $('#EstadoClienteU').val(d[3]);
  $('#DiasCreditoU').val(d[4]);
  $('#SaldoClienteU').val(d[5]);
  $('#TelefonoContactoU').val(d[6]);
  $('#CalleClienteU').val(d[7]);
  $('#NoClienteU').val(d[8]);
  $('#ColoniaClienteU').val(d[9]);
  $('#CodPostalClienteU').val(d[10]);
  $('#CiudadClienteU').val(d[11]);
}
function actualizaDatos(){
  IdCliente=$('#idpersona').val();
  RfcCliente=$('#RfcClienteU').val();
  RazonSocial=$('#RazonSocialU').val();
  EstadoCliente=$('#EstadoClienteU').val();
  DiasCredito=$('#DiasCreditoU').val();
  SaldoCliente=$('#SaldoClienteU').val();
  TelefonoContacto=$('#TelefonoContactoU').val();
  Calle=$('#CalleClienteU').val();
  Numero=$('#NoClienteU').val();
  Colonia=$('#ColoniaClienteU').val();
  CodPostal=$('#CodPostalClienteU').val();
  Ciudad=$('#CiudadClienteU').val();

  cadena= "idpersona=" + IdCliente +
          "&RfcCliente=" + RfcCliente +
          "&RazonSocial=" + RazonSocial +
          "&EstadoCliente=" + EstadoCliente +
          "&DiasCredito=" + DiasCredito +
          "&SaldoCliente=" + SaldoCliente +
          "&TelefonoContacto=" + TelefonoContacto +
          "&Calle=" + Calle +
          "&Numero=" + Numero +
          "&Colonia=" + Colonia +
          "&CodPostal=" + CodPostal +
          "&Ciudad=" + Ciudad;

          jQuery(document).on('submit','#formmodificar',function(event){
            event.preventDefault();
              jQuery.ajax({
                url:'php/modificarclientes.php',
                type:'POST',
                dataType:'json',
                data: $(this).serialize(),
                beforesend: function(){
               }
            })
            .done(function(res){
              console.log(res.query)
              if(res.insert === "exito"){
                 location.reload();
                 alertify.success("Eliminado con exito!");
              }

              if(res.insert === 'sin exito'){
                console.log("error")
              }

            })
           .fail(function(res){
              console.log(res);
            })
          });
}

//Este código corresponde al modulo de actualizar datos para USUARIOS
function agregaformusuarios(datos){
  d=datos.split('||');
  $('#IdUsuarios').val(d[0]);
  $('#NombreUsuarioMod').val(d[1]);
  $('#NombreMod').val(d[2]);
  $('#ApellidoPaternoMod').val(d[3]);
  $('#ApellidoMaternoMod').val(d[4]);
  $('#PasswordMod').val(d[5]);
  $('#CorreoElectronicoMod').val(d[6]);
  $('#TelContactoUsuarioMod').val(d[7]);
  $('#FechaDeNacimientoMod').val(d[8]);
  $('#TipodeUsuarioMod').val(d[9]);
}
function actualizaDatosUsuarios(){
  IdUsuariosMod=$('#IdUsuarios').val();
  NombreUsuarioMod=$('#NombreUsuarioMod').val();
  NombreMod=$('#NombreMod').val();
  ApellidoPaternoMod=$('#ApellidoPaternoMod').val();
  ApellidoMaternoMod=$('#ApellidoMaternoMod').val();
  PasswordMod=$('#PasswordMod').val();
  CorreoElectronicoMod=$('#CorreoElectronicoMod').val();
  TelefonoContactoUsuarioMod=$('#TelefonoContactoUsuarioMod').val();
  FechaNacimientoMod=$('#FechaNacimientoMod').val();
  TipodeUsuarioMod=$('#TipodeUsuarioMod').val();

  cadena= "IdUsuarios=" + IdUsuariosMod +
          "&NombreUsuario=" + NombreUsuarioMod +
          "&Nombre=" + NombreMod +
          "&ApellidoPaterno=" + ApellidoPaternoMod +
          "&ApellidoMaterno=" + ApellidoMaternoMod +
          "&Password=" + PasswordMod +
          "&Email=" + CorreoElectronicoMod +
          "&TelefonoContactoUsuario=" + TelefonoContactoUsuarioMod +
          "&FechaNacimiento=" + FechaNacimientoMod +
          "&IdTipoUsuario=" + TipodeUsuarioMod;

          jQuery(document).on('submit','#formmodusuario',function(event){
            event.preventDefault();
              jQuery.ajax({
                url:'php/modificarusuarios.php',
                type:'POST',
                dataType:'json',
                data: $(this).serialize(),
                beforesend: function(){
               }
            })
            .done(function(res){
              console.log(res.query);
              if(res.insert === "exito"){
                 location.reload();
                 alertify.success("Eliminado con exito!");
              }

              if(res.insert === 'sin exito'){
                console.log("error")
              }

            })
           .fail(function(res){
              console.log(res);
            })
          });
}






//Este código corresponde al modulo de actualizar datos para PROVEEDORES
function agregaformproveedor(datos){
  d=datos.split('||');
  $('#idpersonaProveedor').val(d[0]);
  $('#RfcProveedorUProveedor').val(d[1]);
  $('#RazonSocialUProveedor').val(d[2]);
  $('#EstadoProveedorUProveedor').val(d[3]);
  $('#DiasCreditoUProveedor').val(d[4]);
  $('#SaldoProveedorUProveedor').val(d[5]);
  $('#TelefonoContactoUProveedor').val(d[6]);
  $('#CalleProveedorUProveedor').val(d[7]);
  $('#NoProveedorUProveedor').val(d[8]);
  $('#ColoniaProveedorUProveedor').val(d[9]);
  $('#CodPostalProveedorUProveedor').val(d[10]);
  $('#CiudadProveedorUProveedor').val(d[11]);
}
function actualizaDatosProveedor(){
  IdProveedor=$('#idpersonaProveedor').val();
  RfcProveedor=$('#RfcProveedorUProveedor').val();
  RazonSocialProveedor=$('#RazonSocialUProveedor').val();
  EstadoProveedor=$('#EstadoProveedorUProveedor').val();
  DiasCreditoProveedor=$('#DiasCreditoUProveedor').val();
  SaldoProveedor=$('#SaldoProveedorUProveedor').val();
  TelefonoContactoProveedor=$('#TelefonoContactoUProveedor').val();
  CalleProveedor=$('#CalleProveedorUProveedor').val();
  NumeroProveedor=$('#NoProveedorUProveedor').val();
  ColoniaProveedor=$('#ColoniaProveedorUProveedor').val();
  CodPostalProveedor=$('#CodPostalProveedorUProveedor').val();
  CiudadProveedor=$('#CiudadProveedorUProveedor').val();

  cadena= "idpersonaProveedor=" + IdProveedor +
          "&RfcProveedorUProveedor=" + RfcProveedor +
          "&RazonSocialProveedor=" + RazonSocialProveedor +
          "&EstadoProveedor=" + EstadoProveedor +
          "&DiasCreditoProveedor=" + DiasCreditoProveedor +
          "&SaldoProveedor=" + SaldoProveedor +
          "&TelefonoContactoProveedor=" + TelefonoContactoProveedor +
          "&CalleProveedor=" + CalleProveedor +
          "&NumeroProveedor=" + NumeroProveedor +
          "&ColoniaProveedor=" + ColoniaProveedor +
          "&CodPostalProveedor=" + CodPostalProveedor +
          "&CiudadProveedor=" + CiudadProveedor;

          jQuery(document).on('submit','#formmodificarProveedor',function(event){
            event.preventDefault();
              jQuery.ajax({
                url:'php/modificarproveedor.php',
                type:'POST',
                dataType:'json',
                data: $(this).serialize(),
                beforesend: function(){
               }
            })
            .done(function(res){
              console.log(res)
              if(res.insert === "exito"){
                 location.reload();
                 alertify.success("Eliminado con exito!");
              }

              if(res.insert === 'sin exito'){
                console.log("error")
              }

            })
           .fail(function(res){
              console.log(res);
            })
          });
}


//Este modulo es para eliminar clientes
function preguntarSiNoCliente(id){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?',
					function(){ eliminarDatos(id) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarDatos(id){

	cadena="id=" + id;

		$.ajax({
			type:"POST",
			url:"php/eliminarDatos.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tabla').load('php/tabla.php');
					alertify.success("Eliminado con exito!");
				}else{
					alertify.error("No fue posible eliminar el registro");
				}
			}
		});
}

//Este modulo es para eliminar PROVEEDOR
function preguntarSiNoProveedor(id){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?',
					function(){ eliminarDatosProveedor(id) }
                , function(){ alertify.error('Se cancelo')});
}
function eliminarDatosProveedor(id){
	cadena="id=" + id;
  $.ajax({
    type:"POST",
    url:"php/eliminarDatosProveedor.php",
    data:cadena,
    success:function(r){
      if(r==1){
        $('#tablaproveedor').load('php/tablaproveedor.php');
        alertify.success("¡Eliminado con exito!");
      }else{
        alertify.error("No fue posible eliminar el registro");
      }
    }
  });
}
//Este modulo es para eliminar un USUARIO
function preguntarSiNoUsuario(id){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?',
					function(){ eliminarDatosUsuario(id) }
                , function(){ alertify.error('Se cancelo')});
}
function eliminarDatosUsuario(id){
	cadena="id=" + id;
  $.ajax({
    type:"POST",
    url:"php/eliminarDatosUsuario.php",
    data:cadena,
    success:function(r){
      if(r==1){
        $('#dataTable').load('php/tabla-admin-usuarios.php');
        alertify.success("¡Eliminado con exito!");
      }else{
        alertify.error("No fue posible eliminar el registro");
      }
    }
  });
}

//Este modulo es para eliminar una FACTURA

function preguntarSiNoFactura(id){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?',
          function(){ eliminarDatosFactura(id) },
          function(){ alertify.error('Se cancelo')});
}

function eliminarDatosFactura(id){
	cadena="id=" + id;
  $.ajax({
    type:"POST",
    url:"php/eliminarDatosFactura.php",
    data:cadena,
    success:function(r){
      console.log(r)
      if(r==1){
        $('#dataTable').load('php/tablacuentascobrar.php');
        alertify.success("¡Eliminado con exito!");
      }else{
        alertify.error("No fue posible eliminar el registro");
      }
    }
  });
}

function revisarInput(valor){
  var abono = document.getElementById("abonoEnviar");

  console.log(abono.value);
}

//Este modulo es para eliminar una FACTURA

function preguntarSiNoFacturaCxP(id){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?',
          function(){ eliminarDatosFacturaCxP(id) },
          function(){ alertify.error('Se cancelo')});
}

function eliminarDatosFacturaCxP(id){
	cadena="id=" + id;
  $.ajax({
    type:"POST",
    url:"php/eliminarDatosFacturacxp.php",
    data:cadena,
    success:function(r){
      console.log(r)
      if(r==1){
        $('#dataTable').load('php/tablacuentascobrar.php');
        alertify.success("¡Eliminado con exito!");
      }else{
        alertify.error("No fue posible eliminar el registro");
      }
    }
  });
}

function revisarInput(valor){
  var abono = document.getElementById("abonoEnviar");

  console.log(abono.value);
}





//Abornos

function abonarCuenta(factura, uuid, cantidadTotal,TotalAbono){
  var numeroFactura = document.getElementById("numeroFactura");
  var total = document.getElementById("cantidadTotal")
  var idFactura = document.getElementById("idFactura")
  var totalFactura = document.getElementById("totalFactura")
  var TotaldeFacAbono = document.getElementById("TotaldeFacAbono")
  var AbonoMomento = document.getElementById("AbonoMomento")

  TotaldeFacAbono.value = cantidadTotal
  idFactura.value = factura
  total.textContent = " $"+ cantidadTotal
  numeroFactura.textContent = uuid
  AbonoMomento.value = TotalAbono

  $("#myModal").modal()
}

function limpiarContenido(){
  var Abono = document.getElementById("abonoEnviar");
  Abono.value = ""
}

//Formulario de abono
  jQuery(document).on('submit','#formAbono',function(event){

    event.preventDefault();
    var Abono = document.getElementById("abonoEnviar");
    var TotalReal = document.getElementById("TotaldeFacAbono");
    var TotalAbono = document.getElementById("AbonoMomento");

    console.log(Abono.value)
    console.log(TotalReal.value)
    
    if(parseInt(Abono.value) < parseInt(TotalReal.value)){
      jQuery.ajax({
        url:'php/enviarAbono.php',
        type:'POST',
        dataType:'json',
        data: $(this).serialize()
      })
      .done(function(res){
        location.reload()
      })
      .fail(function(resp){
        console.log(resp.responseText);
      })

      limpiarContenido()
    }else{
      $("#alertErrorAbono").css("display", "flex");
      setTimeout(function(){$("#alertErrorAbono").css("display", "none")}, 5000);
    }
    limpiarContenido()
  });


  //Abonos cuentas por pagar

function abonarCuentaCxP(factura, uuid, cantidadTotal,TotalAbono){
  var numeroFactura = document.getElementById("numeroFacturaPP");
  var total = document.getElementById("cantidadTotalPP")
  var idFactura = document.getElementById("idFacturaPP")
  var totalFactura = document.getElementById("totalFactura")
  var TotaldeFacAbono = document.getElementById("TotaldeFacAbonoPP")
  var AbonoMomento = document.getElementById("AbonoMomentoPP")

  TotaldeFacAbono.value = cantidadTotal
  idFactura.value = factura
  total.textContent = " $"+ cantidadTotal
  numeroFactura.textContent = uuid
  AbonoMomento.value = TotalAbono

  $("#myModalPP").modal()
}

function limpiarContenido(){
  var Abono = document.getElementById("abonoEnviarPP");
  Abono.value = ""
}

//Formulario de abono cuentas por pagar

  jQuery(document).on('submit','#formAbonoPP',function(event){

    event.preventDefault();
    var Abono = document.getElementById("abonoEnviarPP");
    var TotalReal = document.getElementById("TotaldeFacAbonoPP");
    var TotalAbono = document.getElementById("AbonoMomentoPP");

    console.log(Abono.value)
    console.log(TotalReal.value)
    
    if(parseInt(Abono.value) < parseInt(TotalReal.value)){
      jQuery.ajax({
        url:'php/enviarAbonoPP.php',
        type:'POST',
        dataType:'json',
        data: $(this).serialize()
      })
      .done(function(res){
        location.reload()
      })
      .fail(function(resp){
        console.log(resp.responseText);
      })

      limpiarContenido()
    }else{
      $("#alertErrorAbono").css("display", "flex");
      setTimeout(function(){$("#alertErrorAbono").css("display", "none")}, 5000);
    }
    limpiarContenido()
  });



