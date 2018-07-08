
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
<div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
    <div class="modal-header">
        <label> Abonar para factura(uuid):</label>
        <label id="numeroFactura" style="font-weight: bold;"></label>
    </div>
    <div class="modal-body">
        <!-- Alert -->
        <div  class="alert alert-danger"
            role="alert"
            style="display: none;"
            id="alertErrorAbono" >
        Error
        </div>
        <!-- ***** -->
        <form role="form" id="formAbono">
        <div class="form-group">
            <input  value="" id="idFactura" name="idFactura">
            <input  value="" id="TotaldeFacAbono" name ="TotaldeFacAbono">
            <label>Cantidad Total: </label><label id="cantidadTotal" style="font-weight: bold;"></label></br>
            <label><span class="glyphicon glyphicon-user"></span>Abono cantidad: </label>
            <input type="number"
                class="form-control" id="abonoEnviar" name="abonoEnviar" placeholder="$" required="true">
        </div>
        <button type="submit" class="btn btn-default btn-success btn-block">
            <span class="glyphicon glyphicon-off"></span>
            Enviar abono
        </button>
        </form>
    </div>
    </div>
</div>
</div>