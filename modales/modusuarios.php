<!-- 
    Autor: Miguel Angel Amezcua Alcantar
    Descripción: Modal para modificar usuarios
-->
<div class="modal fade" id="ModalEdicionUsuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">Modificar Usuario</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-12">
              <form method="POST"  id="formmodusuario">
                <input type="text" name="IdUsuarios" hidden="" id="IdUsuarios" name="">
                <label>Nombre de Usuario</label>
                <input type="text" name="NombreUsuarioMod" value="" id="NombreUsuarioMod" class="form-control input-sm">
                <label>Nombre</label>
                <input type="text" name="Nombre" value="" id="NombreMod" class="form-control input-sm">
            </div>
                <div class="col-12">
                  <label>Apellido Paterno</label>
                  <input type="text" name="ApellidoPaternoMod" value="" id="ApellidoPaternoMod" class="form-control input-sm">
                </div>
                  <div class="col-12">
                  <label>Apellido Materno</label>
                  <input type="text" name="ApellidoMaternoMod" value="" id="ApellidoMaternoMod" class="form-control input-sm">
                </div>
                <div class="col-12">
                  <label>Password</label>
                  <input type="text" name="PasswordMod" value="" id="PasswordMod" class="form-control input-sm">
                </div>
                <div class="col-6">
                  <label>Telefono de Contacto</label>
                  <input type="text" name="TelContactoUsuarioMod" value="" id="TelContactoUsuarioMod" class="form-control input-sm">
                </div>
                <div class="col-6">
                  <label>Correo Electronico</label>
                  <input type="text" name="CorreoElectronicoMod" value="" id="CorreoElectronicoMod" class="form-control input-sm">
                </div>
                <div class="col-6">
                  <label>Nacimiento</label>
                  <input type="text" name="FechaDeNacimientoMod" value="" id="FechaDeNacimientoMod" class="form-control input-sm">
                </div>
                <div class="col-6">
                  <label>Tipo de Usuario</label>
                  <input type="text" name="TipodeUsuarioMod" value="" id="TipodeUsuarioMod" class="form-control input-sm">
                </div>
               <div class="col-12">
                 <button class="btn btn-warning mt-2 mr-2"  name="modUsuario" id="ModificarUsuarioMod" >Modificar </button>
               </div>
             </Form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>