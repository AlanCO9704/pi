<?php
    function GetVar($cliente, $mysqli) 
    {
    // make the query
    $query = $mysqli->query("SELECT nombre FROM clientes WHERE id = '".$cliente."'");
    $result = $query->fetch_assoc(); // fetch it first
    return $result["nombre"];
    }
    require "funciones.php";
    $conn = conectarBD();
    $cliente = "";
    $result = $conn->query("select fecha_cita, asunto, id_cliente from citas");
    if($conn->error){
        die("error en la consulta " . $conn->error);
    }
    while($row = $result->fetch_assoc())
    { 
        ?>
        <tr>
        <td>
            <?php echo $row["fecha_cita"]?>
        </td>
        <td>
            <?php echo GetVar($row["id_cliente"], $conn)?>
        </td>
        <td>
            <?php echo utf8_encode($row["asunto"])?>
        </td>
        </tr>
    <?php }?>