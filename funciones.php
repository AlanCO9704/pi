<?php
    function conectarBD()
    {
        $conn = new mysqli("localhost", "root", "alan12345", "PI_DB_DUMP");
        if($conn->connect_error){
            die("Error al conectarse a la base de datos" . $conn->connect_error);
        }
        return $conn;
    }
?>