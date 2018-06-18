<!--El diseño y nombres de los archivos no son un reflejo de del producto final-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="./bootstrap/js/bootstrap.min.js"></script>

  <!--stylesheets-->
  <link rel="stylesheet" href="./css/navbar-styles.css">
  <link rel="stylesheet" href="./css/Responsive/mediaquery-vendedor-navbar.css">
  <link rel="stylesheet" href="./css/content-style.css">
  <link rel="stylesheet" href="./css/vendedor-css/content-vendedor.css">
  <script type="text/javascript"src="js/main.js"></script>

  <!-- Bootstrap-select -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">

  <title>Vendedor</title>
</head>

<body>
<input type="hidden" value="1" id="id_usuario">


  <div id="wrapper">
    <nav class="navbar navbar-default navbar-dark bg-gris shadow-box-standar-small">
      <button id="btn-toggler" class="navbar-toggler bg-oscuro" type="button" data-toggle="collapse" data-target="#sidebarMenu"
        aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <img id="imglogo" src="assets/img/Nissan_logo.png" style="height: 40px">
      <img id="imglogo2" src="assets/img/Nissan-logo-4B3C580C8A-seeklogo.com.png" style="max-height: 40px">
      <div id="btn-g" class="btn-group btn-group-lg">
        <button class="btn btn-gris citas">Citas</button>
        <button class="btn btn-gris clientes">Clientes y prospectos</button>
        <button class="btn btn-gris transacciones">Vehiculos y transacciones</button>
        <button class="btn btn-gris disponibilidadGlobal">Disponibilidad global</button>
        <a href="index.php" class="btn bg-danger" class="btn btn-gris disponibilidadGlobal" >Cerrar Sesion</a>
