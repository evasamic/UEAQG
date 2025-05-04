<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include("Conexion.php");

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Obtener los datos de la tabla 'preparatoria'
    $sql = "SELECT TituloPrepa, Parrafo1Prepa, Parrafo2Prepa, Parrafo3Prepa, ImagenPrepa, ImagenHorario1Prepa, ImagenHorario2Prepa, ImagenHorario3Prepa FROM preparatoria WHERE idPrepa = 1";  // Suponiendo que idPrepa = 1 es el único registro
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Obtener los datos como un array asociativo
        $row = $result->fetch_assoc();
        header('Content-Type: application/json');
        echo json_encode($row);
    } else {
        echo json_encode([]);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario
    $titulo = $_POST['titulo'];
    $texto1 = $_POST['texto1'];
    $texto2 = $_POST['texto2'];
    $texto3 = $_POST['texto3'];

    // Subir la imagen (si es que se ha seleccionado una)
    if (isset($_FILES['img-preparatoria']) && $_FILES['img-preparatoria']['error'] == 0) {
        $imgTempPath = $_FILES['img-preparatoria']['tmp_name'];
        $imgName = $_FILES['img-preparatoria']['name'];
        $imgPath1 = "img/" . $imgName;  // Ruta de destino con el nombre original

        // Verificar si la imagen ya existe
        if (!file_exists($imgPath1)) {
            // Si no existe la imagen, moverla al directorio
            move_uploaded_file($imgTempPath, $imgPath1);
        }
        // Si la imagen ya existe, no hacer nada, mantener el archivo tal como está
    } else {
        // Si no se sube imagen, no modificar la ruta de la imagen en la base de datos
        $sql = "SELECT ImagenPrepa FROM preparatoria WHERE idPrepa = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imgPath1 = $row['ImagenPrepa'];  // Usamos la imagen existente
        } else {
            $imgPath1 = null;
        }
    }

    if (isset($_FILES['img-horario1preparatoria']) && $_FILES['img-horario1preparatoria']['error'] == 0) {
        $imgTempPath = $_FILES['img-horario1preparatoria']['tmp_name'];
        $imgName = $_FILES['img-horario1preparatoria']['name'];
        $imgPath2 = "img/" . $imgName;  // Ruta de destino con el nombre original

        // Verificar si la imagen ya existe
        if (!file_exists($imgPath2)) {
            // Si no existe la imagen, moverla al directorio
            move_uploaded_file($imgTempPath, $imgPath2);
        }
        // Si la imagen ya existe, no hacer nada, mantener el archivo tal como está
    } else {
        // Si no se sube imagen, no modificar la ruta de la imagen en la base de datos
        $sql = "SELECT ImagenHorario1Prepa FROM preparatoria WHERE idPrepa = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imgPath2 = $row['ImagenHorario1Prepa'];  // Usamos la imagen existente
        } else {
            $imgPath2 = null;
        }
    }

    if (isset($_FILES['img-horario2preparatoria']) && $_FILES['img-horario2preparatoria']['error'] == 0) {
        $imgTempPath = $_FILES['img-horario2preparatoria']['tmp_name'];
        $imgName = $_FILES['img-horario2preparatoria']['name'];
        $imgPath3 = "img/" . $imgName;  // Ruta de destino con el nombre original

        // Verificar si la imagen ya existe
        if (!file_exists($imgPath3)) {
            // Si no existe la imagen, moverla al directorio
            move_uploaded_file($imgTempPath, $imgPath3);
        }
        // Si la imagen ya existe, no hacer nada, mantener el archivo tal como está
    } else {
        // Si no se sube imagen, no modificar la ruta de la imagen en la base de datos
        $sql = "SELECT ImagenHorario2Prepa FROM preparatoria WHERE idPrepa = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imgPath3 = $row['ImagenHorario2Prepa'];  // Usamos la imagen existente
        } else {
            $imgPath3 = null;
        }
    }

    if (isset($_FILES['img-horario3preparatoria']) && $_FILES['img-horario3preparatoria']['error'] == 0) {
        $imgTempPath = $_FILES['img-horario3preparatoria']['tmp_name'];
        $imgName = $_FILES['img-horario3preparatoria']['name'];
        $imgPath4 = "img/" . $imgName;  // Ruta de destino con el nombre original

        // Verificar si la imagen ya existe
        if (!file_exists($imgPath4)) {
            // Si no existe la imagen, moverla al directorio
            move_uploaded_file($imgTempPath, $imgPath4);
        }
        // Si la imagen ya existe, no hacer nada, mantener el archivo tal como está
    } else {
        // Si no se sube imagen, no modificar la ruta de la imagen en la base de datos
        $sql = "SELECT ImagenHorario3Prepa FROM preparatoria WHERE idPrepa = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imgPath4 = $row['ImagenHorario3Prepa'];  // Usamos la imagen existente
        } else {
            $imgPath4 = null;
        }
    }

    // Actualizar los datos en la base de datos
    $sql = "UPDATE preparatoria SET 
                TituloPrepa = ?, 
                Parrafo1Prepa = ?, 
                Parrafo2Prepa = ?, 
                Parrafo3Prepa = ?, 
                ImagenPrepa = ?,
                ImagenHorario1Prepa = ?,
                ImagenHorario2Prepa = ?,
                ImagenHorario3Prepa = ?
            WHERE idPrepa = 1";  // Suponiendo que idPrepa = 1 es el único registro

    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssssssss', $titulo, $texto1, $texto2, $texto3, $imgPath1, $imgPath2, $imgPath3, $imgPath4);
    
    if ($stmt->execute()) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'error' => $stmt->error]);
    }

    $stmt->close();
}

$conn->close();
?>
