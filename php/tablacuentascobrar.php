<?php
  include "conexion.php";

 ?>
<div>
      <!-- Incio de modal para abonos -->

      <?php require_once("../modales/abonarCuentasPC.php")?> 

  <table class="table table-hover table-condensed" id="iddatatable" class="dataTable">
    <thead class="encabezado-tabla">
      <tr>
        <td>UUID</td>
        <td>Fecha Emisión</td>
        <td>Dias Crédito</td>
        <td>Total</td>
        <td>Nombre del Emisor</td>
        <td>RFC del Emisor</td>
        <td>Total de Impuestos Trasladados</td>
        <td>Abonos</td>
        <td>Fecha Vencimiento</td>
        <td>Abonar</td>
        <td>Eliminar</td>
      </tr>
    </thead>
    <tfoot class="pie-Tabla">
      <tr>
        <td>UUID</td>
        <td>Fecha Emisión</td>
        <td>Dias Crédito</td>
        <td>Total</td>
        <td>Nombre del Emisor</td>
        <td>RFC del Emisor</td>
        <td>Total de Impuestos Trasladados</td>
        <td>Abonos</td>
        <td>Fecha Vencimiento</td>
        <td>Abonar</td>
        <td>Eliminar</span></td>
      </tr>
    </tfoot>
    <tbody>
      <?php
      $SQL="SELECT 	cpc.IdFactura,
                    cpc.UUID,
                    cpc.FechaEmision,
                    cpc.DiasCredito,
                    cpc.Total,
                    cpc.EmisorNombre,
                    cpc.EmisorRfc,
                    cpc.Total_ImpuestosTrasladados,
                    cpc.FechaVencimiento,
                    (
                      SELECT  SUM(raf.abono) FROM relabonofactura raf WHERE raf.idFactura = cpc.IdFactura
                    ) AS abonado
            FROM cuentas_por_cobrar cpc";

            $result=mysql_query($SQL);
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
                     $ver[9];
       ?>
      <tr>
        <td><?php echo $ver[1] ?></td>
        <td><?php echo $ver[2] ?></td>
        <td><?php echo $ver[3] ?></td>
        <td><?php echo $ver[4] ?></td>
        <td><?php echo utf8_encode($ver[5]) ?></td>
        <td><?php echo $ver[6] ?></td>
        <td><?php echo $ver[7] ?></td>
        <td><?php echo $ver[9] ?></td>
        <td
          <?php

            $hoy = date('m/d/Y g:ia');
            $datetime1 = new DateTime($hoy);
            $datetime2 = new DateTime($ver[8]);
            $interval = $datetime1->diff($datetime2);
            $diasDiferencia = $interval->format('%a');


            if($ver[8] == '0000-00-00'){
              echo "style='background-color: #FFEB3B; color: black;'";
            }
            else if($diasDiferencia < 10){
              echo "style='background-color: #dc3545; color: black;'";
            }
            else if($diasDiferencia > 10 && $diasDiferencia < 20){
              echo "style='background-color: blue; color: black;'";
            }
            else if($diasDiferencia > 20){
              echo "style='background-color: green; color: black;'";
            }else{
              echo "style='background-color: #dc3545; color: black;'";
            }

          ?>
        >
          <?php

            $hoy = date('m/d/Y g:ia');
            $datetime1 = new DateTime($hoy);
            $datetime2 = new DateTime($ver[8]);
            $interval = $datetime1->diff($datetime2);
            $diasDiferencia = $interval->format('%a');

            $date  = date_create($ver[8]);
            $fecha = date_format($date, 'd/m/Y');
            echo $ver[8] != '0000-00-00' ? $fecha : "Sin fecha";
          ?>
        </td>
        <td>
          <button class="btn btn-primary" onclick="abonarCuenta(<?php echo $ver[0] ?>,<?php echo "'".$ver[1]."'" ?>,<?php echo "'".$ver[4]."'" ?>)">
            <i class="fa fa-money" aria-hidden="true"></i>
          </button>
        </td>
        <td>
          <button class="btn btn-danger" onclick="preguntarSiNoFactura('<?php echo $ver[0] ?>')">
            <i class="fa fa-times" aria-hidden="true"></i>
          </button>
        </td>
      </tr>
      <?php
        }
       ?>
    </tbody>
  </table>
</div>


<script type="text/javascript">

$(document).ready(function() {
    $('#iddatatable').DataTable();
});
</script>
