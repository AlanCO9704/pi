<?php
    require "funciones.php";

    $nombre = $_POST["Nombre"];
    $apellidoP = $_POST["ApellidoP"];
    $apellidoM = $_POST["ApellidoM"];
    $email = $_POST["Email"];
    $contra = $_POST["Contra"];
    $idAgencia = 1;
    $idPuesto = 1;

    $conn=conectarBD();
    $conn->query("Insert Into usuarios (nombre, apellido_p, apellido_m, email, contrasenia, id_agencia, id_puesto) Values ('".$nombre."','".$apellidoP."','".$apellidoM."','".$email."','".$contra."','".$idAgencia."','".$idPuesto."')");
    //echo "Insert Into usuarios (nombre, apellido_p, apellido_m, email, contrasenia, id_agencia, id_puesto) Values ('".$nombre."','".$apellidoP."','".$apellidoM."','".$email."','".$contra."','".$idAgencia."','".$idPuesto."')";
    if ($conn->error)
        die("Error".$conn->error);
    echo("OK");
?>