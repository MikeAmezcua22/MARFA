
<div class="modal fade" id="AgregarNuevoXmlCxP" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Subir XML <span class="fa fa-arrow-up"></span></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

                <form method="POST" enctype="multipart/form-data" id="datacxp" class="form-inline">
                <div class="col-12">
                    <input type="file" name="fileXMLcxp[]" id="fileXMLcxp"  onChange="makeFileListcxp();" multiple />
                </div>  
                <div  class="col-12"> 
                  <button type="submit" class="btn btn-secondary btn-sm btn-block">SUBIR XML</button>
                </div>
                </form>
              
                  <strong style="display:none;">Archivos Seleccionados:</strong>
                <ul id="fileListcxp">
                  <li>Ningún Archivo Seleccionado</li>
                </ul>
              <td id="innerExam">
                <!-- Formulario para guardar cfdi -->
                <form method="POST" id="dataCFDIcxpa">  
                  <table border="0" cellspacing="0" cellpadding="5">
                    <tbody id="tablaResultadocxp"></tbody>
                  </table>
                  <br/>
                  <input type="hidden" name="indiceInsertcxp" id="indiceInsertcxp" />
                  <div class="col-12">
                    <button type="submit" style="margin-right: auto;" class="btn btn-primary btn-sm btn-block">GUARDAR</button>
                  </div>
                </form>
        </div>
      </div>
    </div>
  </div>