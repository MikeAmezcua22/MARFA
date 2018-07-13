<?php
  include "conexion.php";
?>
<!-- <div class="row">-->
<!--  <div class="col-sm-12">
    <h2>PROVEEDOR</h2>
    <button class="btn btn-primary" data-toggle="modal" data-target="#ModalRegistroProveedor">Agregar nuevo
      <span><i class="fa fa-plus" aria-hidden="true"></i></span>
    </button> -->

    <table class="table table-hover table-condensed" id="iddatatable-proveedores">
      <thead class="encabezado-Tabla">
        <tr>
          <td>Rfc Cliente</td>
          <td>Razón social</td>
          <td>Estado del cliente</td>
          <td>Dias crédito</td>
          <td>Saldo cliente</td>
          <td>Telefono Contacto</td>
          <td>Calle</td>
          <td>No</td>
          <td>Colonia</td>
          <td>Código Postal</td>
          <td>Ciudad</td>
          <td>Editar</td>
          <td>Eliminar</td>
        </tr>
      </thead>
      <tfoot class="pie-Tabla">
        <tr>
          <td>Rfc Cliente</td>
          <td>Razón social</td>
          <td>Estado del cliente</td>
          <td>Dias crédito</td>
          <td>Saldo cliente</td>
          <td>Telefono Contacto</td>
          <td>Calle</td>
          <td>No</td>
          <td>Colonia</td>
          <td>Código Postal</td>
          <td>Ciudad</td>
          <td>Editar</td>
          <td>Eliminar</td>
        </tr>
      </tfoot>
      <tbody>
      <?php
        $sql="SELECT  IdProveedor,
                      RfcProveedor,
                      RazonSocial,
                      EstadoProveedor,
                      DiasCredito,
                      SaldoProveedor,
                      TelefonoContacto,
                      Calle,
                      Numero,
                      Colonia,
                      CodPostal,
                      Ciudad
                      FROM proveedores";
          $result=mysql_query($sql);
  		    while($ver=mysql_fetch_row($result)){
            $datos=$ver[0]."||".
                   $ver[1]."||".
                   $ver[2]."||".
                   $ver[3]."||".
                   $ver[4]."||".
                   $ver[5]."||".
                   $ver[6]."||".
                   $ver[7]."||".
                   $ver[8]."||".
                   $ver[9]."||".
                   $ver[10]."||".
                   $ver[11];
            ?>
            <tr>
              <td><?php echo $ver[1] ?></td>
              <td><?php echo $ver[2] ?></td>
              <td><?php echo $ver[3] ?></td>
              <td><?php echo $ver[4] ?></td>
              <td><?php echo $ver[5] ?></td>
              <td><?php echo $ver[6] ?></td>
              <td><?php echo $ver[7] ?></td>
              <td><?php echo $ver[8] ?></td>
              <td><?php echo $ver[9] ?></td>
              <td><?php echo $ver[10] ?></td>
              <td><?php echo $ver[11] ?></td>
              <td>
              <button class="btn btn-warning" data-toggle="modal" data-target="#ModalEdicionProveedor"
              onclick="agregaformproveedor('<?php echo $datos ?>')"><i class="fa fa-pencil" aria-hidden="true"></i>
              </button> </td>
              <td><button class="btn btn-danger" onclick="preguntarSiNoProveedor('<?php echo $ver[0] ?>')"><i class="fa fa-times" aria-hidden="true"></i></button></td>
            </tr>
          <?php
          }
          ?>
        </tbody>
    </table>
<script type="text/javascript">
$(document).ready(function() {
    $('#iddatatable-proveedores').DataTable();
});
</script>
