<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include("Conexion.php");

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Obtener los datos de la tabla 'basicae'
    $sql = "SELECT TituloBE, Parrafo1BE, Parrafo2BE, Parrafo3BE, ImagenBE, ImagenHorario1BE, ImagenHorario2BE, ImagenHorario3BE, ImagenHorario4BE, ImagenHorario5BE, ImagenHorario6BE, ImagenHorario7BE, ImagenHorario8BE FROM basicae WHERE idBE = 1";  // Suponiendo que idBE = 1 es el único registro
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
    if (isset($_FILES['img-basicae']) && $_FILES['img-basicae']['error'] == 0) {
        $imgTempPath = $_FILES['img-basicae']['tmp_name'];
        $imgName = $_FILES['img-basicae']['name'];
        $imgPath1 = "img/" . $imgName;  // Ruta de destino con el nombre original

        // Verificar si la imagen ya existe
        if (!file_exists($imgPath1)) {
            // Si no existe la imagen, moverla al directorio
            move_uploaded_file($imgTempPath, $imgPath1);
        }
        // Si la imagen ya existe, no hacer nada, mantener el archivo tal como está
    } else {
        // Si no se sube imagen, no modificar la ruta de la imagen en la base de datos
        $sql = "SELECT ImagenBE FROM basicae WHERE idBE = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imgPath1 = $row['ImagenBE'];  // Usamos la imagen existente
        } else {
            $imgPath1 = null;
        }
    }

    if (isset($_FILES['img-horario1basicae']) && $_FILES['img-horario1basicae']['error'] == 0) {
        $imgTempPath = $_FILES['img-horario1basicae']['tmp_name'];
        $imgName = $_FILES['img-horario1basicae']['name'];
        $imgPath2 = "img/" . $imgName;  // Ruta de destino con el nombre original

        // Verificar si la imagen ya existe
        if (!file_exists($imgPath2)) {
            // Si no existe la imagen, moverla al directorio
            move_uploaded_file($imgTempPath, $imgPath2);
        }
        // Si la imagen ya existe, no hacer nada, mantener el archivo tal como está
    } else {
        // Si no se sube imagen, no modificar la ruta de la imagen en la base de datos
        $sql = "SELECT ImagenHorario1BE FROM basicae WHERE idBE = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imgPath2 = $row['ImagenHorario1BE'];  // Usamos la imagen existente
        } else {
            $imgPath2 = null;
        }
    }

    if (isset($_FILES['img-horario2basicae']) && $_FILES['img-horario2basicae']['error'] == 0) {
        $imgTempPath = $_FILES['img-horario2basicae']['tmp_name'];
        $imgName = $_FILES['img-horario2basicae']['name'];
        $imgPath3 = "img/" . $imgName;  // Ruta de destino con el nombre original

        // Verificar si la imagen ya existe
        if (!file_exists($imgPath3)) {
            // Si no existe la imagen, moverla al directorio
            move_uploaded_file($imgTempPath, $imgPath3);
        }
        // Si la imagen ya existe, no hacer nada, mantener el archivo tal como está
    } else {
        // Si no se sube imagen, no modificar la ruta de la imagen en la base de datos
        $sql = "SELECT ImagenHorario2BE FROM basicae WHERE idBE = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imgPath3 = $row['ImagenHorario2BE'];  // Usamos la imagen existente
        } else {
            $imgPath3 = null;
        }
    }

    if (isset($_FILES['img-horario3basicae']) && $_FILES['img-horario3basicae']['error'] == 0) {
        $imgTempPath = $_FILES['img-horario3basicae']['tmp_name'];
        $imgName = $_FILES['img-horario3basicae']['name'];
        $imgPath4 = "img/" . $imgName;  // Ruta de destino con el nombre original

        // Verificar si la imagen ya existe
        if (!file_exists($imgPath4)) {
            // Si no existe la imagen, moverla al directorio
            move_uploaded_file($imgTempPath, $imgPath4);
        }
        // Si la imagen ya existe, no hacer nada, mantener el archivo tal como está
    } else {
        // Si no se sube imagen, no modificar la ruta de la imagen en la base de datos
        $sql = "SELECT ImagenHorario3BE FROM basicae WHERE idBE = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imgPath4 = $row['ImagenHorario3BE'];  // Usamos la imagen existente
        } else {
            $imgPath4 = null;
        }
    }

    if (isset($_FILES['img-horario4basicae']) && $_FILES['img-horario4basicae']['error'] == 0) {
        $imgTempPath = $_FILES['img-horario4basicae']['tmp_name'];
        $imgName = $_FILES['img-horario4basicae']['name'];
        $imgPath5 = "img/" . $imgName;  // Ruta de destino con el nombre original

        // Verificar si la imagen ya existe
        if (!file_exists($imgPath5)) {
            // Si no existe la imagen, moverla al directorio
            move_uploaded_file($imgTempPath, $imgPath5);
        }
        // Si la imagen ya existe, no hacer nada, mantener el archivo tal como está
    } else {
        // Si no se sube imagen, no modificar la ruta de la imagen en la base de datos
        $sql = "SELECT ImagenHorario4BE FROM basicae WHERE idBE = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imgPath5 = $row['ImagenHorario4BE'];  // Usamos la imagen existente
        } else {
            $imgPath5 = null;
        }
    }

    if (isset($_FILES['img-horario5basicae']) && $_FILES['img-horario5basicae']['error'] == 0) {
        $imgTempPath = $_FILES['img-horario5basicae']['tmp_name'];
        $imgName = $_FILES['img-horario5basicae']['name'];
        $imgPath6 = "img/" . $imgName;  // Ruta de destino con el nombre original

        // Verificar si la imagen ya existe
        if (!file_exists($imgPath6)) {
            // Si no existe la imagen, moverla al directorio
            move_uploaded_file($imgTempPath, $imgPath6);
        }
        // Si la imagen ya existe, no hacer nada, mantener el archivo tal como está
    } else {
        // Si no se sube imagen, no modificar la ruta de la imagen en la base de datos
        $sql = "SELECT ImagenHorario5BE FROM basicae WHERE idBE = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imgPath6 = $row['ImagenHorario5BE'];  // Usamos la imagen existente
        } else {
            $imgPath6 = null;
        }
    }

    if (isset($_FILES['img-horario6basicae']) && $_FILES['img-horario6basicae']['error'] == 0) {
        $imgTempPath = $_FILES['img-horario6basicae']['tmp_name'];
        $imgName = $_FILES['img-horario6basicae']['name'];
        $imgPath7 = "img/" . $imgName;  // Ruta de destino con el nombre original

        // Verificar si la imagen ya existe
        if (!file_exists($imgPath7)) {
            // Si no existe la imagen, moverla al directorio
            move_uploaded_file($imgTempPath, $imgPath7);
        }
        // Si la imagen ya existe, no hacer nada, mantener el archivo tal como está
    } else {
        // Si no se sube imagen, no modificar la ruta de la imagen en la base de datos
        $sql = "SELECT ImagenHorario6BE FROM basicae WHERE idBE = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imgPath7 = $row['ImagenHorario6BE'];  // Usamos la imagen existente
        } else {
            $imgPath7 = null;
        }
    }

    if (isset($_FILES['img-horario7basicae']) && $_FILES['img-horario7basicae']['error'] == 0) {
        $imgTempPath = $_FILES['img-horario7basicae']['tmp_name'];
        $imgName = $_FILES['img-horario7basicae']['name'];
        $imgPath8 = "img/" . $imgName;  // Ruta de destino con el nombre original

        // Verificar si la imagen ya existe
        if (!file_exists($imgPath8)) {
            // Si no existe la imagen, moverla al directorio
            move_uploaded_file($imgTempPath, $imgPath8);
        }
        // Si la imagen ya existe, no hacer nada, mantener el archivo tal como está
    } else {
        // Si no se sube imagen, no modificar la ruta de la imagen en la base de datos
        $sql = "SELECT ImagenHorario7BE FROM basicae WHERE idBE = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imgPath8 = $row['ImagenHorario7BE'];  // Usamos la imagen existente
        } else {
            $imgPath8 = null;
        }
    }

    if (isset($_FILES['img-horario8basicae']) && $_FILES['img-horario8basicae']['error'] == 0) {
        $imgTempPath = $_FILES['img-horario8basicae']['tmp_name'];
        $imgName = $_FILES['img-horario8basicae']['name'];
        $imgPath9 = "img/" . $imgName;  // Ruta de destino con el nombre original

        // Verificar si la imagen ya existe
        if (!file_exists($imgPath9)) {
            // Si no existe la imagen, moverla al directorio
            move_uploaded_file($imgTempPath, $imgPath9);
        }
        // Si la imagen ya existe, no hacer nada, mantener el archivo tal como está
    } else {
        // Si no se sube imagen, no modificar la ruta de la imagen en la base de datos
        $sql = "SELECT ImagenHorario8BE FROM basicae WHERE idBE = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imgPath9 = $row['ImagenHorario8BE'];  // Usamos la imagen existente
        } else {
            $imgPath9 = null;
        }
    }

    if (isset($_FILES['img-horario9basicae']) && $_FILES['img-horario9basicae']['error'] == 0) {
        $imgTempPath = $_FILES['img-horario9basicae']['tmp_name'];
        $imgName = $_FILES['img-horario9basicae']['name'];
        $imgPath10 = "img/" . $imgName;  // Ruta de destino con el nombre original

        // Verificar si la imagen ya existe
        if (!file_exists($imgPath10)) {
            // Si no existe la imagen, moverla al directorio
            move_uploaded_file($imgTempPath, $imgPath10);
        }
        // Si la imagen ya existe, no hacer nada, mantener el archivo tal como está
    } else {
        // Si no se sube imagen, no modificar la ruta de la imagen en la base de datos
        $sql = "SELECT ImagenHorario9BE FROM basicae WHERE idBE = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imgPath10 = $row['ImagenHorario9BE'];  // Usamos la imagen existente
        } else {
            $imgPath10 = null;
        }
    }


    // Actualizar los datos en la base de datos
    $sql = "UPDATE basicae SET 
                TituloBE = ?, 
                Parrafo1BE = ?, 
                Parrafo2BE = ?, 
                Parrafo3BE = ?, 
                ImagenBE = ?,
                ImagenHorario1BE = ?,
                ImagenHorario2BE = ?,
                ImagenHorario3BE = ?,
                ImagenHorario4BE = ?,
                ImagenHorario5BE = ?,
                ImagenHorario6BE = ?,
                ImagenHorario7BE = ?,
                ImagenHorario8BE = ?,
                ImagenHorario9BE = ?
            WHERE idBE = 1";  // Suponiendo que idBE = 1 es el único registro

    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssssssssssssss', $titulo, $texto1, $texto2, $texto3, $imgPath1, $imgPath2, $imgPath3, $imgPath4, $imgPath5, $imgPath6, $imgPath7, $imgPath8, $imgPath9, $imgPath10);
    
    if ($stmt->execute()) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'error' => $stmt->error]);
    }

    $stmt->close();
}

$conn->close();
?>
