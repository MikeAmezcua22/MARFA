<!--
    Autor:MAAA
    Descripción: Aquí se muestran las facturas pagadas
-->
<html>
  <head>
    <meta charset="utf-8">
      <?php require_once "scripts.php";  ?>
    <title></title>
  </head>
  <body>
 <!-- Require para MENU--> 
 <?php require_once("navbar.php") ?>
 <!-- Contenedor para cargar las facturas pagadas-->
 <div class="container-fluid" style="margin-top:20px;">
  <div class="row">
    <div class="col-sm-12">
      <div class="card text-left">
        <div class="card-header">
          Facturas Pagadas
        </div>
        <div class="card-body">
          <hr>
        </div>
        <div id="iddatatable" class="dataTable" style="overflow-x: scroll;">
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
<script type="text/javascript">
  $(document).ready(function(){
    $('#iddatatable').load('php/tablacuentascobradas.php')
  });
  </script>