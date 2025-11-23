<?php
include 'conexion.php';

// Consulta
$sql = "SELECT * FROM videojuegos ORDER BY id DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registro de Videojuegos</title>
<link rel="stylesheet" href="estilos.css">
</head>
<body>
<h1>Registro de Videojuegos</h1>
<a href="create.php" class="btn-agregar">Agregar Videojuego</a>


<table>
<thead>
<tr>
<th>ID</th>
<th>Título</th>
<th>Consola</th>
<th>Año</th>
<th>Acciones</th>
</tr>
</thead>
<tbody>
<?php while ($row = $result->fetch_assoc()): ?>
<tr>
<td><?= $row['id'] ?></td>
<td><?= $row['titulo'] ?></td>
<td><?= $row['consola'] ?></td>
<td><?= $row['anio'] ?></td>
<td>
<a href="editar.php?id=<?= $row['id'] ?>" class="btn-editar">Editar</a>
<a href="eliminar.php?id=<?= $row['id'] ?>" class="btn-eliminar" onclick="return confirmarBorrado()">Eliminar</a>
</td>
</tr>
<?php endwhile; ?>
</tbody>
</table>

<script>
// JS #1 Confirmación de borrado
function confirmarBorrado() {
return confirm('¿Seguro que deseas eliminar este videojuego?');
}
</script>
</body>
</html>