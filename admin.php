<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <?php require_once "scripts.php";  ?>
    <title></title>
  </head>
  <body>
    <!--  <div class="container">
        <div class="row">
          <div class="col-12">
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
          </div>
        </div>
      </div>-->

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
