
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
          Administración de Proveedores
        </div>
        <div class="card-body">
          <span class="btn btn-primary" data-toggle="modal" data-target="#ModalRegistroProveedor">
            Agregar Nuevo <span class="fa fa-plus-circle">
            </span>
          </span>
          <hr>
        </div>
        <div id="tablaproveedor" class="dataTable" style="overflow-x: scroll;">
          2 days ago
        </div>
      </div>
    </div>
  </div>
</div>

    <!-- Modal para registros nuevos -->
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
      <!-- Modal para edición de registros -->
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


  </body>
</html>
<script type="text/javascript">
  $(document).ready(function(){
    $('#tablaproveedor').load('php/tablaproveedor.php')
  });
</script>
<script>
  $('#modificarproveedor').click(function(){
    actualizaDatosProveedor();
  });
</script>
