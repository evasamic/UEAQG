<?php
// Habilitar el reporte de errores
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Asegurarnos de que la respuesta sea JSON
header('Content-Type: application/json');

// Incluir el archivo de conexión
include("Conexion.php");

// Obtener la acción que se debe ejecutar (GET o POST)
$accion = isset($_POST['accion']) ? $_POST['accion'] : (isset($_GET['accion']) ? $_GET['accion'] : '');

if (empty($accion)) {
    // Si no hay acción definida, retornamos un error
    echo json_encode(['error' => 'Acción no válida.']);
    exit;
}

// Procesamos las distintas acciones que se pueden ejecutar
switch ($accion) {
    // Obtener todos los administradores registrados
    case 'obtener_todos':
        $sql = "SELECT idAdmin, CedulaAdmin, ApellidosAdmin, NombresAdmin, UsuarioAdmin FROM roladministrador";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            $administradores = [];
            // Recopilamos todos los administradores en un array
            while ($row = $result->fetch_assoc()) {
                $administradores[] = $row;
            }
            echo json_encode($administradores);  // Respondemos con los datos de los administradores en formato JSON
        } else {
            echo json_encode(['error' => 'No se encontraron administradores.']);
        }
        break;

    // Obtener los datos de un administrador específico
    case 'obtener':
        if (isset($_GET['idAdmin'])) {
            $idAdmin = (int)$_GET['idAdmin'];  // Sanitizar el ID de administrador

            $sql = "SELECT idAdmin, CedulaAdmin, ApellidosAdmin, NombresAdmin, UsuarioAdmin, ContrasenaAdmin FROM roladministrador WHERE idAdmin = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $idAdmin);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result && $result->num_rows > 0) {
                $usuario = $result->fetch_assoc();
                echo json_encode($usuario);  // Respondemos con los datos del administrador en formato JSON
            } else {
                echo json_encode(['error' => 'Usuario no encontrado.']);
            }
        } else {
            echo json_encode(['error' => 'ID de administrador no proporcionado.']);
        }
        break;

    // Actualizar los datos de un administrador
    case 'actualizar':
        if (
            isset($_POST['id']) &&
            isset($_POST['cedula']) &&
            isset($_POST['apellidos']) &&
            isset($_POST['nombres']) &&
            isset($_POST['usuario']) &&
            isset($_POST['clave'])
        ) {
            $idAdmin = (int)$_POST['id'];  // Sanitizar los datos de entrada
            $cedula = $_POST['cedula'];
            $apellidos = $_POST['apellidos'];
            $nombres = $_POST['nombres'];
            $usuario = $_POST['usuario'];
            $clave = $_POST['clave'];

            // Preparar la consulta de actualización, solo actualizando los campos necesarios
            $sql = "UPDATE roladministrador SET CedulaAdmin=?, ApellidosAdmin=?, NombresAdmin=?, UsuarioAdmin=?, ContrasenaAdmin=? WHERE idAdmin=?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sssssi", $cedula, $apellidos, $nombres, $usuario, $clave, $idAdmin);

            if ($stmt->execute()) {
                // Si la actualización fue exitosa, devolver una respuesta positiva
                echo json_encode(['success' => true]);
            } else {
                // Si hubo un error en la consulta
                echo json_encode(['error' => 'Error al ejecutar la consulta: ' . $stmt->error]);
            }
        } else {
            echo json_encode(['error' => 'Faltan datos para actualizar.']);
        }
        break;

    default:
        echo json_encode(['error' => 'Acción no válida.']);  // Si la acción no está definida
}
?>
