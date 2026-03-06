<?php
include("includes/funciones.php");

if(!isset($_GET['id'])) {
    header("Location: index.php");
}

$id = $_GET['id'];
$resultado = obtenerCurso($id);
$curso = $resultado->fetch_assoc();

// Si se envía el formulario
if($_POST){
    $_POST['id'] = $id;
    actualizarCurso($_POST);
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Curso</title>
    <link rel="stylesheet" href="build/css/style.css">
</head>
<body>

<h1>Editar Curso</h1>

<form method="POST" onsubmit="return validarFormulario();">

    <input type="text" name="nombre" value="<?php echo $curso['nombre']; ?>" placeholder="Nombre">

    <input type="text" name="instructor" value="<?php echo $curso['instructor']; ?>" placeholder="Instructor">

    <input type="number" name="duracion" value="<?php echo $curso['duracion']; ?>" placeholder="Duración">

    <input type="text" name="categoria" value="<?php echo $curso['categoria']; ?>" placeholder="Categoría">

    <input type="date" name="fecha_inicio" value="<?php echo $curso['fecha_inicio']; ?>">

    <input type="date" name="fecha_fin" value="<?php echo $curso['fecha_fin']; ?>">

    <input type="number" step="0.01" name="precio" value="<?php echo $curso['precio']; ?>" placeholder="Precio">

    <input type="text" name="modalidad" value="<?php echo $curso['modalidad']; ?>" placeholder="Modalidad">

    <input type="text" name="nivel" value="<?php echo $curso['nivel']; ?>" placeholder="Nivel">

    <input type="text" name="estado" value="<?php echo $curso['estado']; ?>" placeholder="Estado">

    <textarea name="descripcion"><?php echo $curso['descripcion']; ?></textarea>

    <button type="submit">Actualizar</button>

</form>

<script src="build/js/validations.js"></script>

</body>
</html>