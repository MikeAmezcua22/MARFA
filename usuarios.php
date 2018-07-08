<!-- 
  Autor:Miguel Angel Amezcua Alcantar
  Descripción: CRUD de usuarios
-->
<html>
  <head>
    <meta charset="utf-8">
      <?php require_once "scripts.php";  ?>
    <title></title>
  </head>
  <body>
  <!--Requiere Once para obtener MODALES y BARRA PRINCIPAL -->
  <?php require_once('navbar.php')?>
  <?php require_once('/modales/altausuarios.php')?>
  <?php require_once('/modales/modusuarios.php')?>
  <!--****************************************-->
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
  </body>
</html>
<script type="text/javascript">
  $(document).ready(function(){
    $('#dataTable').load('php/tabla-admin-usuarios.php')
  });
  $('#ModificarUsuarioMod').click(function(){
    actualizaDatosUsuarios();
  });
</script>
