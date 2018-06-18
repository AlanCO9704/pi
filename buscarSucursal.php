<?php
    require "funciones.php";

    $conn=conectarBD();
    $result = $conn->query("SELECT * FROM agencia WHERE nombre_agencia LIKE '".$_POST["Nombre"]."%'");
    //echo "SELECT * FROM usuarios WHERE nombre LIKE '".$_POST["Nombre"]."'";
    if($conn->error) 
        die("Error. " .$conn->error);

        function getCiudad($cliente, $mysqli) 
        {
        // make the query
        $query = $mysqli->query("SELECT nom_mun FROM municipio WHERE cve_mun = '".$cliente."'");
        $result = $query->fetch_assoc(); // fetch it first
        return $result["nom_mun"];
        }
?>
<div class="table-responsive">
        <table class="table">
          <thead class="bg-primary text-white">
            <th>Nombre</th>
            <th>Direccion</th>
            <th>CP</th>
            <th>Telefono</th>
            <th>Ciudad</th>
            </thead>
            <tbody>
            <?php
    while($row = $result->fetch_assoc())
    { 
        ?>
        <tr>
        <td>
            <?php echo utf8_encode($row["nombre_agencia"])?>
        </td>
        <td>
            <?php echo utf8_encode($row["calle"]) . " " . utf8_encode($row["colonia"]) . " " . utf8_encode($row["no_ext"])?>
        </td>
        <td>
            <?php echo utf8_encode($row["cp"])?>
        </td>
        <td>
            <?php echo utf8_encode($row["telefono"])?>
        </td>
        <td>
            <?php echo utf8_encode(getCiudad($row["id_municipio"], $conn))?>
        </td>
        </tr>
    <?php }?>
            </tbody>
        </table>
    </div>