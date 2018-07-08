<!--
  Autor: MAAA
  Descripción: CRUD para proveedores
-->
<html>
  <head>
    <meta charset="utf-8">
      <?php require_once "scripts.php";  ?>
    <title></title>
  </head>
  <body>
  <!-- Requiere Once MENU, AGREGAR y MODIFICAR Proveedores-->
  <?php require_once("navbar.php")?>
  <?php require_once("/modales/altaproveedores.php")?>
  <?php require_once("/modales/modproveedores.php")?>
  <!--**********************************************************-->
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
