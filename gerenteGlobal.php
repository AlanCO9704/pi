<!--El diseño y nombres de los archivos no son un reflejo de del producto final-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!--bootstrapCSS-->
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">

  <!--stylesheets-->
  <link rel="stylesheet" href="./css/navbar-styles.css">
  <link rel="stylesheet" href="./css/Responsive/mediaquery-gerenteG-navbar.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="./css/content-style.css">
  <script type="text/javascript" src="js/main.js"></script>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">


  <title>Gerente global</title>
</head>

<body>

  <div id="wrapper">
    <nav class="navbar navbar-default navbar-dark bg-oscuro shadow-box-standar-small">
      <button id="btn-toggler" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <img id="imglogo" src="assets/img/Nissan_logo.png" style="height: 40px">
      <img id="imglogo2" src="assets/img/Nissan-logo-4B3C580C8A-seeklogo.com.png" style="max-height: 40px">
      <div id="btn-g" class="btn-group btn-group-lg">
        <button id="btnSucursales"  class="btn bg-oscuro sucursales">Gerentes y sucursales</button>
        <button id="btnStockVehiculos"  class="btn bg-oscuro stockVehiculos">Stock de vehículos</button>
        <button id="btnReportes"  class="btn bg-oscuro reportes">Reportes</button>
        <a href="index.php" class="btn bg-danger" class="btn btn-gris disponibilidadGlobal" >Cerrar Sesion</a>
      </div>

    </nav>

    <div class="collapse navbar-collapse" id="sidebarMenu">

      <button class="btn-block navbar-toggler bg-warning" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu"
        aria-expanded="false" aria-label="Toggle navigation">Cerrar menú &#10006;</button>

      <ul class="nav">
        <li>
          <a class="btn boton sucursales">Gerentes y sucursales</a>
        </li>
        <li>
          <a class="btn boton stockVehiculos">Stock de vehículos</a>
        </li>
        <li>
          <a class="btn boton reportes">Reportes</a>
        </li>
        <li>
          <a class="btn boton bg-danger" >Cerrar sesión</a>
        </li>
      </ul>
    </div>
  </div>

  <section id="sectionSucursales" class="container">
    <h3>Gerentes y sucursales</h3>
    <div class="box-space row justify-content-between">
      <!-- Button trigger modal -->
      <div class="col-12 col-md-3">
          <button style="width: 100%" type="button" class="btn btn-secondary-blue" data-toggle="modal" data-target="#modalNuevoGerente">
            Nuevo gerente
          </button>
        </div>
      <div class="col-12 col-md-3">
        <button style="width: 100%" type="button" class="btn btn-success text-white" data-toggle="modal" data-target="#modalNuevaSucursal">
          Nueva sucursal
        </button>
      </div>
      <div class="col-12 col-md-5">
        <form class="">
          <div class="form-row">
            <div style="margin: 0px;" class="col-12 col-md-7">
              <input style="width: 100%" type="search" class="form-control" id="inputSearchNameAgencia" placeholder="Nombre de agencia" aria-describedby="inputGroupPrepend"
                required>
            </div>
            <div style="margin: 0px;" class="col-12 col-md-5">

            </div>
          </div>
        </form>
      </div>
    </div>

    <div id="divSucursal">
      <table class="table">
        <thead class="bg-primary text-white">
          <th>Nombre</th>
          <th>Direccion</th>
          <th>CP</th>
          <th>Telefono</th>
          <th>Ciudad</th>
        </thead>
        <tbody>
          
        </tbody>
      </table>
    </div>

    <script>
       $("#inputSearchNameAgencia").on("input",function(){
		$.post("buscarSucursal.php",{Nombre:$("#inputSearchNameAgencia").val()},function(data,status){
			$("#divSucursal").html(data);
        });
    });
    </script>

    <!-- Modal -->
    <div class="modal fade" id="modalNuevoGerente" tabindex="-1" role="dialog" aria-labelledby="modalNuevoGerenteTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalNuevoGerenteTitle">Da de alta un gerente</h5>
            </div>
            <div class="modal-body">
              <form>
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="">Nombre</label>
                    <input id="inputNombre" type="text" class="form-control" maxlength="23">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col">
                    <label for="">Apellido paterno</label>
                    <input id="inputApellidoP" type="text"  class="form-control" maxlength="15">
                  </div>
                  <div class="form-group col">
                    <label for="">Apellido materno</label>
                    <input id="inputApellidoM" type="text"  class="form-control" maxlength="15">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-7">
                    <label for="">email</label>
                    <input id="inputEmail" type="email"  class="form-control" maxlength="25" placeholder="usuario@host.com">
                  </div>
                  <div class="form-group col">
                    <label for="">Contraseña</label>
                    <input id="inputContra" type="password"  class="form-control" maxlength="16" placeholder="1234PWD">
                  </div>
                </div>
                <hr>
                <div class="row">
                  <button type="button" class="btn btn-secondary offset-md-2 offset-2 col-8 col-md-2" data-dismiss="modal">Close</button>
                  <button type="reset" class="btn btn-primary offset-md-1 offset-2 col-8 col-md-2">Limpiar</button>
                  <button type="submit" id="BtnAgregarGerente" class="btn btn-success offset-md-1 offset-2 col-8 col-md-2">Agregar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    <!-- Modal -->
    <div class="modal fade" id="modalNuevaSucursal" tabindex="-1" role="dialog" aria-labelledby="modalNuevaSucursalTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalNuevaSucursalTitle">Agrega una nueva sucursal</h5>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group row">
                <div class="col-12 col-sm">
                  <label for="inputState">Estado</label>
                  <div id="divEstado">
                    <select id="estadoGlobal" class="form-control">
                      <option value="">Elige un estado</option>
                      <?php include "selectEstadoGlobal.php"; ?>
                    </select>
                  </div>
                </div>
                <div class="col">
                    <label for="selectMunicipioGlobal">Municipio</label>
                    <select name="municipio" id="selectMunicipioGlobal" class="custom-select" required disabled>
                    </select>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-12 col-sm-8">
                  <label>Calle</label>
                  <input type="text" class="form-control" id="idCalle" placeholder="" required>
                </div>
                <div class="col-md-4">
                  <label>No. exterior</label>
                  <input onkeypress="return valida(event)" type="text" class="form-control" id="noInt" placeholder="" maxlength="3"
                    required>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-12 col-sm-7">
                  <label for="exampleInputPassword1">Colonia</label>
                  <input type="text" class="form-control" id="idColonia" placeholder="" required>
                </div>
                <div class="col-md-5">
                  <label for="exampleInputPassword1">Código postal</label>
                  <input onkeypress="return valida(event)" type="text" class="form-control" id="idCP" placeholder="" maxlength="5"
                    required>
                </div>
              </div>
              <hr>
              <div class="form-group row">
                <div class="col">
                  <label for="exampleInputPassword1">Nombre de agencia</label>
                  <input type="text" class="form-control" id="idNoAgencia" placeholder="" required>
                </div>
                <div class="col">
                  <label for="selectGerente">Gerente de agencia</label>
                  <select class="custom-select" name="" id="idGerente">
                    <option value="daniel chacon">daniel chacon</option>
                  </select>
                </div>
              </div>
              <hr>
              <div class="row">
                <button type="button" class="btn btn-secondary offset-md-2 offset-2 col-8 col-md-2" data-dismiss="modal">Close</button>
                <button type="reset" class="btn btn-primary offset-md-1 offset-2 col-8 col-md-2">Limpiar</button>
                <button type="submit" class="btn btn-success offset-md-1 offset-2 col-8 col-md-2" id="BtnAgregarSucursal">Agregar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="sectionStockVehiculos" class="container">
    <h3>Stock de vehiculos</h3>
    <div class="box-space row justify-content-between">
      <!-- Button trigger modal -->
      <div class="col-12 col-md-3">
        <h5 style="text-align: right; margin: 5px;">Stock</h5>
      </div>
      <div class="col-12 col-md-5">
        <select id="selectStockShow" class="custom-select">
          <option selected>Agencia global</option>
          <option>Nissan Rancagua</option>
          <option>Nissan Acrópolis</option>
        </select>
      </div>
      <div class="col-12 col-md-4">
        <button style="width: 100%" type="button" class="btn bg-material-morado text-white" data-toggle="modal" data-target="#modalAsignarVehiculos">
          Asignar Vehiculos
        </button>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table">
        <thead class="bg-primary text-white">
          <th>Visualizar</th>
          <th>Modelo</th>
          <th>Versión</th>
          <th>Año</th>
          <th>Color</th>
          <th>No existencias</th>
        </thead>
        <tbody>
        <?php
                        function GetVendedor($cliente, $mysqli) 
                        {
                        // make the query
                        $query = $mysqli->query("SELECT nombre FROM usuarios WHERE id = '".$cliente."'");
                        $result = $query->fetch_assoc(); // fetch it first
                        return $result["nombre"];
                        }

                        function GetAgenciaDestino($cliente, $mysqli) 
                        {
                        // make the query
                        $query = $mysqli->query("SELECT nombre_agencia FROM agencia WHERE id = '".$cliente."'");
                        $result = $query->fetch_assoc(); // fetch it first
                        return $result["nombre_agencia"];
                        }

                        function GetModelo($cliente, $mysqli) 
                        {
                        // make the query
                        $query = $mysqli->query("SELECT modelo FROM autos WHERE no_serie = '".$cliente."'");
                        $result = $query->fetch_assoc(); // fetch it first
                        return $result["modelo"];
                        }

                        function GetVersion($cliente, $mysqli) 
                        {
                        // make the query
                        $query = $mysqli->query("SELECT id_version FROM autos WHERE no_serie = '".$cliente."'");
                        $result = $query->fetch_assoc(); // fetch it first
                        return $result["id_version"];
                        }

                        function GetAnio($cliente, $mysqli) 
                        {
                        // make the query
                        $query = $mysqli->query("SELECT version FROM versiones WHERE id = '".$cliente."'");
                        $result = $query->fetch_assoc(); // fetch it first
                        return $result["version"];
                        }

                        function GetVer($cliente, $mysqli) 
                        {
                        // make the query
                        $query = $mysqli->query("SELECT anio FROM versiones WHERE id = '".$cliente."'");
                        $result = $query->fetch_assoc(); // fetch it first
                        return $result["anio"];
                        }

                        function GetColor($cliente, $mysqli) 
                        {
                        // make the query
                        $query = $mysqli->query("SELECT color FROM versiones WHERE id = '".$cliente."'");
                        $result = $query->fetch_assoc(); // fetch it first
                        return $result["color"];
                        }

                        function GetStock($cliente, $mysqli) 
                        {
                        // make the query
                        $query = $mysqli->query("SELECT COUNT(modelo) AS total FROM autos WHERE modelo LIKE '".$cliente."%'");
                        $result = $query->fetch_assoc(); // fetch it first
                        return $result["total"];
                        }
        
                        $result = $conn->query("SELECT * FROM autos");
                        if($conn->error){
                            die("error en la consulta " . $conn->error);
                        }
                        while($row = $result->fetch_assoc())
                        { 
                            ?>
                              <tr>
                                  <td>
                                    <button style="border: 0px; background-color: transparent; margin-left: 33%; width: 25%" type="button" data-toggle="modal"
                                      data-target="#modalinfoVehiculo">
                                      <img width="20px" src="./assets/img/iconos/file.svg " alt="open_form">
                                    </button>
                                  </td>
                                  <td>
                                      <?php echo $row["modelo"]?>
                                  </td>

                                  <td>
                                      <?php echo GetAnio($row["id_version"], $conn)?>
                                  </td>

                                  <td>
                                      <?php echo GetVer($row["id_version"], $conn)?>
                                  </td>

                                  <td>
                                      <?php echo $row["color"]?>
                                  </td>

                                  <td>
                                      <?php echo GetStock($row["modelo"], $conn)?>
                                  </td>
                              </tr>
                            
                        <?php }?>
                        </tbody>
                          </table>
    </div>

    <!-- modalinfoVehiculo -->
    <div class="modal fade" id="modalinfoVehiculo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Vehiculo</h5>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group row">
                <div class="col-md">
                  <label for="inputState">Modelo</label>
                  <input type="text" class="form-control" id="inputModelo" name="modeloV" readonly>
                </div>
                <div class="col-md">
                  <label for="inputState">Version</label>
                  <input type="text" class="form-control" id="inputVersion" name="versionV" readonly>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md">
                  <label for="inputState">Año</label>
                  <input type="number" class="form-control" id="inputAno" name="anoV" readonly>
                </div>
                <div class="col-md">
                  <label for="inputState">Color</label>
                  <input type="text" class="form-control" id="inputColor" name="colorV" readonly>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md">
                  <label for="inputState">Tipo de transmision</label>
                  <input type="text" class="form-control" id="inputTransmision" name="transmisionV" readonly>
                </div>
                <div class="col-md">
                  <label for="inputState">Cilindraje</label>
                  <input type="text" class="form-control" id="inputCilindraje" name="cilindrajeV" readonly>
                </div>
                <div class="col-md-3">
                  <label for="inputState">No. bolsas de aire</label>
                  <input type="number" class="form-control" id="inputBA" name="BAV" readonly>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-5">
                  <label for="inputState">Precio</label>
                  <input type="number" class="form-control" id="inputPrecio" name="precioV" readonly>
                </div>
              </div>
              <hr>
              <div class="row">
                <button type="button" class="btn btn-secondary offset-md-5 col-md-2" data-dismiss="modal">Close</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- modalAsignaStock -->
    <div class="modal fade" id="modalAsignarVehiculos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Asignar vehiculos a agencia</h5>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <div class="col-12 col-sm-5">
                  <label for="selectVehiculo">Vehículo</label>
                  <select id="selectVehiculo" class="selectpicker" data-live-search="true" required>
                    <option value="" selected disabled hidden>Elige un vehiculo</option>
                    <?php include "selectMenuModelo.php";?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-12 col-sm-5">
                  <label for="selectAgenciaStock">Agencia destino</label>
                  <select class="custom-select" name="" id="selectAgenciaStock" required>
                    <option value="" selected disabled hidden>Selecciona una agencia</option>
                      <?php include "selectMenuAgenciaGlobal.php";?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-12 col-sm-3">
                  <label for="inputNoV">No. vehiculos</label>
                  <input id="inputNoV" class="form-control" onkeypress="return valida(event)" maxlength="3" type="text" value="1" required>
                </div>
              </div>
              <hr>
              <div class="row">
                <button type="button" class="btn btn-secondary offset-md-2 offset-2 col-8 col-md-2" data-dismiss="modal">Close</button>
                <button type="reset" class="btn btn-primary offset-md-1 offset-2 col-8 col-md-2">Limpiar</button>
                <button type="submit" class="btn btn-success offset-md-1 offset-2 col-8 col-md-2">Asignar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="sectionReportes" class="container">
    <h3>Reportes</h3>
    <div class=" bg-dark box-space">
      <!-- Button trigger modal -->
      <button class="btn bg-material-azul text-white" data-toggle="modal" data-target="#modalReportesGlobales">Consultar y generar</button>
    </div>

    <!-- Modal modalReportesGlobales -->
    <div class="modal fade" id="modalReportesGlobales" tabindex="-1" role="dialog" aria-labelledby="modalNuevoStockTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Reportes globales</h5>
          </div>
          <div class="modal-body">
            <form action="">
              <div class="form-group">
                <div class="form-row">
                  <div class="col">
                    <label for="inputFechaDes">Desde</label>
                    <input id="inputFechaDes" type="date" class="form-control" required>
                  </div>
                  <div class="col">
                    <label for="inputFechaDes">Hasta</label>
                    <input id="inputFechaDes" type="date" class="form-control" required>
                  </div>
                </div>
                <hr>
                <div class="form-row">
                  <div class="col">
                    <label for="">Ventas por</label>
                    <select class="custom-select" name="" id="" required>
                      <option value="modelo">Estado</option>
                      <option value="vendedor">Agencia</option>
                      <option value="vendedor">Modelo</option>
                      <option value="vendedor">Vendedores</option>
                    </select>
                  </div>
                  <div class="col">
                    <label for="inputNoResult">Limitar no. de resultados a</label>
                    <input id="inputNoResult" class="form-control" type="text" style="width: 30%" maxlength="3" value="0" required>
                    <label class="text-muted" for="">El valor 0 indica sin limite en resultados
                    </label>
                  </div>
                </div>
                <hr>
                <div class="row justify-content-center">
                  <div class="col-8 col-sm-4 col-md-3">
                    <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Close</button>
                  </div>
                  <div class="col-8 col-sm-4 col-md-3">
                    <button type="reset" class="btn btn-primary btn-block">Limpiar</button>
                  </div>
                  <div class="col-8 col-sm-4 col-md-3">
                    <button type="reset" class="btn btn-dark btn-block">generar PDF</button>
                  </div>
                  <div class="col-8 col-sm-4 col-md-3">
                    <button type="submit" class="btn btn-success btn-block">Filtrar</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--Bootstrap-dropselect-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="./bootstrap/js/bootstrap.min.js"></script>

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

  <script src="./js/gerenteGlobal.js"></script>
</body>

</html>