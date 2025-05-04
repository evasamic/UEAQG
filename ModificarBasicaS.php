<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include("Conexion.php");

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Obtener los datos de la tabla 'basicas'
    $sql = "SELECT TituloBS, Parrafo1BS, Parrafo2BS, Parrafo3BS, ImagenBS, ImagenHorario1BS, ImagenHorario2BS, ImagenHorario3BS, ImagenHorario4BS, ImagenHorario5BS, ImagenHorario6BS, ImagenHorario7BS, ImagenHorario8BS, ImagenHorario9BS FROM basicas WHERE idBS = 1";  // Suponiendo que idBS = 1 es el único registro
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
    if (isset($_FILES['img-basicas']) && $_FILES['img-basicas']['error'] == 0) {
        $imgTempPath = $_FILES['img-basicas']['tmp_name'];
        $imgName = $_FILES['img-basicas']['name'];
        $imgPath1 = "img/" . $imgName;  // Ruta de destino con el nombre original

        // Verificar si la imagen ya existe
        if (!file_exists($imgPath1)) {
            // Si no existe la imagen, moverla al directorio
            move_uploaded_file($imgTempPath, $imgPath1);
        }
        // Si la imagen ya existe, no hacer nada, mantener el archivo tal como está
    } else {
        // Si no se sube imagen, no modificar la ruta de la imagen en la base de datos
        $sql = "SELECT ImagenBS FROM basicas WHERE idBS = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imgPath1 = $row['ImagenBS'];  // Usamos la imagen existente
        } else {
            $imgPath1 = null;
        }
    }

    if (isset($_FILES['img-horario1basicas']) && $_FILES['img-horario1basicas']['error'] == 0) {
        $imgTempPath = $_FILES['img-horario1basicas']['tmp_name'];
        $imgName = $_FILES['img-horario1basicas']['name'];
        $imgPath2 = "img/" . $imgName;  // Ruta de destino con el nombre original

        // Verificar si la imagen ya existe
        if (!file_exists($imgPath2)) {
            // Si no existe la imagen, moverla al directorio
            move_uploaded_file($imgTempPath, $imgPath2);
        }
        // Si la imagen ya existe, no hacer nada, mantener el archivo tal como está
    } else {
        // Si no se sube imagen, no modificar la ruta de la imagen en la base de datos
        $sql = "SELECT ImagenHorario1BS FROM basicas WHERE idBS = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imgPath2 = $row['ImagenHorario1BS'];  // Usamos la imagen existente
        } else {
            $imgPath2 = null;
        }
    }

    if (isset($_FILES['img-horario2basicas']) && $_FILES['img-horario2basicas']['error'] == 0) {
        $imgTempPath = $_FILES['img-horario2basicas']['tmp_name'];
        $imgName = $_FILES['img-horario2basicas']['name'];
        $imgPath3 = "img/" . $imgName;  // Ruta de destino con el nombre original

        // Verificar si la imagen ya existe
        if (!file_exists($imgPath3)) {
            // Si no existe la imagen, moverla al directorio
            move_uploaded_file($imgTempPath, $imgPath3);
        }
        // Si la imagen ya existe, no hacer nada, mantener el archivo tal como está
    } else {
        // Si no se sube imagen, no modificar la ruta de la imagen en la base de datos
        $sql = "SELECT ImagenHorario2BS FROM basicas WHERE idBS = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imgPath3 = $row['ImagenHorario2BS'];  // Usamos la imagen existente
        } else {
            $imgPath3 = null;
        }
    }

    if (isset($_FILES['img-horario3basicas']) && $_FILES['img-horario3basicas']['error'] == 0) {
        $imgTempPath = $_FILES['img-horario3basicas']['tmp_name'];
        $imgName = $_FILES['img-horario3basicas']['name'];
        $imgPath4 = "img/" . $imgName;  // Ruta de destino con el nombre original

        // Verificar si la imagen ya existe
        if (!file_exists($imgPath4)) {
            // Si no existe la imagen, moverla al directorio
            move_uploaded_file($imgTempPath, $imgPath4);
        }
        // Si la imagen ya existe, no hacer nada, mantener el archivo tal como está
    } else {
        // Si no se sube imagen, no modificar la ruta de la imagen en la base de datos
        $sql = "SELECT ImagenHorario3BS FROM basicas WHERE idBS = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imgPath4 = $row['ImagenHorario3BS'];  // Usamos la imagen existente
        } else {
            $imgPath4 = null;
        }
    }

    if (isset($_FILES['img-horario4basicas']) && $_FILES['img-horario4basicas']['error'] == 0) {
        $imgTempPath = $_FILES['img-horario4basicas']['tmp_name'];
        $imgName = $_FILES['img-horario4basicas']['name'];
        $imgPath5 = "img/" . $imgName;  // Ruta de destino con el nombre original

        // Verificar si la imagen ya existe
        if (!file_exists($imgPath5)) {
            // Si no existe la imagen, moverla al directorio
            move_uploaded_file($imgTempPath, $imgPath5);
        }
        // Si la imagen ya existe, no hacer nada, mantener el archivo tal como está
    } else {
        // Si no se sube imagen, no modificar la ruta de la imagen en la base de datos
        $sql = "SELECT ImagenHorario4BS FROM basicas WHERE idBS = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imgPath5 = $row['ImagenHorario4BS'];  // Usamos la imagen existente
        } else {
            $imgPath5 = null;
        }
    }

    if (isset($_FILES['img-horario5basicas']) && $_FILES['img-horario5basicas']['error'] == 0) {
        $imgTempPath = $_FILES['img-horario5basicas']['tmp_name'];
        $imgName = $_FILES['img-horario5basicas']['name'];
        $imgPath6 = "img/" . $imgName;  // Ruta de destino con el nombre original

        // Verificar si la imagen ya existe
        if (!file_exists($imgPath6)) {
            // Si no existe la imagen, moverla al directorio
            move_uploaded_file($imgTempPath, $imgPath6);
        }
        // Si la imagen ya existe, no hacer nada, mantener el archivo tal como está
    } else {
        // Si no se sube imagen, no modificar la ruta de la imagen en la base de datos
        $sql = "SELECT ImagenHorario5BS FROM basicas WHERE idBS = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imgPath6 = $row['ImagenHorario5BS'];  // Usamos la imagen existente
        } else {
            $imgPath6 = null;
        }
    }

    if (isset($_FILES['img-horario6basicas']) && $_FILES['img-horario6basicas']['error'] == 0) {
        $imgTempPath = $_FILES['img-horario6basicas']['tmp_name'];
        $imgName = $_FILES['img-horario6basicas']['name'];
        $imgPath7 = "img/" . $imgName;  // Ruta de destino con el nombre original

        // Verificar si la imagen ya existe
        if (!file_exists($imgPath7)) {
            // Si no existe la imagen, moverla al directorio
            move_uploaded_file($imgTempPath, $imgPath7);
        }
        // Si la imagen ya existe, no hacer nada, mantener el archivo tal como está
    } else {
        // Si no se sube imagen, no modificar la ruta de la imagen en la base de datos
        $sql = "SELECT ImagenHorario6BS FROM basicas WHERE idBS = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imgPath7 = $row['ImagenHorario6BS'];  // Usamos la imagen existente
        } else {
            $imgPath7 = null;
        }
    }

    if (isset($_FILES['img-horario7basicas']) && $_FILES['img-horario7basicas']['error'] == 0) {
        $imgTempPath = $_FILES['img-horario7basicas']['tmp_name'];
        $imgName = $_FILES['img-horario7basicas']['name'];
        $imgPath8 = "img/" . $imgName;  // Ruta de destino con el nombre original

        // Verificar si la imagen ya existe
        if (!file_exists($imgPath8)) {
            // Si no existe la imagen, moverla al directorio
            move_uploaded_file($imgTempPath, $imgPath8);
        }
        // Si la imagen ya existe, no hacer nada, mantener el archivo tal como está
    } else {
        // Si no se sube imagen, no modificar la ruta de la imagen en la base de datos
        $sql = "SELECT ImagenHorario7BS FROM basicas WHERE idBS = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imgPath8 = $row['ImagenHorario7BS'];  // Usamos la imagen existente
        } else {
            $imgPath8 = null;
        }
    }

    if (isset($_FILES['img-horario8basicas']) && $_FILES['img-horario8basicas']['error'] == 0) {
        $imgTempPath = $_FILES['img-horario8basicas']['tmp_name'];
        $imgName = $_FILES['img-horario8basicas']['name'];
        $imgPath9 = "img/" . $imgName;  // Ruta de destino con el nombre original

        // Verificar si la imagen ya existe
        if (!file_exists($imgPath9)) {
            // Si no existe la imagen, moverla al directorio
            move_uploaded_file($imgTempPath, $imgPath9);
        }
        // Si la imagen ya existe, no hacer nada, mantener el archivo tal como está
    } else {
        // Si no se sube imagen, no modificar la ruta de la imagen en la base de datos
        $sql = "SELECT ImagenHorario8BS FROM basicas WHERE idBS = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imgPath9 = $row['ImagenHorario8BS'];  // Usamos la imagen existente
        } else {
            $imgPath9 = null;
        }
    }

    if (isset($_FILES['img-horario9basicas']) && $_FILES['img-horario9basicas']['error'] == 0) {
        $imgTempPath = $_FILES['img-horario9basicas']['tmp_name'];
        $imgName = $_FILES['img-horario9basicas']['name'];
        $imgPath10 = "img/" . $imgName;  // Ruta de destino con el nombre original

        // Verificar si la imagen ya existe
        if (!file_exists($imgPath10)) {
            // Si no existe la imagen, moverla al directorio
            move_uploaded_file($imgTempPath, $imgPath10);
        }
        // Si la imagen ya existe, no hacer nada, mantener el archivo tal como está
    } else {
        // Si no se sube imagen, no modificar la ruta de la imagen en la base de datos
        $sql = "SELECT ImagenHorario9BS FROM basicas WHERE idBS = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imgPath10 = $row['ImagenHorario9BS'];  // Usamos la imagen existente
        } else {
            $imgPath10 = null;
        }
    }

    // Actualizar los datos en la base de datos
    $sql = "UPDATE basicas SET 
                TituloBS = ?, 
                Parrafo1BS = ?, 
                Parrafo2BS = ?, 
                Parrafo3BS = ?, 
                ImagenBS = ?,
                ImagenHorario1BS = ?,
                ImagenHorario2BS = ?,
                ImagenHorario3BS = ?,
                ImagenHorario4BS = ?,
                ImagenHorario5BS = ?,
                ImagenHorario6BS = ?,
                ImagenHorario7BS = ?,
                ImagenHorario8BS = ?,
                ImagenHorario9BS = ?
            WHERE idBS = 1";  // Suponiendo que idBS = 1 es el único registro

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
