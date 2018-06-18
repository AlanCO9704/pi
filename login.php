<?php
    require "funciones.php";

    $email = $_POST["Email"];
    $contra = $_POST["Contra"];

    $conn=conectarBD();
    $result = $conn->query("SELECT email, contrasenia, id_puesto FROM usuarios WHERE email = '".$email."'");
    echo "SELECT email, contrasenia FROM usuarios WHERE email = '".$email."'";
    if($conn->error) 
        die("Error. " .$conn->error);

    while($row = $result->fetch_assoc())
    {
        if (($row["email"] === $email) && ($row["contrasenia"] === $contra) && ($row["id_puesto"] === "1"))
        {
            session_start();
            $_SESSION['email'] = $email;
            include "vendedor.php";
        }
        elseif(($row["email"] === $email) && ($row["contrasenia"] === $contra) && ($row["id_puesto"] === "2"))
        {
            session_start();
            $_SESSION['email'] = $email;
            header("Location: gerenteAgencia.php");
        }
        elseif(($row["email"] === $email) && ($row["contrasenia"] === $contra) && ($row["id_puesto"] === "3"))
        {
            session_start();
            $_SESSION['email'] = $email;
            header("Location: gerenteGlobal.php");
        }
        else
        {
            header("Location: index.php");
            exit();
        }
    }
?>
        