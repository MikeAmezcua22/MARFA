<!--
    Autor:MAAA
    Descripción:Tabla de cuentas cobradas
-->
<?php
    include "conexion.php"
?>
<table class="table table-hover table-condensed" id="iddatatable-cuentaspagadas" class="dataTable">
    <thead class="encabezado-tabla">
      <tr>
        <td>UUID</td>
        <td>Fecha Emisión</td>
        <td>Total de Impuestos Trasladados</td>
        <td>Total</td>
        <td>Nombre del Receptor</td>
        <td>RFC del Receptor</td>
        <td>Nombre del Emisor</td>
        <td>RFC del Emisor</td>
      </tr>
    </thead>
    <tfoot class="pie-Tabla">
      <tr>
        <td>UUID</td>
        <td>Fecha Emisión</td>
        <td>Total de Impuestos Trasladados</td>
        <td>Total</td>
        <td>Nombre del Receptor</td>
        <td>RFC del Receptor</td>
        <td>Nombre del Emisor</td>
        <td>RFC del Emisor</td>
      </tr>
    </tfoot>
    <tbody>
        <?php 
            $sql="SELECT IdFactura, 
                        UUID,
                        FechaEmision,
                        Total_ImpuestosTrasladados,
                        Total,
                        ReceptorNombre,
                        ReceptorRFC,
                        EmisorNombre,
                        EmisorRfc
                        FROM cuentas_por_pagar
                        WHERE BolPagad = 1";
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
                  $ver[8];
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
        </tr>
        <?php 
        }
        ?>
    </tbody>
</table>
<script type="text/javascript">
$(document).ready(function() {
    $('#iddatatable-cuentaspagadas').DataTable();
});
</script>