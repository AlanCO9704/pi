<?php
    require "funciones.php";

    $id = $_POST["Id"];
    $rechazar = "Rechazado";
  
    $conn=conectarBD();
    $conn->query("UPDATE solicitudes_vehiculos SET status = '".$rechazar."' WHERE id_solicitud = '".$id."'");
    //echo "UPDATE solicitudes_vehiculos SET status = '".$rechazar."' WHERE id_solicitud = '".$id."'";
    if ($conn->error)
        die("Error".$conn->error);
    echo("OK");
?>