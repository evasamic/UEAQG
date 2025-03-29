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
        // Crear un nuevo usuario
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

            // Verificar si el usuario ya existe
            $checkQuery = $conn->prepare("SELECT idUsu FROM rolusuario WHERE UsuarioUsu = ?");
            $checkQuery->bind_param("s", $usuario);
            $checkQuery->execute();
            $result = $checkQuery->get_result();

            if ($result->num_rows > 0) {
                echo json_encode(['error' => 'El usuario ya existe.']);
                exit();
            }

            // Insertar el nuevo usuario de manera segura
            $sql = $conn->prepare("INSERT INTO rolusuario (CedulaUsu, ApellidosUsu, NombresUsu, UsuarioUsu, ContrasenaUsu) VALUES (?, ?, ?, ?, ?)");
            $sql->bind_param("sssss", $cedula, $apellidos, $nombres, $usuario, $clave_encriptada);

            if ($sql->execute()) {
                echo json_encode(['success' => 'Usuario creado correctamente.']);
            } else {
                echo json_encode(['error' => 'Error al crear el usuario: ' . $conn->error]);
            }
        }
        break;

    case 'listar':
        // Listar todos los usuarios
        $sql = "SELECT idUsu, CedulaUsu, ApellidosUsu, NombresUsu, UsuarioUsu FROM rolusuario";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $usuarios = [];
            while ($row = $result->fetch_assoc()) {
                $usuarios[] = $row;
            }

            // Responder solo con el JSON
            echo json_encode($usuarios); // Esto convierte el array PHP a JSON
        } else {
            echo json_encode([]); // Si no hay usuarios, devolver un arreglo vacío
        }
        break;

    case 'eliminar':
        // Eliminar un usuario
        if (isset($_GET['idUsu'])) {
            $idUsu = (int)$_GET['idUsu']; // Asegurarse de que es un entero

            // Consulta para eliminar el usuario
            $sql = "DELETE FROM rolusuario WHERE idUsu = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $idUsu);

            if ($stmt->execute()) {
                echo json_encode(['success' => 'Usuario eliminado correctamente.']);
            } else {
                echo json_encode(['error' => 'Error al eliminar el usuario: ' . $conn->error]);
            }
        } else {
            echo json_encode(['error' => 'ID de usuario no proporcionado.']);
        }
        break;

    default:
        echo json_encode(['error' => 'Acción no válida.']);
        break;
}

$conn->close();
?>
