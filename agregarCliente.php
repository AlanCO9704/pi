<?php
    
    $nombre = $_POST["Nombre"];
    $apellidoP = $_POST["ApellidoP"];
    $apellidoM = $_POST["ApellidoM"];
    $cel = $_POST["Cel"];
    $email = $_POST["Email"];
    $estado = $_POST["Estado"];
    $municipio = $_POST["Municipio"];
    $calle = $_POST["Calle"];
    $colonia = $_POST["Colonia"];
    $noExt = $_POST["NoExt"];
    $cp = $_POST["cp"];
    $rfc = $_POST["rfc"];
    $id = $_POST["Id_usuario"];
    $id_numeric = (int)$id;

    require "funciones.php";
    $conn=conectarBD();
    $conn->query("Insert Into clientes (RFC, nombre, apellido_p, apellido_m, calle, colonia, no_ext, cp, email, celular, id_entidad, id_municipio, id_usuario) VALUES ('".$rfc."','".$nombre."','".$apellidoP."','".$apellidoM."','".$calle."','".$colonia."','".$noExt."','".$cp."','".$email."','".$cel."','".$estado."','".$municipio."',".$id_numeric.")");
    if ($conn->error)
        die("Error".$conn->error);
    echo("OK");
?>