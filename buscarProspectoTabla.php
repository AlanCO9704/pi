<?php
    require "funciones.php";

    $conn=conectarBD();
    $result = $conn->query("SELECT * FROM prospectos WHERE nombre LIKE '".$_POST["Nombre"]."%'");
    //echo "SELECT * FROM usuarios WHERE nombre LIKE '".$_POST["Nombre"]."'";
    if($conn->error) 
        die("Error. " .$conn->error);
?>
<div class="table-responsive">
    <table class="table">
            <thead class="bg-primary text-white">
                <th>Nombre</th>
                <th>Email</th>
                <th>Celular</th>
            </thead>
            <tbody>
            <?php
    while($row = $result->fetch_assoc())
    { 
        ?>
        <tr>
        <td>
            <?php echo utf8_encode($row["nombre"]) . " " . utf8_encode($row["apellido_p"]) . " " . utf8_encode($row["apellido_m"]) ?>
        </td>
        <td>
            <?php echo utf8_encode($row["email"]) ?>
        </td>
        <td>
            <?php echo utf8_encode($row["celular"])?>
        </td>
        </tr>
    <?php }?>
            </tbody>
        </table>
    </div>