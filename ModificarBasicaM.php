<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include("Conexion.php");

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Obtener los datos de la tabla 'basicam'
    $sql = "SELECT TituloBM, Parrafo1BM, Parrafo2BM, Parrafo3BM, ImagenBM, ImagenHorario1BM, ImagenHorario2BM, ImagenHorario3BM, ImagenHorario4BM, ImagenHorario5BM, ImagenHorario6BM, ImagenHorario7BM, ImagenHorario8BM FROM basicam WHERE idBM = 1";  // Suponiendo que idBM = 1 es el único registro
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
    if (isset($_FILES['img-basicam']) && $_FILES['img-basicam']['error'] == 0) {
        $imgTempPath = $_FILES['img-basicam']['tmp_name'];
        $imgName = $_FILES['img-basicam']['name'];
        $imgPath1 = "img/" . $imgName;  // Ruta de destino con el nombre original

        // Verificar si la imagen ya existe
        if (!file_exists($imgPath1)) {
            // Si no existe la imagen, moverla al directorio
            move_uploaded_file($imgTempPath, $imgPath1);
        }
        // Si la imagen ya existe, no hacer nada, mantener el archivo tal como está
    } else {
        // Si no se sube imagen, no modificar la ruta de la imagen en la base de datos
        $sql = "SELECT ImagenBM FROM basicam WHERE idBM = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imgPath1 = $row['ImagenBM'];  // Usamos la imagen existente
        } else {
            $imgPath1 = null;
        }
    }

    if (isset($_FILES['img-horario1basicam']) && $_FILES['img-horario1basicam']['error'] == 0) {
        $imgTempPath = $_FILES['img-horario1basicam']['tmp_name'];
        $imgName = $_FILES['img-horario1basicam']['name'];
        $imgPath2 = "img/" . $imgName;  // Ruta de destino con el nombre original

        // Verificar si la imagen ya existe
        if (!file_exists($imgPath2)) {
            // Si no existe la imagen, moverla al directorio
            move_uploaded_file($imgTempPath, $imgPath2);
        }
        // Si la imagen ya existe, no hacer nada, mantener el archivo tal como está
    } else {
        // Si no se sube imagen, no modificar la ruta de la imagen en la base de datos
        $sql = "SELECT ImagenHorario1BM FROM basicam WHERE idBM = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imgPath2 = $row['ImagenHorario1BM'];  // Usamos la imagen existente
        } else {
            $imgPath2 = null;
        }
    }

    if (isset($_FILES['img-horario2basicam']) && $_FILES['img-horario2basicam']['error'] == 0) {
        $imgTempPath = $_FILES['img-horario2basicam']['tmp_name'];
        $imgName = $_FILES['img-horario2basicam']['name'];
        $imgPath3 = "img/" . $imgName;  // Ruta de destino con el nombre original

        // Verificar si la imagen ya existe
        if (!file_exists($imgPath3)) {
            // Si no existe la imagen, moverla al directorio
            move_uploaded_file($imgTempPath, $imgPath3);
        }
        // Si la imagen ya existe, no hacer nada, mantener el archivo tal como está
    } else {
        // Si no se sube imagen, no modificar la ruta de la imagen en la base de datos
        $sql = "SELECT ImagenHorario2BM FROM basicam WHERE idBM = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imgPath3 = $row['ImagenHorario2BM'];  // Usamos la imagen existente
        } else {
            $imgPath3 = null;
        }
    }

    if (isset($_FILES['img-horario3basicam']) && $_FILES['img-horario3basicam']['error'] == 0) {
        $imgTempPath = $_FILES['img-horario3basicam']['tmp_name'];
        $imgName = $_FILES['img-horario3basicam']['name'];
        $imgPath4 = "img/" . $imgName;  // Ruta de destino con el nombre original

        // Verificar si la imagen ya existe
        if (!file_exists($imgPath4)) {
            // Si no existe la imagen, moverla al directorio
            move_uploaded_file($imgTempPath, $imgPath4);
        }
        // Si la imagen ya existe, no hacer nada, mantener el archivo tal como está
    } else {
        // Si no se sube imagen, no modificar la ruta de la imagen en la base de datos
        $sql = "SELECT ImagenHorario3BM FROM basicam WHERE idBM = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imgPath4 = $row['ImagenHorario3BM'];  // Usamos la imagen existente
        } else {
            $imgPath4 = null;
        }
    }

    if (isset($_FILES['img-horario4basicam']) && $_FILES['img-horario4basicam']['error'] == 0) {
        $imgTempPath = $_FILES['img-horario4basicam']['tmp_name'];
        $imgName = $_FILES['img-horario4basicam']['name'];
        $imgPath5 = "img/" . $imgName;  // Ruta de destino con el nombre original

        // Verificar si la imagen ya existe
        if (!file_exists($imgPath5)) {
            // Si no existe la imagen, moverla al directorio
            move_uploaded_file($imgTempPath, $imgPath5);
        }
        // Si la imagen ya existe, no hacer nada, mantener el archivo tal como está
    } else {
        // Si no se sube imagen, no modificar la ruta de la imagen en la base de datos
        $sql = "SELECT ImagenHorario4BM FROM basicam WHERE idBM = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imgPath5 = $row['ImagenHorario4BM'];  // Usamos la imagen existente
        } else {
            $imgPath5 = null;
        }
    }

    if (isset($_FILES['img-horario5basicam']) && $_FILES['img-horario5basicam']['error'] == 0) {
        $imgTempPath = $_FILES['img-horario5basicam']['tmp_name'];
        $imgName = $_FILES['img-horario5basicam']['name'];
        $imgPath6 = "img/" . $imgName;  // Ruta de destino con el nombre original

        // Verificar si la imagen ya existe
        if (!file_exists($imgPath6)) {
            // Si no existe la imagen, moverla al directorio
            move_uploaded_file($imgTempPath, $imgPath6);
        }
        // Si la imagen ya existe, no hacer nada, mantener el archivo tal como está
    } else {
        // Si no se sube imagen, no modificar la ruta de la imagen en la base de datos
        $sql = "SELECT ImagenHorario5BM FROM basicam WHERE idBM = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imgPath6 = $row['ImagenHorario5BM'];  // Usamos la imagen existente
        } else {
            $imgPath6 = null;
        }
    }

    if (isset($_FILES['img-horario6basicam']) && $_FILES['img-horario6basicam']['error'] == 0) {
        $imgTempPath = $_FILES['img-horario6basicam']['tmp_name'];
        $imgName = $_FILES['img-horario6basicam']['name'];
        $imgPath7 = "img/" . $imgName;  // Ruta de destino con el nombre original

        // Verificar si la imagen ya existe
        if (!file_exists($imgPath7)) {
            // Si no existe la imagen, moverla al directorio
            move_uploaded_file($imgTempPath, $imgPath7);
        }
        // Si la imagen ya existe, no hacer nada, mantener el archivo tal como está
    } else {
        // Si no se sube imagen, no modificar la ruta de la imagen en la base de datos
        $sql = "SELECT ImagenHorario6BM FROM basicam WHERE idBM = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imgPath7 = $row['ImagenHorario6BM'];  // Usamos la imagen existente
        } else {
            $imgPath7 = null;
        }
    }

    if (isset($_FILES['img-horario7basicam']) && $_FILES['img-horario7basicam']['error'] == 0) {
        $imgTempPath = $_FILES['img-horario7basicam']['tmp_name'];
        $imgName = $_FILES['img-horario7basicam']['name'];
        $imgPath8 = "img/" . $imgName;  // Ruta de destino con el nombre original

        // Verificar si la imagen ya existe
        if (!file_exists($imgPath8)) {
            // Si no existe la imagen, moverla al directorio
            move_uploaded_file($imgTempPath, $imgPath8);
        }
        // Si la imagen ya existe, no hacer nada, mantener el archivo tal como está
    } else {
        // Si no se sube imagen, no modificar la ruta de la imagen en la base de datos
        $sql = "SELECT ImagenHorario7BM FROM basicam WHERE idBM = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imgPath8 = $row['ImagenHorario7BM'];  // Usamos la imagen existente
        } else {
            $imgPath8 = null;
        }
    }

    if (isset($_FILES['img-horario8basicam']) && $_FILES['img-horario8basicam']['error'] == 0) {
        $imgTempPath = $_FILES['img-horario8basicam']['tmp_name'];
        $imgName = $_FILES['img-horario8basicam']['name'];
        $imgPath9 = "img/" . $imgName;  // Ruta de destino con el nombre original

        // Verificar si la imagen ya existe
        if (!file_exists($imgPath9)) {
            // Si no existe la imagen, moverla al directorio
            move_uploaded_file($imgTempPath, $imgPath9);
        }
        // Si la imagen ya existe, no hacer nada, mantener el archivo tal como está
    } else {
        // Si no se sube imagen, no modificar la ruta de la imagen en la base de datos
        $sql = "SELECT ImagenHorario8BM FROM basicam WHERE idBM = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imgPath9 = $row['ImagenHorario8BM'];  // Usamos la imagen existente
        } else {
            $imgPath9 = null;
        }
    }

    // Actualizar los datos en la base de datos
    $sql = "UPDATE basicam SET 
                TituloBM = ?, 
                Parrafo1BM = ?, 
                Parrafo2BM = ?, 
                Parrafo3BM = ?, 
                ImagenBM = ?,
                ImagenHorario1BM = ?,
                ImagenHorario2BM = ?,
                ImagenHorario3BM = ?,
                ImagenHorario4BM = ?,
                ImagenHorario5BM = ?,
                ImagenHorario6BM = ?,
                ImagenHorario7BM = ?,
                ImagenHorario8BM = ?
            WHERE idBM = 1";  // Suponiendo que idBM = 1 es el único registro

    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sssssssssssss', $titulo, $texto1, $texto2, $texto3, $imgPath1, $imgPath2, $imgPath3, $imgPath4, $imgPath5, $imgPath6, $imgPath7, $imgPath8, $imgPath9);
    
    if ($stmt->execute()) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'error' => $stmt->error]);
    }

    $stmt->close();
}

$conn->close();
?>
