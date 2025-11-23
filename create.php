<?php
// create.php - Alta de videojuegos (Create)
include 'conexion.php';


// Si el formulario fue enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$titulo = $_POST['titulo'];
$consola = $_POST['consola'];
$anio = $_POST['anio'];


// Insertar datos
$sql = "INSERT INTO videojuegos (titulo, consola, anio) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ssi', $titulo, $consola, $anio);


if ($stmt->execute()) {
header('Location: index.php');
exit;
} else {
echo "Error al insertar: " . $conn->error;
}
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Agregar Videojuego</title>
<link rel="stylesheet" href="estilos.css">
</head>
<body>
<h1>Agregar Videojuego</h1>
<a href="index.php" class="btn-volver">Volver</a>


<form action="" method="POST" onsubmit="return validarFormulario()">
<label>Título:</label>
<input type="text" name="titulo" id="titulo" required>


<label>Consola:</label>
<input type="text" name="consola" id="consola" required>


<label>Año:</label>
<input type="number" name="anio" id="anio" min="1980" max="2050" required>


<button type="submit" class="btn-agregar">Guardar</button>
</form>


<script>
// JS #2 - Validar campos vacíos manualmente
function validarFormulario() {
let titulo = document.getElementById('titulo').value.trim();
let consola = document.getElementById('consola').value.trim();
let anio = document.getElementById('anio').value;


if (titulo === '' || consola === '' || anio === '') {
alert('Todos los campos son obligatorios');
return false;
}
return true;
}
</script>
</body>
</html>