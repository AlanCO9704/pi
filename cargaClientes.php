<?php
    $id_usuario = 1;
    $result = $conn->query("SELECT * FROM clientes WHERE id_usuario = " .$id_usuario);
    if($conn->error){
        die("error en la consulta " . $conn->error);
    }
    while($row = $result->fetch_assoc())
    { 
        ?>
        <tr>
        <td>
            <?php echo utf8_encode($row["RFC"])?>
        </td>
        <td>
            <?php echo utf8_encode($row["nombre"]) . " " . utf8_encode($row["apellido_p"]) . " " . utf8_encode($row["apellido_m"]) ?>
        </td>
        <td>
            <?php echo utf8_encode($row["email"]) ?>
        </td>
        <td>
            <?php echo utf8_encode($row["celular"])?>
        </td>
        <td>
            <?php echo utf8_encode($row["calle"] . " " . utf8_encode($row["colonia"]) . " #" . utf8_encode($row["no_ext"])) ?>
        </td>
        <td>
            <?php echo $row["cp"] ?>
        </td>
        </tr>
    <?php }?>