</div>
    </nav>

    <div class="collapse navbar-collapse" id="sidebarMenu">

      <button class="btn-block navbar-toggler bg-warning" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu"
        aria-expanded="false" aria-label="Toggle navigation">Cerrar menú &#10006;</button>

      <ul class="nav">
        <li>
          <a class="btn boton citas" href="#">Citas</a>
        </li>
        <li>
          <a class="btn boton clientes" href="#">Clientes y prospectos</a>
        </li>
        <li>
          <a class="btn boton transacciones" href="#">Vehiculos y transacciones</a>
        </li>
        <li>
          <a class="btn boton disponibilidadGlobal" href="#">Disponibilidad global</a>
        </li>
        <li>
          <a class="btn boton bg-danger" href="#">Cerrar sesión</a>
        </li>
      </ul>
    </div>
  </div>

  <section id="sectionCitas" class="container">
    <h3>Citas</h3>
    <div class="bg-dark box-space row justify-content-between">
      <!-- Button trigger modal -->
      <div class="col-12 col-sm-4 col-md-3">
        <button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#modalCitas">
          Agendar una cita
        </button>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table">
        <thead class="bg-primary text-white">
          <th>Fecha</th>
          <th>Cliente</th>
          <th>Asunto</th>
        </thead>
        <tbody>
          <?php include "generarTablasCitas.php"; ?>
        </tbody>
      </table>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="modalCitas" tabindex="-1" role="dialog" aria-labelledby="titleModalCitas" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="titleModalCitas">Agenda una cita</h5>
          </div>
          <div class="modal-body">
            <form id="formCitas">
              <div class="form-group">
                <select id="cliProspSelected" class="custom-select">
                  <?php include "selectMenuCitasCliente.php"; ?>
                </select>
              </div>
              <div class="form-group">
                <label for="inputAsuntoCita">Asunto</label>
                <textarea type="text" class="form-control" id="inputAsuntoCita" required></textarea>
              </div>
              <div class="form-group">
                <label for="inputFechaCita">Fecha</label>
                <input type="date" class="form-control" id="inputFechaCita" required>
              </div>
              <div class="form-group row">
                <div class="col">
                  <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Close</button>
                </div>
                <div class="col">
                  <button class="btn btn-primary btn-block">Limpiar</button>
                </div>
                <div class="col">
                  <button type="submit" id="btnAdd" class="btn btn-success btn-block">Agregar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="sectionClientes" class="container">
    <h3>Agregar Clientes/Prospectos</h3>
    <div class="bg-dark box-space row justify-content-between">
      <!-- Button trigger modal -->
      <div class="col-12 col-md-8">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalCliProsp">
          Agregar nuevo
        </button>
      </div>
      <div class="col-12 col-md-8">
        <form style="float: right; margin: 0px; padding: 0px;" class="form-inline">
          <div class="form-group">
          </div>
        </form>
      </div>
    </div>

    <br><br>
    <span><h3>Tabla clientes</h3></span>
    <div class="bg-dark box-space row justify-content-between">
      <!-- Button trigger modal -->
      <div class="col-12 col-md-3">
        <form style="float: right; margin: 0px; padding: 0px;" class="form-inline">
          <div class="form-group">
            <input id="inputSearchNameCliente" class="form-control" type="search" placeholder="Nombre Del Cliente" required>
          </div>
        </form>
      </div>
    </div>
  
    <div id="DivCliente">
      <div class="table-responsive">
        <table class="table">
          <thead class="bg-primary text-white">
              <th>RFC</th>
              <th>Nombre</th>
              <th>Email</th>
              <th>Celular</th>
              <th>Direccion</th>
              <th>Código postal</th>
            </thead>
            <tbody>
              
            </tbody>
        </table>
      </div>
    </div>

    <script>
       $("#inputSearchNameCliente").on("input",function(){
		$.post("buscarClienteProspecto.php",{Nombre:$("#inputSearchNameCliente").val()},function(data,status){
			$("#DivCliente").html(data);
        });
    });
    </script>

    <br><br>
    <span><h3>Tabla Prospectos</h3></span>
    <div class="bg-dark box-space row justify-content-between">
      <!-- Button trigger modal -->
      <div class="col-12 col-md-3">
        <form style="float: right; margin: 0px; padding: 0px;" class="form-inline">
          <div class="form-group">
            <input id="inputSearchNameProspecto" class="form-control" type="search" placeholder="Nombre Del Prospecto" required>
          </div>
        </form>
      </div>
    </div>
  
    <div id="DivProspecto">
      <div class="table-responsive">
        <table class="table">
          <thead class="bg-primary text-white">
              <th>RFC</th>
              <th>Nombre</th>
              <th>Email</th>
              <th>Celular</th>
            </thead>
            <tbody>
              
            </tbody>
        </table>
      </div>
    </div>

    <script>
       $("#inputSearchNameProspecto").on("input",function(){
		$.post("buscarProspectoTabla.php",{Nombre:$("#inputSearchNameProspecto").val()},function(data,status){
			$("#DivProspecto").html(data);
        });
    });
    </script>


    <!-- Modal -->
    <div class="modal fade" id="modalCliProsp" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Agrega un cliente/prospecto</h5>
          </div>
          <div class="modal-body">
            <form id="formClientPros">
              <label class="text-muted">Campos con
                <label class="text-danger">*</label> son obligatorios</label>
              <div class="form-group row justify-content-center">
                <label class="col-6" for="">Agregar un nuevo...</label>
                <select class="custom-select col-7" name="tipo_cliente" id="selectNewCli_Pro">
                  <option value="cliente">cliente</option>
                  <option value="prospecto">prospecto</option>
                </select>
              </div>
              <hr>
              <div class="form-group">
                <label for="inputNombre">
                  <label class="text-danger">*</label>Nombre</label>
                <input type="text" class="form-control" id="inputNombre" maxlength="25" required>
              </div>
              <div class="form-group row">
                <div class="col">
                  <label for="inputApellidoP">
                    <label class="text-danger">*</label>Apellido paterno</label>
                  <input type="text" class="form-control" id="inputApellidoP" maxlength="15" required>
                </div>
                <div class="col">
                  <label for="inputApellidoM">
                    <label class="text-danger">*</label>Apellido materno</label>
                  <input type="text" class="form-control" id="inputApellidoM" maxlength="15" required>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-5">
                  <label for="inputCel">
                    <label class="text-danger">*</label>Celular</label>
                  <input onkeypress="return valida(event)" type="tel" class="form-control" id="inputCel" maxlength="10" required>
                </div>
                <div class="col-7">
                  <label for="inputEmail">
                    <label class="text-danger">*</label>Correo electrónico</label>
                  <input type="email" class="form-control" id="inputEmail" maxlength="25">
                </div>
              </div>

              <div id="divDireccion">
                <hr>
                <div class="form-group">
                  <label class="text-muted" for="">Direccion</label>
                </div>
                <div class="form-group row">
                  <div class="col">
                    <label for="selectEstado">Estado</label>
                    <div id="divEstado">
                      <select name="estado" id="selectEstado" class="custom-select" required>
                          <option value="">Elige un estado</option>
                          <?php include "selectMenuClienteEstados.php"; ?>
                      </select>
                    </div>
                  </div>
                  <div class="col">
                    <label for="selectMunicipio">Municipio</label>
                    <select name="municipio" id="selectMunicipio" class="custom-select" required disabled>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col">
                    <label for="">
                      <label class="text-danger">*</label>Calle</label>
                    <input type="text" class="form-control" id="inputCalle" maxlength="25" required>
                  </div>
                  <div class="col">
                    <label for="">
                      <label class="text-danger">*</label>Colonia</label>
                    <input type="text" class="form-control" id="inputCol" maxlength="15" required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col">
                    <label for="">
                      <label class="text-danger">*</label>No. exterior</label>
                    <input onkeypress="return valida(event)" type="text" class="form-control" id="inputNoExt" maxlength="6" required>
                  </div>
                  <div class="col">
                    <label for="">
                      <label class="text-danger">*</label>CP</label>
                    <input onkeypress="return valida(event)" type="text" class="form-control" id="inputCP" maxlength="5" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputRFC">
                    <label class="text-danger">*</label>RFC</label>
                  <input type="text" class="form-control" id="inputRFC" maxlength="13" required>
                </div>
                <hr>
              </div>
              <div class="form-group row">
                <div class="col">
                  <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Close</button>
                </div>
                <div class="col">
                  <button id="clBtn-client" class="btn btn-primary btn-block">Limpiar</button>
                </div>
                <div class="col">
                  <button type="submit" id="BtnAddCliente" class="btn btn-success btn-block">Agregar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="sectionTransacciones" class="container">
    <h3>Vehiculos y transacciones</h3>
    <div class=" bg-dark box-space">
      <!-- Button trigger modal -->
      <div class="">
        <form id="formMenuTransacciones">
          <div class="row" style="margin: auto">
            <!--El select "categoria" funciona para filtrar vehiculos que pertenezcan a la categoría-->
            <div class="col-sm-12 col-md">
              <select id="slcCategoria" name="modelo" class="custom-select block">
                <option selected disabled>Categoría</option>
                <option>Autos</option>
                <option>Crosovers y suvs</option>
                <option>Pick-ups</option>
                <option>Comerciales</option>
                <option>Hibridos y electricos</option>
                <option>Nismo</option>
              </select>
            </div>
            <!--En el select modelo, se podra realizar una busqueda directa en el select, para que sea mas facil encontrar el modelo,
            apartir de este elemento los demas select cargaran informacion con base al modelo seleccionado-->
            <div class="col-sm-12 col-md">
              <select id="slcModelo" name="modelo" class="selectpicker" data-live-search="true">
                <option selected hidden disabled value="Modelo">Modelo</option>
                <option data-tokens="xtrail2">X-trail</option>
                <option data-tokens="tsuru">tsuru</option>
                <option data-tokens="kicks">kicks</option>
              </select>
            </div>
            <!--Muestra los distintos años que coincidan con el modelo previamente seleccionado-->
            <div class="col-sm-12 col-md">
              <select id="slcAnio" name="anio" class="custom-select">
                <option selected hidden disabled>Año</option>
                <option>2017</option>
                <option>2018</option>
                <option>2019</option>
              </select>
            </div>
            <!--Muestra versiones que puede tener un modelo y/o año previamente seleccionado-->
            <div class="col-sm-12 col-md">
              <select id="slcVersion" name="version" class="custom-select">
                <option selected hidden disabled>Versión</option>
                <option>exclusive 2 rows version</option>
                <option>standar 2 rows version</option>
              </select>
            </div>
            <!--Muestra colores que puede tener un modelo y/o version previamente seleccionado-->
            <div class="col-sm-12 col-md">
              <select id="slcColor" name="color" class="custom-select">
                <option selected hidden disabled>Color</option>
                <option>green</option>
                <option>red</option>
                <option>white</option>
              </select>
            </div>
            <div class="col-sm-12 col-md-2">
              <input id="buscarVehiculos" type="submit" class="btn bg-material-morado btn-block text-white" value="Buscar">
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="row bg-grey">

      <div class="col-sm-12 col-sm-6 col-md-4">
        <div class="bg-material-azul shadow-box-standar text-white">
          <div style="margin-top: 15px;">
            <div class="textTile">
              <input name="id" type="hidden" value="id_auto" readonly>
              <!--Este input es solo de consulta o control y no debe ser mostrado-->
              <input name="vehiculo" class="standar text-center in-no-decoration" type="text" value="X-trail 2018 exclusive 2 rows white" readonly>
              <input type="text" class="text-center content-in in-no-decoration" value="En existencias: 5" readonly>
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-12 col-sm-6 col-md-11">
                    <input type="button" class="btn btn-block centered-t bg-material-blue-gray" data-toggle="modal" data-target="#modalInfoVehicle"
                      value="Transacciones">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="cuadro"></div>
      </div>

    </div>

    <div class="modal fade" id="modalInfoVehicle" tabindex="-1" role="dialog" aria-labelledby="Vehicle information" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">modelo
              <br>Existencias: 5</h5>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img class="img-modal" src="./assets/img/vehiculos/nismo/nismo1.jpg">
          </div>
          <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a id="tab-trans" class="bg-material-deep-orange nav-item nav-link col text-white  active" data-toggle="tab" href="#div-TabTrans"
                role="tab" aria-controls="nav-profile" aria-selected="true">Transacciones</a>

              <a id="tab-info" class="nav-item nav-link col text-white" data-toggle="tab" href="#div-tabInfo" role="tab" aria-controls="div-tabInfo"
                aria-selected="false">Información técnica</a>
            </div>
          </nav>
          <div class="tab-content" id="nav-tabContent">

            <!--apartado de transacciones-->
            <div id="div-TabTrans" class="tab-pane divpane fade show active" role="tabpanel" aria-labelledby="div-TabTrans-tab">
              <div class="container">
                <form>
                  <div class="form-group">
                  </div>
                  <div class="form-group">
                    <label>Selecciona cliente</label>
                    <select class="custom-select">
                      <option>Eduardo Santana Sánchez</option>
                      <option>Pedro Santana Montroi</option>
                      <option>Cecilia Mendoza Castro</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Selecciona el tipo de transacción</label>
                    <select class="custom-select">
                      <option>Venta</option>
                      <option>Apartado</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <table class=" bg-grey-tab table table-stripped table-bordered">
                      <tbody>
                        <tr>
                          <th scope="row">Precio</th>
                          <td>$400,000.00</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="form-group row justify-content-center">
                    <div class="col-9 col-sm-5 col-md-3">
                      <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Close</button>
                    </div>
                    <div class="col-9 col-sm-5 col-md-4">
                      <input id="btnRealizarTransaccion" class="btn btn-success btn-block" type="submit" value="Realizar transacción">
                    </div>
                  </div>
                </form>
              </div>
            </div>

            <!--Apartado de informacion técnica-->
            <div id="div-tabInfo" class="tab-pane divpane fade" role="tabpanel" aria-labelledby="div-tabInfo-tab">
              <table class=" table table-hover">
                <tbody>
                  <tr>
                    <th scope="row">Modelo</th>
                    <td>{modelo}</td>
                  </tr>
                  <tr scope="row">
                    <th scope="row">Modelo</th>
                    <td>{modelo}</td>
                  </tr>
                  <tr scope="row">
                    <th scope="row">Modelo</th>
                    <td>{modelo}</td>
                  </tr>
                  <tr scope="row">
                    <th scope="row">Modelo</th>
                    <td>{modelo}</td>
                  </tr>
                </tbody>
              </table>
              <div class="form-group row justify-content-center">
                <div class="col-9 col-sm-5 col-md-3">
                  <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

  </section>

  <section id="sectionDisponibilidadGlobal" class="container">
    <h3>Disponibilidad global</h3>
    <div class=" bg-dark box-space">
      <div class="">
        <form id="formDisponibilidadGlobal">
          <div class="row" style="margin: auto">
            <!--El select "categoria" funciona para filtrar vehiculos que pertenezcan a la categoría-->
            <div class="col-sm-12 col-md">
              <select id="slcCategoriaExt" name="modelo" class="custom-select block">
                <option selected disabled>Categoría</option>
                <option>Autos</option>
                <option>Crosovers y suvs</option>
                <option>Pick-ups</option>
                <option>Comerciales</option>
                <option>Hibridos y electricos</option>
                <option>Nismo</option>
              </select>
            </div>
            <!--En el select modelo, se podra realizar una busqueda directa en el select, para que sea mas facil encontrar el modelo,
            apartir de este elemento los demas select cargaran informacion con base al modelo seleccionado-->
            <div class="col-sm-12 col-md">
              <select id="slcModeloExt" name="modelo" class="selectpicker" data-live-search="true">
                <option selected hidden disabled value="Modelo">Modelo</option>
                <option data-tokens="xtrail2">xtrail</option>
                <option data-tokens="tsuru">tsuru</option>
                <option data-tokens="kicks">kicks</option>
              </select>
            </div>
            <!--Muestra los distintos años que coincidan con el modelo previamente seleccionado-->
            <div class="col-sm-12 col-md">
              <select id="slcAnioExt" name="anio" class="custom-select">
                <option selected hidden disabled>Año</option>
                <option>2017</option>
                <option>2018</option>
                <option>2019</option>
              </select>
            </div>
            <!--Muestra versiones que puede tener un modelo y/o año previamente seleccionado-->
            <div class="col-sm-12 col-md">
              <select id="slcVersionExt" name="version" class="custom-select">
                <option selected hidden disabled>Versión</option>
                <option>Version1</option>
                <option>Version1</option>
                <option>Version1</option>
              </select>
            </div>
            <!--Muestra colores que puede tener un modelo y/o version previamente seleccionado-->
            <div class="col-sm-12 col-md">
              <select id="slcColorExt" name="color" class="custom-select">
                <option selected hidden disabled>Color</option>
                <option>color1</option>
                <option>colo2</option>
                <option>colo3</option>
              </select>
            </div>
            <div class="col-sm-12 col-md-2">
              <input id="verificarVehiculos" type="submit" class="btn bg-material-morado text-white btn-block" value="Verificar">
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="row bg-grey">

      <div class="col-sm-12 col-sm-6 col-md-4">
        <div class="bg-material-yellow shadow-box-standar text-white">
          <div style="margin-top: 15px;">
            <div class="textTile">
              <form action="solicitarExt.php">
                <input name="id" type="hidden" value="id_auto" readonly>
                <!--Este input es solo de consulta o control y no debe ser mostrado-->
                <input name="vehiculo" class="text-center in-no-decoration" type="text" value="modelo + año + version + color" readonly>
                <input name="existencias" type="text" class="text-center content-in in-no-decoration text-dark" value="En existencias: 5"
                  readonly>
                <input name="agencia_ext" id="agenciaext" type="text" class="text-center content-in in-no-decoration text-dark" value="Nissan Rancagua"
                  readonly>
                <div class="container">
                  <div class="row justify-content-center">
                    <div class="col-12 col-sm-6 col-md-11">
                      <input type="submit" class="btn btn-block centered-t bg-material-cyan" value="Solicitar">
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-sm-6 col-md-4">
        <div class="bg-material-yellow shadow-box-standar text-white">
          <div style="margin-top: 15px;">
            <div class="textTile">
              <form action="solicitarExt.php">
                <input name="id" type="hidden" value="id_auto" readonly>
                <!--Este input es solo de consulta o control y no debe ser mostrado-->
                <input name="vehiculo" class="text-center in-no-decoration" type="text" value="modelo + año + version + color" readonly>
                <input name="existencias" type="text" class="text-center content-in in-no-decoration text-dark" value="En existencias: 5"
                  readonly>
                <input name="agencia_ext" id="agenciaext" type="text" class="text-center content-in in-no-decoration text-dark" value="Nissan Rancagua"
                  readonly>
                <div class="container">
                  <div class="row justify-content-center">
                    <div class="col-12 col-sm-6 col-md-11">
                      <input type="submit" class="btn btn-block centered-t bg-material-cyan" value="Solicitar">
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-sm-6 col-md-4">
        <div class="bg-material-yellow shadow-box-standar text-white">
          <div style="margin-top: 15px;">
            <div class="textTile">
              <form action="solicitarExt.php">
                <input name="id" type="hidden" value="id_auto" readonly>
                <!--Este input es solo de consulta o control y no debe ser mostrado-->
                <input name="vehiculo" class="text-center in-no-decoration" type="text" value="modelo + año + version + color" readonly>
                <input name="existencias" type="text" class="text-center content-in in-no-decoration text-dark" value="En existencias: 5"
                  readonly>
                <input name="agencia_ext" id="agenciaext" type="text" class="text-center content-in in-no-decoration text-dark" value="Nissan Rancagua"
                  readonly>
                <div class="container">
                  <div class="row justify-content-center">
                    <div class="col-12 col-sm-6 col-md-11">
                      <input type="submit" class="btn btn-block centered-t bg-material-cyan" value="Solicitar">
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-sm-6 col-md-4">
        <div class="bg-material-yellow shadow-box-standar text-white">
          <div style="margin-top: 15px;">
            <div class="textTile">
              <form action="solicitarExt.php">
                <input name="id" type="hidden" value="id_auto" readonly>
                <!--Este input es solo de consulta o control y no debe ser mostrado-->
                <input name="vehiculo" class="text-center in-no-decoration" type="text" value="modelo + año + version + color" readonly>
                <input name="existencias" type="text" class="text-center content-in in-no-decoration text-dark" value="En existencias: 5"
                  readonly>
                <input name="agencia_ext" id="agenciaext" type="text" class="text-center content-in in-no-decoration text-dark" value="Nissan Rancagua"
                  readonly>
                <div class="container">
                  <div class="row justify-content-center">
                    <div class="col-12 col-sm-6 col-md-11">
                      <input type="submit" class="btn btn-block centered-t bg-material-cyan" value="Solicitar">
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>


  <!-- Latest compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
  <script src="./js/vendedor.js"></script>

</body>

</html>