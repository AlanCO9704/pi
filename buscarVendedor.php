<?php
    require "funciones.php";

    $conn=conectarBD();
    $result = $conn->query("SELECT * FROM usuarios WHERE nombre LIKE '".$_POST["Nombre"]."%'");
    //echo "SELECT * FROM usuarios WHERE nombre LIKE '".$_POST["Nombre"]."'";
    if($conn->error) 
        die("Error. " .$conn->error);
?>

<table class="table table-bordered">
                <thead class="bg-primary text-white">
                    <th>Nombre</th>
                    <th>email</th>
                </thead>
                <tbody>
                                <?php
                        while($row = $result->fetch_assoc())
                        { 
                            ?>
                            <tr>
                                <td>
                                    <?php echo $row["nombre"]?>
                                </td>
                                <td>
                                    <?php echo $row["email"]?>
                                </td>
                            </tr>
                        <?php }?>
                </tbody>
            </table>

