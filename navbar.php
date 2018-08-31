<!-- 
    Autor: Miguel Angel Amezcua Alcantar
    Descripción: Menú de navegación
-->

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
            <a href="#" class="dropdown-item">Visitar Perfil</a>
            <a href="usuarios.php" class="dropdown-item">Administrar Usuarios</a>
        </div>
        </li>
        <li class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle" id="menu-categorias" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-address-book" aria-hidden="true"></i> CARTERA</a>
        <div class="dropdown-menu" arial-labelledby="menu-categorias">
            <a href="clientes.php" class="dropdown-item">Clientes</a>
            <a href="proveedores.php" class="dropdown-item">Proveedores</a>
        </div>
        </li>
        <li class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle" id="menu-categoriascuentas" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-file-text" aria-hidden="true"></i> CUENTAS</a>
        <div class="dropdown-menu" arial-labelledby="menu-categoriascuentas">
            <a href="cuentasporpagar.php" class="dropdown-item">Cuentas por pagar</a>
            <a href="cuentasporcobrar.php" class="dropdown-item">Cuentas por cobrar</a>
        </div>
        </li>
        <li class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle" id="menu-categoriascuentas" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-file-text" aria-hidden="true"></i> CUENTAS</a>
        <div class="dropdown-menu" arial-labelledby="menu-categoriascuentas">
            <a href="#" class="dropdown-item">Cuentas pagadas</a>
            <a href="cuentascobradas.php" class="dropdown-item">Cuentas cobradas</a>
        </div>
        </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    <button class="btn btn-danger cerrar-sesion" type="submit"><span><i class="fa fa-window-close"></span></i>&nbsp;<a href="cerrarsesion.php">Cerrar Sesión</a></button>
    </ul>
    </div>
    
</nav>
<div class="footer">

    <span><i class="fa fa-user"></i><label id="NombrePila" class="text-white"></label></span>


   
</div>

<script type="text/javascript">
    $( window ).on( "load",function(){
      var Nombre = $('#NombrePila');
      var NombreUsuario = localStorage.getItem("Nombre")
      var ApellidoUsuario = localStorage.getItem("ApellidoPaterno")
      Nombre.text(" "+NombreUsuario+" "+ApellidoUsuario);
    });
</script>