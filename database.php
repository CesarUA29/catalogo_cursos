<?php
$conexion = new mysqli("localhost", "root", "", "catalogo_cursos");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>