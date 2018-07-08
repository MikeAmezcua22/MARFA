<!-- 
    Autor: Miguel Angel Amezcua Alcantar
    Descripción: Modal para agregar usuario
-->
<div class="modal fade" id="AgregarUsuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel">Nuevo Usuario</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-12">
                  <form method="POST"  id="formaddusuario">
                    <label>Nombre de Usuario</label>
                    <input type="text" name="NombreUsuario" value="" id="NombreUsuario" class="form-control input-sm">
                    <label>Nombre</label>
                    <input type="text" name="Nombre" value="" id="Nombre" class="form-control input-sm">
                </div>
                    <div class="col-12">
                      <label>Apellido Paterno</label>
                      <input type="text" name="ApellidoPaterno" value="" id="ApellidoPaterno" class="form-control input-sm">
                    </div>
                      <div class="col-12">
                      <label>Apellido Materno</label>
                      <input type="text" name="ApellidoMaterno" value="" id="ApellidoMaterno" class="form-control input-sm">
                    </div>
                    <div class="col-12">
                      <label>Password</label>
                      <input type="text" name="Password" value="" id="Password" class="form-control input-sm">
                    </div>
                    <div class="col-12">
                      <label>Telefono de Contacto</label>
                      <input type="text" name="TelContactoUsuario" value="" id="TelContactoUsuario" class="form-control input-sm">
                    </div>
                    <div class="col-6">
                      <label>Correo Electronico</label>
                      <input type="text" name="CorreoElectronico" value="" id="CorreoElectronico" class="form-control input-sm">
                    </div>
                    <div class="col-6">
                      <label>Nacimiento</label>
                      <input type="text" name="FechaDeNacimiento" value="" id="FechaDeNacimiento" class="form-control input-sm">
                    </div>
                    <div class="col-6">
                      <label>Tipo de Usuario</label>
                      <input type="text" name="TipodeUsuario" value="" id="TipodeUsuario" class="form-control input-sm">
                    </div>
                   <div class="col-12">
                     <button class="btn btn-primary mt-2 mr-2" type="submit" name="addUsuario" id="guardarnuevoUsuario" >Agregar </button>
                   </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>