<?php
    require "funciones.php";

    $fecha1 = $_POST["Oculto"];

    echo "imprime esto '".$fecha1."'";

    $conn=conectarBD();
    $conn->query("");
    if ($conn->error)
        die("Error".$conn->error);
    echo("OK");
?>