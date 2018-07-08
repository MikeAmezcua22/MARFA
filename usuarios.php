
<html>
  <head>
    <meta charset="utf-8">
      <?php require_once "scripts.php";  ?>
    <title></title>
  </head>
  <body>

      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a href="#" class="navbar-brand"><img src="img/LoginSesion.png" width="60" height="60"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-label="Menu">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" id="menu-categorias" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-users" aria-hidden="true"></i> USUARIOS</a>
              <div class="dropdown-menu" arial-labelledby="menu-categorias">
                <a href="index1.php" class="dropdown-item"></a>
                <a href="#" class="dropdown-item">Visitar Perfil</a>
                <a href="usuarios.php" class="dropdown-item">Administrar Usuarios</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" id="menu-categorias" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-address-book" aria-hidden="true"></i> CARTERA</a>
              <div class="dropdown-menu" arial-labelledby="menu-categorias">
                <a href="index1.php" class="dropdown-item">Clientes</a>
                <a href="proveedores.php" class="dropdown-item">Proveedores</a>
              </div>
            </li>
            <li class="nav-item dropdown">

            <a href="#" class="nav-link dropdown-toggle" id="menu-categoriascuentas" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-th-list" aria-hidden="true"></i> CUENTAS</a>
              <div class="dropdown-menu" arial-labelledby="menu-categoriascuentas">
                <a href="#" class="dropdown-item">Cuentas por pagar</a>
                <a href="cuentasporcobrar.php" class="dropdown-item">Cuentas por cobrar</a>
              </div>
            </li>
          </ul>
          <!--<ul class="nav pull-right">
              <button class="btn btn-danger" type="submit">CERRAR SESIÓN</button>
          </ul>-->
          <ul class="nav navbar-nav navbar-right">
           <button class="btn btn-danger cerrar-sesion" type="submit"><span><i class="fa fa-window-close"></span></i>&nbsp;Cerrar Sesión</button>
         </ul>
        </div>
      </nav>



<div class="container-fluid" style="margin-top:20px;">
  <div class="row">
    <div class="col-sm-12">
      <div class="card text-left">
        <div class="card-header">
          Administración de Usuarios
        </div>
        <div class="card-body">
          <span class="btn btn-primary" data-toggle="modal" data-target="#AgregarUsuario">
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

    <!-- Modal para edición de registros -->
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
  </body>
</html>
<script type="text/javascript">
  $(document).ready(function(){
    $('#dataTable').load('php/tabla-admin-usuarios.php')
  });
</script>
<script>
  $('#ModificarUsuarioMod').click(function(){
    actualizaDatosUsuarios();
  });
</script>
