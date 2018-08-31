<?php
/*
    Autor:MAAA
    Descripción: Modal para dar de alta CLIENTES*/

echo '<div class="modal fade" id="ModalRegistro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel">Nuevo Cliente</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-12">
                  <form method="POST"  id="formadd">
                            <label>RFC Cliente</label>
                            <input type="text" name="RfcCliente" value="" id="RfcCliente" class="form-control input-sm">

                            <label>Razón Social</label>
                            <input type="text" name="RazonSocial" value="" id="RazonSocial" class="form-control input-sm">
                      </div>
                     
                      <div class="col-6">
                            <label>Estado del Cliente</label>
                            <input type="text" name="DiasCredito" value="" id="DiasCredito" class="form-control input-sm">
                      </div>
                      <div class="col-6">
                            <label>Saldo del Cliente</label>
                            <input type="text" name="SaldoCliente" value="" id="SaldoCliente" class="form-control input-sm">
                      </div>
                      <div class="col-12">
                            <label>Télefono de contacto</label>
                            <input type="text" name="TelefonoContacto" value="" id="TelefonoContacto" class="form-control input-sm">
                      </div>
                      <div class="col-8">
                            <label>Calle</label>
                            <input type="text" name="CalleCliente" value="" id="CalleCliente" class="form-control input-sm">
                      </div>
                      <div class="col-4">
                            <label>No.</label>
                            <input type="text" name="NoCliente" value="" id="NoCliente" class="form-control input-sm">
                      </div>
                      <div class="col-8">
                        <label>Colonia</label>
                        <input type="text" name="ColoniaCliente" value="" id="ColoniaCliente" class="form-control input-sm">
                      </div>
                      <div class="col-4">
                        <label>Código Postal</label>
                        <input type="text" name="CodPostalCliente" value="" id="CodPostalCliente" class="form-control input-sm">
                      </div>
                      <div class="col-12">
                        <label>Ciudad</label>
                        <input type="text" name="CiudadCliente" value="" id="CiudadCliente" class="form-control input-sm">
                      </div>
                      <div class="col-12">
                        <br>
                      </div>
                      <div class="col-12">
                        <button class="btn btn-primary btn-sm btn-block " type="submit" name="addCliente"id="guardarnuevo">Agregar</button>
                      </div>
                  </form>
                </div>
             </div>
              </div>
            </div>
          </div>
        </div>
      </div>';
    ?>