<?php
  include "conexion.php";
 ?>
<div>
  <table class="table table-hover table-condensed" id="iddatatableAdmin">
    <thead class="encabezado-Tabla">
      <tr>
        <td>Nombre Usuario</td>
        <td>Nombre</td>
        <td>Apellido Paterno</td>
        <td>Apellido Materno</td>
        <td>Password</td>
        <td>Email</td>
        <td>Telefono</td>
        <td>Fecha de Nacimiento</td>
        <td>Tipo de Usuario</td>
        <td>Eliminar</td>
        <td>Editar</td>
      </tr>
    </thead>
    <tfoot class="pie-Tabla">
      <tr>
        <td>Nombre Usuario</td>
        <td>Nombre</td>
        <td>Apellido Paterno</td>
        <td>Apellido Materno</td>
        <td>Password</td>
        <td>Email</td>
        <td>Fecha de Nacimiento</td>
        <td>Tipo de Usuario</td>
        <td>Telefono</td>
        <td>Editar</td>
        <td>Eliminar</td>
      </tr>
    </tfoot>
    <tbody>
      <?php
      $SQL="SELECT IdUsuarios,
                   NombreUsuario,
                   Nombre,
                   ApellidoPaterno,
                   ApellidoMaterno,
                   Password,
                   Email,
                   TelContactoUsuario,
                   FechaNacimiento,
                   IdTipoUsuario
            FROM usuarios";
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
        <td><?php echo $ver[8] ?></td>
        <td><?php echo $ver[9] ?></td>
        <td>
        <button class="btn btn-warning" data-toggle="modal" data-target="#ModalEdicionUsuario"
        onclick="agregaformusuarios('<?php echo $datos ?>')"><i class="fa fa-pencil" aria-hidden="true"></i>
        </button> </td>
        <td><button class="btn btn-danger" onclick="preguntarSiNoUsuario('<?php echo $ver[0] ?>')"><i class="fa fa-times" aria-hidden="true"></i></button></td>
      </tr>
      <?php
        }
       ?>
    </tbody>
  </table>
</div>


<script type="text/javascript">
$(document).ready(function() {
    $('#iddatatableAdmin').DataTable();
});
</script>
