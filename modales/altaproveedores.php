<!--
  Autor: MAAA
  Descripción: Modal para dar de alta un proveedor
-->
<div class="modal fade" id="ModalRegistroProveedor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel">Nuevo Proveedores</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-12">
                  <form method="POST"  id="formaddproveedor">
                    <label>RFC Proveedor</label>
                    <input type="text" name="RfcProveedor" value="" id="RfcProveedor" class="form-control input-sm">
                    <label>Razón Social</label>
                    <input type="text" name="RazonSocialProveedor" value="" id="RazonSocialProveedor" class="form-control input-sm">
                </div>
                    <div class="col-4">
                      <label>Dias Crédito</label>
                      <input type="text" name="EstadoProveedor" value="" id="EstadoProveedor" class="form-control input-sm">
                    </div>
                      <div class="col-4">
                      <label>Estado</label>
                      <input type="text" name="DiasCreditoProveedor" value="" id="DiasCreditoProveedor" class="form-control input-sm">
                    </div>
                    <div class="col-4">
                      <label>Saldo</label>
                      <input type="text" name="SaldoProveedor" value="" id="SaldoProveedor" class="form-control input-sm">
                    </div>
                    <div class="col-12">
                      <label>Télefono de contacto</label>
                      <input type="text" name="TelefonoContactoProveedor" value="" id="TelefonoContactoProveedor" class="form-control input-sm">
                    </div>
                    <div class="col-8">
                      <label>Calle</label>
                      <input type="text" name="CalleProveedor" value="" id="CalleProveedor" class="form-control input-sm">
                    </div>
                    <div class="col-4">
                        <label>No.</label>
                      <input type="text" name="NoProveedor" value="" id="NoProveedor" class="form-control input-sm">
                    </div>
                    <div class="col-8">
                      <label>Colonia</label>
                      <input type="text" name="ColoniaProveedor" value="" id="ColoniaProveedor" class="form-control input-sm">
                    </div>
                    <div class="col-4">
                      <label>Código Postal</label>
                      <input type="text" name="CodPostalProveedor" value="" id="CodPostalProveedor" class="form-control input-sm">
                    </div>
                    <div class="col-12">
                      <label>Ciudad</label>
                      <input type="text" name="CiudadProveedor" value="" id="CiudadProveedor" class="form-control input-sm">
                      <button class="btn btn-primary mt-2 mr-2" type="submit" name="addProveedor" id="guardarnuevoProveedor" >Agregar </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>