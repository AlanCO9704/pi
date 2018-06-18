<?php
    require "funciones.php";

    $id = $_POST["Id"];
    $aceptar = "Aceptar";
  
    $conn=conectarBD();
    $conn->query("UPDATE solicitudes_vehiculos SET status = '".$aceptar."' WHERE id_solicitud = '".$id."'");
    //echo "UPDATE solicitudes_vehiculos SET status = '".$aceptar."' WHERE id_solicitud = '".$id."'";
    if ($conn->error)
        die("Error".$conn->error);
    echo("OK");
?>