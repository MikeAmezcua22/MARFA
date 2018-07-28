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
        
        <td>Total de Impuestos Trasladados</td>
        <td>Total</td>
        <td>Nombre del Emisor</td>
        <td>RFC del Emisor</td>
        <td>Nombre del Receptor</td>
        <td>RFC del Receptor</td>
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
       
        <td>Total de Impuestos Trasladados</td>
        <td>Total</td>
        <td>Nombre del Emisor</td>
        <td>RFC del Emisor</td>
        <td>Nombre del Receptor</td>
        <td>RFC del Receptor</td>
        <td>Abonos</td>
        <td>Fecha Vencimiento</td>
        <td>Abonar</td>
        <td>Eliminar</td>
      </tr>
    </tfoot>
    <tbody>
      <?php
      $SQL="SELECT 	cpc.IdFactura,
                    cpc.UUID,
                    cpc.FechaEmision,
                    cpc.Total_ImpuestosTrasladados,
                    cpc.Total,
                    cpc.EmisorNombre,
                    cpc.EmisorRfc,
                    cpc.ReceptorNombre,
                    cpc.ReceptorRFC,
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
                     $ver[9]."||".
                     $ver[10];
       ?>
      <tr>
        <td style="font-weight:bold;"><?php echo $ver[1] ?></td>
        <td><?php echo $ver[2] ?></td>
        <td><?php echo $ver[3] ?></td>
        <td style="font-weight:bold;text-align:right"><?php echo $ver[4] ?></td>
        <td style="font-weight:bold;text-align:right"><?php echo $ver[5] ?></td>
        <td><?php echo $ver[6] ?></td>
        <td style="font-weight:bold;"><?php echo $ver[7] ?></td>
        <td><?php echo $ver[8] ?></td>
        <td style="font-weight:bold;text-align:right"><?php echo $ver[10]?></td>
        <td 
          <?php

            $hoy = date('m/d/Y g:ia');
            $datetime1 = new DateTime($hoy);
            $datetime2 = new DateTime($ver[9]);
            $interval = $datetime1->diff($datetime2);
            $diasDiferencia = $interval->format('%a');


            if($ver[9] == '0000-00-00'){
              echo "style='background-color: #FFEB3B; color: black;font-weight:bold;text-align:center'";
            }
            else if($diasDiferencia < 10){
              echo "style='background-color: #dc3545; color: black;font-weight:bold;text-align:center'";
            }
            else if($diasDiferencia > 10 && $diasDiferencia < 20){
              echo "style='background-color: #6bc17b; color: black;font-weight:bold;text-align:center'";
            }
            else if($diasDiferencia > 20){
              echo "style='background-color: #6bc17b; color: black;font-weight:bold;text-align:center'";
            }else{
              echo "style='background-color: #dc3545; color: black;font-weight:bold;text-align:center'";
            }

          ?>
        
          <?php

            $hoy = date('m/d/Y g:ia');
            $datetime1 = new DateTime($hoy);
            $datetime2 = new DateTime($ver[9]);
            $interval = $datetime1->diff($datetime2);
            $diasDiferencia = $interval->format('%a');
            $date  = date_create($ver[9]);
            $fecha = date_format($date, 'd/m/Y');
            echo $ver[10] != '0000-00-00' ? $fecha : "Sin fecha";
          ?>
        </td>
        <td align="center">
          <button class="btn btn-primary" onclick="abonarCuenta(<?php echo $ver[0] ?>,<?php echo "'".$ver[1]."'" ?>,<?php echo "'".$ver[3]."'" ?>,<?php echo "'".$ver[10]."'" ?>)">
          <i class="fa fa-usd" aria-hidden="true"></i>
          </button>
        </td>
        <td align="center">
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
