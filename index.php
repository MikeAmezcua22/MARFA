<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <?php require_once "scripts.php";  ?>
    <title></title>
  </head>
  <body id="index">
    <div class="alert alert-warning fade show col-sm-12" role="alert" style="display: none;" id="err">
        <strong>Datos de ingreso no validos</strong> intentelo de nuevo por favor
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <div class="container">
      <div class="row">
          <div class="col-5 text-center centrar-contenido">
            <div class="card vertical-alineacion">
              <div class="card-header">
                <span class="text-lg-center align-middle">Mantenimiento Reparaciones y Fabricaciones<br> S.A de C.V.</span>
              </div>
              <div class="card-body">
                <form id="formlg">
                  <img src="img/LoginSesion.png" class="img-fluid logo">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">
                        <i class="fa fa-user" aria-hidden="true"></i>
                      </span>
                    </div>
                    <input  type="text"
                            name="username"
                            aria-label="Username"
                            aria-describedby="basic-addon1"
                            class="form-control"
                            placeholder="Nombre de Usuario">
                  </div>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
                    </div>
                    <input  type="password"
                            name="password"
                            placeholder="Contraseña"
                            aria-describedby="basic-addon1"
                            class="form-control">
                  </div>
                  <button type="submit"
                        name="submit"
                        class="btn btn-primary  btn-block">
                        INICIAR SESI&Oacute;N
                  </button>
              </form>
              </div>
            </div>
          </div>
      </div>
    </div>
    <script src="js/main.js"></script>
  </body>
</html>
