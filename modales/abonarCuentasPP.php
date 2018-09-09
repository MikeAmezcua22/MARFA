
<!-- Modal -->
<div class="modal fade" id="myModalPP" role="dialog">
<div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
    <div class="modal-header">
        <label> Abonar para factura(uuid):</label>
        <label id="numeroFacturaPP" style="font-weight: bold;"></label>
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
        <form role="form" id="formAbonoPP">
        <div class="form-group">
        <div class="col-12"><input  id="idFacturaPP" name="idFacturaPP" ></div>
            <input  id="TotaldeFacAbonoPP" name ="TotaldeFacAbonoPP" >
            <input  id="AbonoMomentoPP" name ="AbonoMomentoPP" >
            <label>Cantidad Total: </label><label id="cantidadTotalPP" style="font-weight: bold;"></label></br>
            <label><span class="glyphicon glyphicon-user"></span>Abono cantidad: </label>
            <input type="number"
            class="form-control" id="abonoEnviarPP" name="abonoEnviarPP" placeholder="$" required="true">
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