<?php

    $host = 'localhost';
    $usuario = 'root';
    $clave = '';
    $bd ='mi_proyecto';

    $conexion = new mysqli($host, $usuario, $clave, $bd);

    if ($conexion->connect_errno) {
        echo "fallas en conexion";
        exit();
    }


?>