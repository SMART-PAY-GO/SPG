<?php
$host = "localhost";
$user = "root";
$clave = "";
$bd = "sis_venta";

// Crear la conexión
$conexion = new mysqli($host, $user, $clave, $bd);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Configurar el conjunto de caracteres
$conexion->set_charset("utf8");

?>
