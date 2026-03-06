<?php
include("database.php");

// Obtener cursos
function obtenerCursos() {
    global $conexion;
    $resultado = $conexion->query("SELECT * FROM cursos");
    return $resultado;
}

// Insertar curso
function insertarCurso($datos) {
    global $conexion;
    $sql = "INSERT INTO cursos 
    (nombre, instructor, duracion, categoria, fecha_inicio, fecha_fin, precio, modalidad, nivel, estado, descripcion)
    VALUES ('$datos[nombre]', '$datos[instructor]', '$datos[duracion]', '$datos[categoria]', 
    '$datos[fecha_inicio]', '$datos[fecha_fin]', '$datos[precio]', '$datos[modalidad]', 
    '$datos[nivel]', '$datos[estado]', '$datos[descripcion]')";
    
    return $conexion->query($sql);
}

// Obtener curso por ID
function obtenerCurso($id) {
    global $conexion;
    return $conexion->query("SELECT * FROM cursos WHERE id = $id");
}

// Actualizar curso
function actualizarCurso($datos) {
    global $conexion;
    $sql = "UPDATE cursos SET 
        nombre='$datos[nombre]',
        instructor='$datos[instructor]',
        duracion='$datos[duracion]',
        categoria='$datos[categoria]',
        fecha_inicio='$datos[fecha_inicio]',
        fecha_fin='$datos[fecha_fin]',
        precio='$datos[precio]',
        modalidad='$datos[modalidad]',
        nivel='$datos[nivel]',
        estado='$datos[estado]',
        descripcion='$datos[descripcion]'
        WHERE id=$datos[id]";
    
    return $conexion->query($sql);
}

// Eliminar curso
function eliminarCurso($id) {
    global $conexion;
    return $conexion->query("DELETE FROM cursos WHERE id=$id");
}
?>