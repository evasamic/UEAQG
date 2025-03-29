<?php
// Incluir la conexión a la base de datos
include('Conexion.php'); // Incluir la conexión a la base de datos

// Obtener los datos enviados
$data = json_decode(file_get_contents('php://input'), true);

// Validar que el ID del usuario esté presente
if (!isset($_GET['idUsu']) || !is_numeric($_GET['idUsu'])) {
    echo json_encode(['error' => 'ID de usuario inválido']);
    exit;
}

$id = intval($_GET['idUsu']);

// Verificar si el usuario existe antes de eliminar
$stmt = $conn->prepare("SELECT idUsu FROM rolusuario WHERE idUsu = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows === 0) {
    echo json_encode(['error' => 'El usuario no existe']);
    $stmt->close();
    exit;
}
$stmt->close();

// Eliminar el usuario
$stmt = $conn->prepare("DELETE FROM rolusuario WHERE idUsu = ?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    echo json_encode(['success' => 'Usuario eliminado con éxito']);
} else {
    echo json_encode(['error' => 'Error al eliminar el usuario: ' . $stmt->error]);
}

$stmt->close();
$conn->close();
?>
