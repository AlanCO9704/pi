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
    <script type="text/javascript"src="js/main.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.6/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    <!--stylesheets-->
    <link rel="stylesheet" href="./css/navbar-styles.css">
    <link rel="stylesheet" href="./css/Responsive/mediaquery-gerenteA-navbar.css">
    <link rel="stylesheet" href="./css/content-style.css">

    <title>Gerente de agencia</title>
</head>

<body>

    <div id="wrapper">
        <nav class="navbar navbar-default navbar-dark bg-material-azul-dark shadow-box-standar-small">
            <button id="btn-toggler" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <img id="imglogo" src="assets/img/Nissan_logo_light.png" style="height: 40px">
            <img id="imglogo2" src="assets/img/Nissan-logo-4B3C580C8A-seeklogo.com.png" style="max-height: 40px">
            <div id="btn-g" class="btn-group btn-group-lg">
                <button class="btn bg-material-azul-dark vendedores">Vendedores</button>
                <button class="btn bg-material-azul-dark solRealizadas">Solicitudes realizadas</button>
                <button class="btn bg-material-azul-dark solExternas">Solicitudes externas</button>
                <button class="btn bg-material-azul-dark reportes">Reportes</button>
                <a href="index.php" class="btn bg-danger" class="btn btn-gris disponibilidadGlobal" >Cerrar Sesion</a>
            </div>

        </nav>

        <div class="collapse navbar-collapse" id="sidebarMenu">

            <button class="btn-block navbar-toggler bg-warning" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu"
                aria-expanded="false" aria-label="Toggle navigation">Cerrar menú &#10006;</button>

            <ul class="nav">
                <li>
                    <a class="btn boton vendedores" href="#">Vendedores</a>
                </li>
                <li>
                    <a class="btn boton solRealizadas" href="#">Solicitudes realizadas</a>
                </li>
                <li>
                    <a class="btn boton solExternas" href="#">Solicitudes externas</a>
                </li>
                <li>
                    <a class="btn boton reportes" href="#">Reportes</a>
                </li>
                <li>
                    <a class="btn boton bg-danger text-white" href="#">Cerrar sesión</a>
                </li>
            </ul>
        </div>
    </div>

    <section id="sectionVendedores" class="container">
        <h3>Vendedores</h3>
        <div class="box-space row justify-content-between">
            <!-- Button trigger modal -->
            <div class="col-12 col-md-3">
                <button style="width: 100%" type="button" class="btn btn-secondary-blue" data-toggle="modal" data-target="#modalNuevoVendedor">
                    Nuevo Vendedor
                </button>
            </div>
            <div class="col-12 col-md-5">
                <form class="">
                    <div class="form-row">
                        <div style="margin: 0px;" class="col-12 col-md-7">
                            <input style="width: 100%" type="search" class="form-control" id="inputSearchName" placeholder="Nombre de vendedor" aria-describedby="inputGroupPrepend" required>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div id="DivMain">
            <table class="table table-bordered">
                <thead class="bg-primary text-white">
                    <th>Nombre</th>
                    <th>email</th>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="modalNuevoVendedor" tabindex="-1" role="dialog" aria-labelledby="modalNuevoVendedorTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalNuevoVendedorTitle">Da de alta un vendedor</h5>
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
                                    <input id="inputApellidoP" type="text" class="form-control" maxlength="15">
                                </div>
                                <div class="form-group col">
                                    <label for="">Apellido materno</label>
                                    <input id="inputApellidoM" type="text" class="form-control" maxlength="15">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-7">
                                    <label for="">email</label>
                                    <input id="inputEmail" type="email" class="form-control" maxlength="25" placeholder="usuario@host.com">
                                </div>
                                <div class="form-group col">
                                    <label for="">Contraseña</label>
                                    <input id="inputContra" type="password" class="form-control" maxlength="16" placeholder="1234PWD">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <button type="button" class="btn btn-secondary offset-md-2 offset-2 col-8 col-md-2" data-dismiss="modal">Close</button>
                                <button type="reset" class="btn btn-primary offset-md-1 offset-2 col-8 col-md-2">Limpiar</button>
                                <button type="submit" id="BtnAddVendedor"class="btn btn-success offset-md-1 offset-2 col-8 col-md-2">Agregar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section id="sectionSolRealizadas" class="container">
        <h3>Solicitudes realizadas</h3>
        <div class="row">
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
                        $query = $mysqli->query("SELECT color FROM autos WHERE no_serie = '".$cliente."'");
                        $result = $query->fetch_assoc(); // fetch it first
                        return $result["color"];
                        }
        
                        require "funciones.php";
                        $conn = conectarBD();
                        $cliente = "";
                        $result = $conn->query("SELECT * from solicitudes_vehiculos where status LIKE 'pro%'");
                        if($conn->error){
                            die("error en la consulta " . $conn->error);
                        }
                        while($row = $result->fetch_assoc())
                        { 
                            ?>
                                        <div class="col-12 col-sm-6 col-md-4">
                                            <div class="card">
                                                <img class="card-img-top" src="./assets/img/vehiculos/nismo/nismo1.jpg" alt="Card image cap">
                                                <div class="card-body">
                                                    <h3 class="card-title"><?php echo GetModelo($row["id_vehiculo_requerido"], $conn)?> <?php echo GetAnio(GetVersion($row["id_vehiculo_requerido"], $conn),$conn)?> <?php echo GetVer(GetVersion($row["id_vehiculo_requerido"], $conn),$conn)?> <?php echo GetColor($row["id_vehiculo_requerido"], $conn)?></h3>
                                                    <form class="card-text">
                                                        <label for="inputVendedor">Solicitud realizada por:</label>
                                                        <input id="inputVendedor" class="form-control" type="text" value=<?php echo GetVendedor($row["id_usuario"], $conn)?> disabled>
                                                        <input type="hidden" id="idVehiculo" value=<?php echo $row["id_solicitud"]?> >
                                                        <label for="inputAgencia">Agencia destino:</label>
                                                        <input id="inputAgencia" class="form-control" type="text" value=<?php echo GetAgenciaDestino($row["id_agencia_destino"], $conn)?> disabled>
                                                        <div style="margin-top: 10px;" class="row justify-content-center">
                                                            <input class="btn btn-danger" type="submit" value="Rechazar" onclick="Rechazar(<?php echo $row["id_solicitud"]?>)">
                                                            <input class="btn btn-primary" style="margin-left: 5px; margin-right:5px" type="submit" value="Aceptar" id="BtnAceptarCarro" onclick="Aceptar(<?php echo $row["id_solicitud"]?>)">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                        <?php }?>
        </div>
    </section>

    <section id="sectionSolExternas" class="container">
        <h3>Solicitudes externas</h3>
        <div class="row">
        <?php
        $result = $conn->query("SELECT * from solicitudes_vehiculos where status LIKE 'pro%'");
        if($conn->error){
            die("error en la consulta " . $conn->error);
        }
        while($row = $result->fetch_assoc())
                        { 
                            ?>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="./assets/img/vehiculos/nismo/nismo1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo GetModelo($row["id_vehiculo_requerido"], $conn)?> <?php echo GetAnio(GetVersion($row["id_vehiculo_requerido"], $conn),$conn)?> <?php echo GetVer(GetVersion($row["id_vehiculo_requerido"], $conn),$conn)?> <?php echo GetColor($row["id_vehiculo_requerido"], $conn)?></h5>
                            <form class="card-text">
                                <label for="inputVendedor">Solicitud realizada por:</label>
                                <input id="inputVendedor" class="form-control" type="text" value=<?php echo GetVendedor($row["id_usuario"], $conn)?> disabled>
                                <label for="inputAgencia">Agencia remitente:</label>
                                <input id="inputAgencia" class="form-control" type="text" value=<?php echo GetAgenciaDestino($row["id_agencia_solicitante"], $conn)?> disabled>
                                <div style="margin-top: 10px;" class="row justify-content-center">
                                    <input class="btn btn-danger" type="submit" value="Rechazar" onclick="Rechazar(<?php echo $row["id_solicitud"]?>)">
                                    <input class="btn btn-primary" style="margin-left: 5px; margin-right:5px" type="submit" value="Aceptar" onclick="Aceptar(<?php echo $row["id_solicitud"]?>)">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
    </section>

    <section id="sectionReportes" class="container">
        <h3>Reportes</h3>
        <div class=" bg-dark box-space">
            <!-- Button trigger modal -->
            <button class="btn bg-material-azul text-white" data-toggle="modal" data-target="#modalReportesLocal">Consultar</button>
        </div>
        <div class="table-responsive">
            <table class="table">
            <thead class="bg-primary text-white">
                    <th>Fecha</th>
                    <th>Id_Cliente</th>
                </thead>
                <tbody>
                    <?php
                        $result = $conn->query("select fecha, id_cliente from ventas");
                        if($conn->error){
                            die("error en la consulta " . $conn->error);
                        }
                        while($row = $result->fetch_assoc())
                        { 
                            ?>
                            <tr>
                            <td>
                                <?php echo $row["fecha"]?>
                            </td>
                            <td>
                                <?php echo $row["id_cliente"]?>
                            </td>

                            </tr>
                        <?php }?>
                </tbody>
            </table>
        </div>
        <!--ModalReportesLocales-->
        <div class="modal fade" id="modalReportesLocal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="">Consultar reportes</h5>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-row">
                                <div class="col">
                                    <label for="inputFechaDes" value="2017-06-18">Desde</label>
                                    <input id="datepicker" width="276" />
                                </div>
                                <div class="col">
                                    <label for="inputFechaDes" value="2017-06-18">Hasta</label>
                                    <input id="datepicker1" width="276" />
                                </div>
                            </div>
                            <hr>
                            <div class="form-row">
                                <div class="col">
                                    <label for="">Ventas por</label>
                                    <select class="custom-select" name="" id="" required>
                                        <option value="modelo">Modelo</option>
                                        <option value="vendedor">vendedor</option>
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
                                    <button type="submit" class="btn btn-success btn-block">Filtrar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="./js/gerenteAgencia.js"></script>

</body>

</html>