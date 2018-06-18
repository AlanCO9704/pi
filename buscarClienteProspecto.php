<?php
    require "funciones.php";

    $conn=conectarBD();
    $result = $conn->query("SELECT * FROM clientes WHERE nombre LIKE '".$_POST["Nombre"]."%'");
    //echo "SELECT * FROM usuarios WHERE nombre LIKE '".$_POST["Nombre"]."'";
    if($conn->error) 
        die("Error. " .$conn->error);
?>
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
            <?php
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
            </tbody>
        </table>
    </div>