
<html>
  <head>
    <meta charset="utf-8">
      <?php require_once "scripts.php";  ?>
    <title></title>
  </head>
  <body>
<!--<div class="container">
    <div class="col>">
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
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
        </div>
      </nav>
<br>
<br>
<br>
<br>-->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a href="admin.php" class="navbar-brand"><img src="img/LoginSesion.png" width="60" height="60"></a>
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
    <!--<ul class="nav pull-right">
        <button class="btn btn-danger" type="submit">CERRAR SESIÓN</button>
    </ul>-->
    <!--<ul class="nav navbar-nav navbar-right">
     <button class="btn btn-danger cerrar-sesion" type="submit"><span><i class="fa fa-window-close"></span></i>&nbsp;Cerrar Sesión</button>
   </ul>
  </div>
</nav>
<div class="row">
  <div class="col">
    <div class="container">
      <div id="tabla"></div>
    </div>
  </div>
</div>-->

<div class="container-fluid" style="margin-top:20px;">
  <div class="row">
    <div class="col-sm-12">
      <div class="card text-left">
        <div class="card-header">
          Administración de Clientes
        </div>
        <div class="card-body">
          <span class="btn btn-primary" data-toggle="modal" data-target="#ModalRegistro">
            Agregar Nuevo <span class="fa fa-plus-circle">
            </span>
          </span>
          <hr>
        </div>
        <div id="tabla" class="dataTable" style="overflow-x: scroll;">
          2 days ago
        </div>
      </div>
    </div>
  </div>
</div>



    <!-- Modal para registros nuevos -->
      <div class="modal fade" id="ModalRegistro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                      <div class="col-4">
                            <label>Dias Crédito</label>
                            <input type="text" name="EstadoCliente" value="" id="EstadoCliente" class="form-control input-sm">
                      </div>
                      <div class="col-4">
                            <label>Estado del Cliente</label>
                            <input type="text" name="DiasCredito" value="" id="DiasCredito" class="form-control input-sm">
                      </div>
                      <div class="col-4">
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
                        <button class="btn btn-primary mt-2 mr-2" type="submit" name="addCliente"id="guardarnuevo">Agregar</button>
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
              <button class="btn btn-warning mt-2 mr-2" type="submit" name="ModCliente"  id="modificarcliente" >Modificar </button>
            </div>

            </Form>
          </div>
      </div>
    </div>
  </div>
</div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>
<script type="text/javascript">
  $(document).ready(function(){
    $('#tabla').load('php/tabla.php')
  });
</script>
<script>
  $('#modificarcliente').click(function(){
    actualizaDatos();
  });
</script>
