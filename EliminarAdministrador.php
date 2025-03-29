<?php
// Incluir la conexión a la base de datos
include('Conexion.php'); // Incluir la conexión a la base de datos

// Obtener los datos enviados
$data = json_decode(file_get_contents('php://input'), true);

// Validar que el ID del administrador esté presente
if (!isset($_GET['idAdmin']) || !is_numeric($_GET['idAdmin'])) {
    echo json_encode(['error' => 'ID de administrador inválido']);
    exit;
}

$id = intval($_GET['idAdmin']);

// Verificar si el administrador existe antes de eliminar
$stmt = $conn->prepare("SELECT idAdmin FROM roladministrador WHERE idAdmin = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows === 0) {
    echo json_encode(['error' => 'El administrador no existe']);
    $stmt->close();
    exit;
}
$stmt->close();

// Eliminar el administrador
$stmt = $conn->prepare("DELETE FROM roladministrador WHERE idAdmin = ?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    echo json_encode(['success' => 'Admininistrador eliminado con éxito']);
} else {
    echo json_encode(['error' => 'Error al eliminar el administrador: ' . $stmt->error]);
}

$stmt->close();
$conn->close();
?>
