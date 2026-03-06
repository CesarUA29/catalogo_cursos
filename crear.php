<?php 
include("includes/funciones.php");

if($_POST){
    insertarCurso($_POST);
    header("Location: index.php");
}
?>

<form method="POST" onsubmit="return validarFormulario();">
    <input type="text" name="nombre" placeholder="Nombre">
    <input type="text" name="instructor" placeholder="Instructor">
    <input type="number" name="duracion" placeholder="Duración">
    <input type="text" name="categoria" placeholder="Categoría">
    <input type="date" name="fecha_inicio">
    <input type="date" name="fecha_fin">
    <input type="number" step="0.01" name="precio" placeholder="Precio">
    <input type="text" name="modalidad" placeholder="Modalidad">
    <input type="text" name="nivel" placeholder="Nivel">
    <input type="text" name="estado" placeholder="Estado">
    <textarea name="descripcion"></textarea>
    <button type="submit">Guardar</button>
</form>

<script src="build/js/validations.js"></script>