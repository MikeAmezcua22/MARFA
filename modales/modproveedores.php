<!--
  Autor: MAAA
  Descripción: Modal para modificar un proveedor
-->
<div class="modal fade" id="ModalEdicionProveedor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">Actualizar Datos</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-12">
              <form method="POST"  id="formmodificarProveedor">
                <input type="text" name="idpersonaProveedor" hidden="" id="idpersonaProveedor" name="">
                <label>RFC Proveedor</label>
                <input type="text" name="RfcProveedorUProveedor" value="" id="RfcProveedorUProveedor" class="form-control input-sm">
                <label>Razón Social</label>
                <input type="text" name="RazonSocialUProveedor" value="" id="RazonSocialUProveedor" class="form-control input-sm">
              </div>
              <div class="col-4">
                  <label>Estado</label>
                  <input type="text" name="EstadoProveedorUProveedor" value="" id="EstadoProveedorUProveedor" class="form-control input-sm">
              </div>
                <div class="col-4">
                  <label>Dias Crédito</label>
                  <input type="text" name="DiasCreditoUProveedor" value="" id="DiasCreditoUProveedor" class="form-control input-sm">
                </div>
              <div class="col-4">
                <label>Saldo</label>
                <input type="text" name="SaldoProveedorUProveedor" value="" id="SaldoProveedorUProveedor" class="form-control input-sm">
              </div>
              <div class="col-12">
                <label>Télefono de contacto</label>
                <input type="text" name="TelefonoContactoUProveedor" value="" id="TelefonoContactoUProveedor" class="form-control input-sm">
              </div>
              <div class="col-8">
                <label>Calle</label>
                <input type="text" name="CalleProveedorUProveedor" value="" id="CalleProveedorUProveedor" class="form-control input-sm">
              </div>
              <div class="col-4">
                <label>No.</label>
                <input type="text" name="NoProveedorUProveedor" value="" id="NoProveedorUProveedor" class="form-control input-sm">
              </div>
              <div class="col-8">
                <label>Colonia</label>
                <input type="text" name="ColoniaProveedorUProveedor" value="" id="ColoniaProveedorUProveedor" class="form-control input-sm">
              </div>
              <div class="col-4">
                <label>Código Postal</label>
                <input type="text" name="CodPostalProveedorUProveedor" value="" id="CodPostalProveedorUProveedor" class="form-control input-sm">
                </div>
              <div class="col-12">
                <label>Ciudad</label>
                <input type="text" name="CiudadProveedorUProveedor" value="" id="CiudadProveedorUProveedor" class="form-control input-sm">
                <button class="btn btn-warning mt-2 mr-2" type="submit" name="ModProveedor" id="modificarproveedor" >Modificar</button>
              </div>
              </Form>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
