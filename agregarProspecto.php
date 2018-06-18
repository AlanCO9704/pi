<?php
    
    $nombre = $_POST["Nombre"];
    $apellidoP = $_POST["ApellidoP"];
    $apellidoM = $_POST["ApellidoM"];
    $cel = $_POST["Cel"];
    $email = $_POST["Email"];
    $id = $_POST["Id_usuario"];
    $id_numeric = (int)$id;

    require "funciones.php";
    $conn=conectarBD();
    $conn->query("INSERT INTO prospectos (nombre, apellido_p, apellido_m, email, celular, id_usuario) VALUES ('".$nombre."','".$apellidoP."','".$apellidoM."','".$email."','".$cel."',".$id_numeric.")");
    //echo "INSERT INTO prospectos (nombre, apellido_p, apellido_m, email, celular, id_usuario) VALUES ('".$nombre."','".$apellidoP."','".$apellidoM."','".$email."','".$cel."',".$id_numeric.")";
    if ($conn->error)
        die("Error".$conn->error);
    echo("OK");
?>