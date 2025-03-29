<?php
include('Conexion.php'); 

// Recibir datos del formulario
$data = json_decode(file_get_contents("php://input"), true);
$user = $data['username'];
$pass = $data['password'];

// Primero verificar en la tabla roladministrador
$stmt_admin = $conn->prepare("SELECT * FROM roladministrador WHERE UsuarioAdmin = ?");
$stmt_admin->bind_param("s", $user);
$stmt_admin->execute();
$result_admin = $stmt_admin->get_result();

// Si el usuario y la contraseña son correctos en roladministrador
if ($result_admin->num_rows > 0) {
    $admin = $result_admin->fetch_assoc();
    // Verificar la contraseña
    if (password_verify($pass, $admin['ContrasenaAdmin'])) {
        echo json_encode(["status" => "success", "role" => "admin", "message" => "Inicio de sesión exitoso como administrador"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Contraseña incorrecta para administrador"]);
    }
} else {
    // Si no es un administrador, verificar en la tabla rolusuario
    $stmt_user = $conn->prepare("SELECT * FROM rolusuario WHERE UsuarioUsu = ?");
    $stmt_user->bind_param("s", $user);
    $stmt_user->execute();
    $result_user = $stmt_user->get_result();

    // Si el usuario y la contraseña son correctos en rolusuario
    if ($result_user->num_rows > 0) {
        $user_data = $result_user->fetch_assoc();
        // Verificar la contraseña
        if (password_verify($pass, $user_data['ContrasenaUsu'])) {
            echo json_encode(["status" => "success", "role" => "user", "message" => "Inicio de sesión exitoso como usuario"]);
        } else {
            echo json_encode(["status" => "error", "message" => "Contraseña incorrecta para usuario"]);
        }
    } else {
        echo json_encode(["status" => "error", "message" => "Usuario o contraseña incorrectos"]);
    }

    $stmt_user->close();
}

$stmt_admin->close();
$conn->close();
?>
