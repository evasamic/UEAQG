<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include("Conexion.php");

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Obtener los datos de la tabla 'inicial'
    $sql = "SELECT TituloInicial, Parrafo1Inicial, Parrafo2Inicial, Parrafo3Inicial, ImagenInicial, ImagenHorario1Inicial, ImagenHorario2Inicial, ImagenHorario3Inicial, ImagenHorario4Inicial, ImagenHorario5Inicial, ImagenHorario6Inicial FROM inicial WHERE idInicial = 1";  // Suponiendo que idBa = 1 es el único registro
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
    if (isset($_FILES['img-inicial']) && $_FILES['img-inicial']['error'] == 0) {
        $imgTempPath = $_FILES['img-inicial']['tmp_name'];
        $imgName = $_FILES['img-inicial']['name'];
        $imgPath1 = "img/" . $imgName;  // Ruta de destino con el nombre original

        // Verificar si la imagen ya existe
        if (!file_exists($imgPath1)) {
            // Si no existe la imagen, moverla al directorio
            move_uploaded_file($imgTempPath, $imgPath1);
        }
        // Si la imagen ya existe, no hacer nada, mantener el archivo tal como está
    } else {
        // Si no se sube imagen, no modificar la ruta de la imagen en la base de datos
        $sql = "SELECT ImagenInicial FROM inicial WHERE idInicial = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imgPath1 = $row['ImagenInicial'];  // Usamos la imagen existente
        } else {
            $imgPath1 = null;
        }
    }

    if (isset($_FILES['img-horario1inicial']) && $_FILES['img-horario1inicial']['error'] == 0) {
        $imgTempPath = $_FILES['img-horario1inicial']['tmp_name'];
        $imgName = $_FILES['img-horario1inicial']['name'];
        $imgPath2 = "img/" . $imgName;  // Ruta de destino con el nombre original

        // Verificar si la imagen ya existe
        if (!file_exists($imgPath2)) {
            // Si no existe la imagen, moverla al directorio
            move_uploaded_file($imgTempPath, $imgPath2);
        }
        // Si la imagen ya existe, no hacer nada, mantener el archivo tal como está
    } else {
        // Si no se sube imagen, no modificar la ruta de la imagen en la base de datos
        $sql = "SELECT ImagenHorario1Inicial FROM inicial WHERE idInicial = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imgPath2 = $row['ImagenHorario1Inicial'];  // Usamos la imagen existente
        } else {
            $imgPath2 = null;
        }
    }

    if (isset($_FILES['img-horario2inicial']) && $_FILES['img-horario2inicial']['error'] == 0) {
        $imgTempPath = $_FILES['img-horario2inicial']['tmp_name'];
        $imgName = $_FILES['img-horario2inicial']['name'];
        $imgPath3 = "img/" . $imgName;  // Ruta de destino con el nombre original

        // Verificar si la imagen ya existe
        if (!file_exists($imgPath3)) {
            // Si no existe la imagen, moverla al directorio
            move_uploaded_file($imgTempPath, $imgPath3);
        }
        // Si la imagen ya existe, no hacer nada, mantener el archivo tal como está
    } else {
        // Si no se sube imagen, no modificar la ruta de la imagen en la base de datos
        $sql = "SELECT ImagenHorario2Inicial FROM inicial WHERE idInicial = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imgPath3 = $row['ImagenHorario2Inicial'];  // Usamos la imagen existente
        } else {
            $imgPath3 = null;
        }
    }

    if (isset($_FILES['img-horario3inicial']) && $_FILES['img-horario3inicial']['error'] == 0) {
        $imgTempPath = $_FILES['img-horario3inicial']['tmp_name'];
        $imgName = $_FILES['img-horario3inicial']['name'];
        $imgPath4 = "img/" . $imgName;  // Ruta de destino con el nombre original

        // Verificar si la imagen ya existe
        if (!file_exists($imgPath4)) {
            // Si no existe la imagen, moverla al directorio
            move_uploaded_file($imgTempPath, $imgPath4);
        }
        // Si la imagen ya existe, no hacer nada, mantener el archivo tal como está
    } else {
        // Si no se sube imagen, no modificar la ruta de la imagen en la base de datos
        $sql = "SELECT ImagenHorario3Inicial FROM inicial WHERE idInicial = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imgPath4 = $row['ImagenHorario3Inicial'];  // Usamos la imagen existente
        } else {
            $imgPath4 = null;
        }
    }

    if (isset($_FILES['img-horario4inicial']) && $_FILES['img-horario4inicial']['error'] == 0) {
        $imgTempPath = $_FILES['img-horario4inicial']['tmp_name'];
        $imgName = $_FILES['img-horario4inicial']['name'];
        $imgPath5 = "img/" . $imgName;  // Ruta de destino con el nombre original

        // Verificar si la imagen ya existe
        if (!file_exists($imgPath5)) {
            // Si no existe la imagen, moverla al directorio
            move_uploaded_file($imgTempPath, $imgPath5);
        }
        // Si la imagen ya existe, no hacer nada, mantener el archivo tal como está
    } else {
        // Si no se sube imagen, no modificar la ruta de la imagen en la base de datos
        $sql = "SELECT ImagenHorario4Inicial FROM inicial WHERE idInicial = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imgPath5 = $row['ImagenHorario4Inicial'];  // Usamos la imagen existente
        } else {
            $imgPath5 = null;
        }
    }

    if (isset($_FILES['img-horario5inicial']) && $_FILES['img-horario5inicial']['error'] == 0) {
        $imgTempPath = $_FILES['img-horario5inicial']['tmp_name'];
        $imgName = $_FILES['img-horario5inicial']['name'];
        $imgPath6 = "img/" . $imgName;  // Ruta de destino con el nombre original

        // Verificar si la imagen ya existe
        if (!file_exists($imgPath6)) {
            // Si no existe la imagen, moverla al directorio
            move_uploaded_file($imgTempPath, $imgPath6);
        }
        // Si la imagen ya existe, no hacer nada, mantener el archivo tal como está
    } else {
        // Si no se sube imagen, no modificar la ruta de la imagen en la base de datos
        $sql = "SELECT ImagenHorario5Inicial FROM inicial WHERE idInicial = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imgPath6 = $row['ImagenHorario5Inicial'];  // Usamos la imagen existente
        } else {
            $imgPath6 = null;
        }
    }

    if (isset($_FILES['img-horario6inicial']) && $_FILES['img-horario6inicial']['error'] == 0) {
        $imgTempPath = $_FILES['img-horario6inicial']['tmp_name'];
        $imgName = $_FILES['img-horario6inicial']['name'];
        $imgPath7 = "img/" . $imgName;  // Ruta de destino con el nombre original

        // Verificar si la imagen ya existe
        if (!file_exists($imgPath7)) {
            // Si no existe la imagen, moverla al directorio
            move_uploaded_file($imgTempPath, $imgPath7);
        }
        // Si la imagen ya existe, no hacer nada, mantener el archivo tal como está
    } else {
        // Si no se sube imagen, no modificar la ruta de la imagen en la base de datos
        $sql = "SELECT ImagenHorario6Inicial FROM inicial WHERE idInicial = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imgPath7 = $row['ImagenHorario6Inicial'];  // Usamos la imagen existente
        } else {
            $imgPath7 = null;
        }
    }

    // Actualizar los datos en la base de datos
    $sql = "UPDATE inicial SET 
                TituloInicial = ?, 
                Parrafo1Inicial = ?, 
                Parrafo2Inicial = ?, 
                Parrafo3Inicial = ?, 
                ImagenInicial = ?,
                ImagenHorario1Inicial = ?,
                ImagenHorario2Inicial = ?,
                ImagenHorario3Inicial = ?,
                ImagenHorario4Inicial = ?,
                ImagenHorario5Inicial = ?,
                ImagenHorario6Inicial = ?
            WHERE idInicial = 1";  // Suponiendo que idBa = 1 es el único registro

    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sssssssssss', $titulo, $texto1, $texto2, $texto3, $imgPath1, $imgPath2, $imgPath3, $imgPath4, $imgPath5, $imgPath6, $imgPath7);
    
    if ($stmt->execute()) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'error' => $stmt->error]);
    }

    $stmt->close();
}

$conn->close();
?>
