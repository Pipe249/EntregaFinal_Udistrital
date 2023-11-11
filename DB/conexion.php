<?php 
    /* Conexión a base de datos */
    $server = "localhost";
    $user = "root";
    $password = "";
    $db ="sisam";

   $conexion = new mysqli($server, $user, $password, $db);

   if ($conexion->connect_errno) {
    echo "Error de conexión";
    exit();
    } 
?>