<!--
    Autor:MAAA
    Descripción: Modal para modificar CLIENTES
-->
<div class="modal fade" id="ModalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">Actualizar Datos</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-12">
              <form method="POST"  id="formmodificar">
                <input type="text" name="idpersona" hidden="" id="idpersona" name="">
                <label>RFC Cliente</label>
                <input type="text" name="RfcClienteU" value="" id="RfcClienteU" class="form-control input-sm">
                <label>Razón Social</label>
                <input type="text" name="RazonSocialU" value="" id="RazonSocialU" class="form-control input-sm">
            </div>
            <div class="col-4">
              <label>Estado del Cliente</label>
              <input type="text" name="EstadoClienteU" value="" id="EstadoClienteU" class="form-control input-sm">
           </div>
           <div class="col-4">
              <label>Dias Crédito</label>
              <input type="text" name="DiasCreditoU" value="" id="DiasCreditoU" class="form-control input-sm">
          </div>
          <div class="col-4">
              <label>Saldo del Cliente</label>
              <input type="text" name="SaldoClienteU" value="" id="SaldoClienteU" class="form-control input-sm">
          </div>
          <div class="col-12">
            <label>Télefono de contacto</label>
            <input type="text" name="TelefonoContactoU" value="" id="TelefonoContactoU" class="form-control input-sm">
          </div>
          <div class="col-8">
            <label>Calle</label>
            <input type="text" name="CalleClienteU" value="" id="CalleClienteU" class="form-control input-sm">
          </div>
          <div class="col-4">
            <label>No.</label>
            <input type="text" name="NoClienteU" value="" id="NoClienteU" class="form-control input-sm">
          </div>
          <div class="col-8">
            <label>Colonia</label>
            <input type="text" name="ColoniaClienteU" value="" id="ColoniaClienteU" class="form-control input-sm">
          </div>
          <div class="col-4">
            <label>Código Postal</label>
            <input type="text" name="CodPostalClienteU" value="" id="CodPostalClienteU" class="form-control input-sm">
          </div>
            <div class="col-12">
              <label>Ciudad</label>
              <input type="text" name="CiudadClienteU" value="" id="CiudadClienteU" class="form-control input-sm">
            </div>
            <div class="col-12">
              <br>
            </div>
            <div class="col-12">
              <button class="btn btn-warning btn-sm btn-block" type="submit" name="ModCliente"  id="modificarcliente" >Modificar </button>
            </div>

            </Form>
          </div>
      </div>
    </div>
  </div>
</div>