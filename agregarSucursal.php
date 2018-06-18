<?php
    require "funciones.php";

    $estado = $_POST["Estado"];
    $municipio = $_POST["Mun"];
    $calle = $_POST["Calle"];
    $noExt = $_POST["NoExterior"];
    $colonia = $_POST["Colonia"];
    $cp = $_POST["CP"];
    $nombreAgencia = $_POST["NoAgencia"];
    $NombreGerente = $_POST["idGerente"];
    $num = 232323;

    $conn=conectarBD();
    $conn->query("Insert Into agencia (nombre_agencia, calle, colonia, no_ext, cp, telefono, id_entidad, id_municipio) Values ('".$nombreAgencia."','".$calle."','".$colonia."', '".$noExt."','".$cp."','".$num."','".$estado."','".$municipio."')");
    echo "Insert Into agencia (nombre_agencia, calle, colonia, no_ext, cp, telefono, id_entidad, id_municipio) Values ('".$nombreAgencia."','".$calle."','".$colonia."', '".$noExt."','".$cp."','".$num."','".$estado."','".$municipio."')";
    if ($conn->error)
        die("Error".$conn->error);
    echo("OK");
?>