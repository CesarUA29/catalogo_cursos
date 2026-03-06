<?php include("includes/funciones.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Catálogo de Cursos</title>
    <link rel="stylesheet" href="build/css/style.css">
</head>
<body>
    <div class="banner-container">
    <img src="build/img/banner.jpg" class="banner-left">
    <img src="build/img/banner.jpg" class="banner-right">
</div>

<h1>Catálogo de Cursos</h1>
<a href="crear.php">Agregar Curso</a>

<table border="1">
<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Instructor</th>
    <th>Precio</th>
    <th>Acciones</th>
</tr>

<?php 
$cursos = obtenerCursos();
while($curso = $cursos->fetch_assoc()) { ?>
<tr>
    <td><?php echo $curso['id']; ?></td>
    <td><?php echo $curso['nombre']; ?></td>
    <td><?php echo $curso['instructor']; ?></td>
    <td><?php echo $curso['precio']; ?></td>
    <td>
        <a href="editar.php?id=<?php echo $curso['id']; ?>">Editar</a>
        <a href="eliminar.php?id=<?php echo $curso['id']; ?>">Eliminar</a>
    </td>
</tr>
<?php } ?>

</table>

</body>
</html>