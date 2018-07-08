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
          <table cellspacing="0" cellpadding="4">
            <tr>
              <td>
                <label><b>* Solo se permiten archivos de tipo .XML</b></label>
              </td>
            </tr>
            <tr>
              <td>
                <form method="post" enctype="multipart/form-data" id="data" class="form-inline">
                  <input type="file" name="fileXML[]" id="fileXML"  onChange="makeFileList();" multiple>
                  <button type="submit" class="btn btn-primary">SUBIR XML</button>
                </form>
                <p>
                  <strong>Files You Selected:</strong>
                </p>

                <ul id="fileList">
                  <li>No Files Selected</li>
                </ul>
              </td>
            </tr>
            <tr>
              <td id="innerExam">
                <form method="POST" id="dataCFDI">
                  <table cellspacing="0" cellpadding="5">
                    <tbody id="tablaResultado"></tbody>
                  </table>
                  <br/>
                  <input type="hidden" name="indiceInsert" id="indiceInsert" />
                  <button type="submit" style="margin-right: auto;" class="btn btn-primary">GUARDAR</button>
                </form>
              </td>
            </tr>
          <table>
        </div>
      </div>
    </div>
  </div>