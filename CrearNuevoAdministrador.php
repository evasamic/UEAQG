<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Incluir la conexión a la base de datos
include('Conexion.php'); // Incluir la conexión a la base de datos

// Obtener la acción (por ejemplo, listar, crear, etc.)
$accion = $_POST['accion'] ?? $_GET['accion'] ?? '';

// Establecer la cabecera para que la respuesta sea JSON
header('Content-Type: application/json'); // Esto asegura que la respuesta sea interpretada como JSON

switch ($accion) {
    case 'crear':
        // Crear un nuevo administrador
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Obtener los datos del formulario
            $cedula = trim($_POST['cedula'] ?? '');
            $apellidos = trim($_POST['apellidos'] ?? '');
            $nombres = trim($_POST['nombres'] ?? '');
            $usuario = trim($_POST['usuario'] ?? '');
            $clave = $_POST['clave'] ?? '';

            // Validar que no haya campos vacíos
            if (empty($cedula) || empty($apellidos) || empty($nombres) || empty($usuario) || empty($clave)) {
                echo json_encode(['error' => 'Todos los campos son obligatorios.']);
                exit();
            }

            // Encriptar la clave
            $clave_encriptada = password_hash($clave, PASSWORD_DEFAULT);

            // Verificar si el administrador ya existe
            $checkQuery = $conn->prepare("SELECT idAdmin FROM roladministrador WHERE CedulaAdmin = ?");
            $checkQuery->bind_param("s", $cedula);
            $checkQuery->execute();
            $result = $checkQuery->get_result();

            if ($result->num_rows > 0) {
                echo json_encode(['error' => 'El administrador ya existe.']);
                exit();
            }

            // Insertar el nuevo administrador de manera segura
            $sql = $conn->prepare("INSERT INTO roladministrador (CedulaAdmin, ApellidosAdmin, NombresAdmin, UsuarioAdmin, ContrasenaAdmin) VALUES (?, ?, ?, ?, ?)");
            $sql->bind_param("sssss", $cedula, $apellidos, $nombres, $usuario, $clave_encriptada);

            if ($sql->execute()) {
                echo json_encode(['success' => 'Administrador creado correctamente.']);
            } else {
                echo json_encode(['error' => 'Error al crear el Administrador: ' . $conn->error]);
            }
        }
        break;

    case 'listar':
        // Listar todos los administradores
        $sql = "SELECT idAdmin, CedulaAdmin, ApellidosAdmin, NombresAdmin, UsuarioAdmin FROM roladministrador";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $administradores = [];
            while ($row = $result->fetch_assoc()) {
                $administradores[] = $row;
            }

            // Responder solo con el JSON
            echo json_encode($administradores); // Esto convierte el array PHP a JSON
        } else {
            echo json_encode([]); // Si no hay administradores, devolver un arreglo vacío
        }
        break;

    case 'eliminar':
        // Eliminar un administrador
        if (isset($_GET['idAdmin'])) {
            $idAdmin = (int)$_GET['idAdmin']; // Asegurarse de que es un entero

            // Consulta para eliminar el administrador
            $sql = "DELETE FROM roladministrador WHERE idAdmin = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $idAdmin);

            if ($stmt->execute()) {
                echo json_encode(['success' => 'Administrador eliminado correctamente.']);
            } else {
                echo json_encode(['error' => 'Error al eliminar el administrador: ' . $conn->error]);
            }
        } else {
            echo json_encode(['error' => 'ID de administrador no proporcionado.']);
        }
        break;

    default:
        echo json_encode(['error' => 'Acción no válida.']);
        break;
}

$conn->close();
?>
