<?php
    require "funciones.php";

    $cliente = $_POST["Cliente"];
    $asunto = $_POST["Asunto"];
    $fecha = $_POST["Fecha"];
    $idAgencia = 1;
    $idUsuario = 1;

    $conn=conectarBD();
    $conn->query("Insert Into citas (fecha_cita, asunto, id_agencia, id_usuario, id_cliente) VALUES ('".$fecha."','".$asunto."','".$idAgencia."','".$idUsuario."','".$cliente."')");
    //echo "Insert Into citas (fecha_cita, asunto, id_agencia, id_usuario, id_cliente) VALUES ('".$fecha."','".$asunto."','".$idAgencia."', '".$idUsuario."', '".$cliente."')";
    if ($conn->error)
        die("Error".$conn->error);
    echo("OK");
?>