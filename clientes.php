<!-- 
  Autor: MAAA
  Descripción: CRUD Clientes
-->
<html>

  <head>
    <meta charset="utf-8">
      <?php require_once "scripts.php";  ?>
    <title></title>
  </head>
  <body>
  
  <!--Requiere once para llamar MENU, ALTA CLIENTES, MODIFICACION DE CLIENES-->
  <?php require_once("navbar.php")?>
  <?php require_once("/modales/altaclientes.php")?>
  <?php require_once("/modales/altaclientes.php")?>
  <?php require_once("/modales/modclientes.php")?>
  
  <!--***********************************************************************-->

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
