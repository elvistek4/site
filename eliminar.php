<?php
// eliminar.php - Borrar videojuego (Delete)
include 'conexion.php';


// Verificar ID
if (!isset($_GET['id'])) {
die('ID no especificado');
}


$id = $_GET['id'];


// Borrar registro
$sql = "DELETE FROM videojuegos WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $id);


if ($stmt->execute()) {
header('Location: index.php');
exit;
} else {
echo "Error al eliminar: " . $conn->error;
}
?>