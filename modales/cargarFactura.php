
<div class="modal fade" id="AgregarNuevoXml" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Subir XML <span class="fa fa-arrow-up"></span></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
                <form method="post" enctype="multipart/form-data" id="data" class="form-inline">
                <div class="col-12">
                    <input type="file" name="fileXML[]" id="fileXML"  onChange="makeFileList();" multiple>
                </div>  
                <div  class="col-12">
                  <button type="submit" class="btn btn-secondary btn-sm btn-block">SUBIR XML</button>
                </div>
                </form>
              
                  <strong style="display:none;">Archivos Seleccionados:</strong>
                <ul id="fileList">
                  <li>Ningún Archivo Seleccionado</li>
                </ul>
              <td id="innerExam">
                <!-- Formulario para guardar cfdi -->
                <form method="POST" id="dataCFDI">  
                  <table border="0" cellspacing="0" cellpadding="5">
                    <tbody id="tablaResultado"></tbody>
                  </table>
                  <br/>
                  <input type="hidden" name="indiceInsert" id="indiceInsert" />
                  <div class="col-12">
                    <button type="submit" style="margin-right: auto;" class="btn btn-primary btn-sm btn-block">GUARDAR</button>
                  </div>
                </form>
        </div>
      </div>
    </div>
  </div>