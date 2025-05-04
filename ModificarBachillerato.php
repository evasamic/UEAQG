<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include("Conexion.php");

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Obtener los datos de la tabla 'bachillerato'
    $sql = "SELECT TituloBa, Parrafo1Ba, Parrafo2Ba, Parrafo3Ba, ImagenBa, ImagenHorario1Ba, ImagenHorario2Ba, ImagenHorario3Ba, ImagenHorario4Ba, ImagenHorario5Ba, ImagenHorario6Ba, ImagenHorario7Ba, ImagenHorario8Ba, ImagenHorario9Ba, ImagenHorario10Ba, ImagenHorario12Ba, ImagenHorario12Ba, ImagenHorario13Ba, ImagenHorario14Ba, ImagenHorario15Ba, ImagenHorario16Ba, ImagenHorario17Ba, ImagenHorario18Ba FROM bachillerato WHERE idBa = 1";  // Suponiendo que idBa = 1 es el único registro
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
    if (isset($_FILES['img-bachillerato']) && $_FILES['img-bachillerato']['error'] == 0) {
        $imgTempPath = $_FILES['img-bachillerato']['tmp_name'];
        $imgName = $_FILES['img-bachillerato']['name'];
        $imgPath1 = "img/" . $imgName;  // Ruta de destino con el nombre original

        // Verificar si la imagen ya existe
        if (!file_exists($imgPath1)) {
            // Si no existe la imagen, moverla al directorio
            move_uploaded_file($imgTempPath, $imgPath1);
        }
        // Si la imagen ya existe, no hacer nada, mantener el archivo tal como está
    } else {
        // Si no se sube imagen, no modificar la ruta de la imagen en la base de datos
        $sql = "SELECT ImagenBa FROM bachillerato WHERE idBa = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imgPath1 = $row['ImagenBa'];  // Usamos la imagen existente
        } else {
            $imgPath1 = null;
        }
    }

    if (isset($_FILES['img-horario1bachillerato']) && $_FILES['img-horario1bachillerato']['error'] == 0) {
        $imgTempPath = $_FILES['img-horario1bachillerato']['tmp_name'];
        $imgName = $_FILES['img-horario1bachillerato']['name'];
        $imgPath2 = "img/" . $imgName;  // Ruta de destino con el nombre original

        // Verificar si la imagen ya existe
        if (!file_exists($imgPath2)) {
            // Si no existe la imagen, moverla al directorio
            move_uploaded_file($imgTempPath, $imgPath2);
        }
        // Si la imagen ya existe, no hacer nada, mantener el archivo tal como está
    } else {
        // Si no se sube imagen, no modificar la ruta de la imagen en la base de datos
        $sql = "SELECT ImagenHorario1Ba FROM bachillerato WHERE idBa = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imgPath2 = $row['ImagenHorario1Ba'];  // Usamos la imagen existente
        } else {
            $imgPath2 = null;
        }
    }

    if (isset($_FILES['img-horario2bachillerato']) && $_FILES['img-horario2bachillerato']['error'] == 0) {
        $imgTempPath = $_FILES['img-horario2bachillerato']['tmp_name'];
        $imgName = $_FILES['img-horario2bachillerato']['name'];
        $imgPath3 = "img/" . $imgName;  // Ruta de destino con el nombre original

        // Verificar si la imagen ya existe
        if (!file_exists($imgPath3)) {
            // Si no existe la imagen, moverla al directorio
            move_uploaded_file($imgTempPath, $imgPath3);
        }
        // Si la imagen ya existe, no hacer nada, mantener el archivo tal como está
    } else {
        // Si no se sube imagen, no modificar la ruta de la imagen en la base de datos
        $sql = "SELECT ImagenHorario2Ba FROM bachillerato WHERE idBa = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imgPath3 = $row['ImagenHorario2Ba'];  // Usamos la imagen existente
        } else {
            $imgPath3 = null;
        }
    }

    if (isset($_FILES['img-horario3bachillerato']) && $_FILES['img-horario3bachillerato']['error'] == 0) {
        $imgTempPath = $_FILES['img-horario3bachillerato']['tmp_name'];
        $imgName = $_FILES['img-horario3bachillerato']['name'];
        $imgPath4 = "img/" . $imgName;  // Ruta de destino con el nombre original

        // Verificar si la imagen ya existe
        if (!file_exists($imgPath4)) {
            // Si no existe la imagen, moverla al directorio
            move_uploaded_file($imgTempPath, $imgPath4);
        }
        // Si la imagen ya existe, no hacer nada, mantener el archivo tal como está
    } else {
        // Si no se sube imagen, no modificar la ruta de la imagen en la base de datos
        $sql = "SELECT ImagenHorario3Ba FROM bachillerato WHERE idBa = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imgPath4 = $row['ImagenHorario3Ba'];  // Usamos la imagen existente
        } else {
            $imgPath4 = null;
        }
    }

    if (isset($_FILES['img-horario4bachillerato']) && $_FILES['img-horario4bachillerato']['error'] == 0) {
        $imgTempPath = $_FILES['img-horario4bachillerato']['tmp_name'];
        $imgName = $_FILES['img-horario4bachillerato']['name'];
        $imgPath5 = "img/" . $imgName;  // Ruta de destino con el nombre original

        // Verificar si la imagen ya existe
        if (!file_exists($imgPath5)) {
            // Si no existe la imagen, moverla al directorio
            move_uploaded_file($imgTempPath, $imgPath5);
        }
        // Si la imagen ya existe, no hacer nada, mantener el archivo tal como está
    } else {
        // Si no se sube imagen, no modificar la ruta de la imagen en la base de datos
        $sql = "SELECT ImagenHorario4Ba FROM bachillerato WHERE idBa = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imgPath5 = $row['ImagenHorario4Ba'];  // Usamos la imagen existente
        } else {
            $imgPath5 = null;
        }
    }

    if (isset($_FILES['img-horario5bachillerato']) && $_FILES['img-horario5bachillerato']['error'] == 0) {
        $imgTempPath = $_FILES['img-horario5bachillerato']['tmp_name'];
        $imgName = $_FILES['img-horario5bachillerato']['name'];
        $imgPath6 = "img/" . $imgName;  // Ruta de destino con el nombre original

        // Verificar si la imagen ya existe
        if (!file_exists($imgPath6)) {
            // Si no existe la imagen, moverla al directorio
            move_uploaded_file($imgTempPath, $imgPath6);
        }
        // Si la imagen ya existe, no hacer nada, mantener el archivo tal como está
    } else {
        // Si no se sube imagen, no modificar la ruta de la imagen en la base de datos
        $sql = "SELECT ImagenHorario5Ba FROM bachillerato WHERE idBa = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imgPath6 = $row['ImagenHorario5Ba'];  // Usamos la imagen existente
        } else {
            $imgPath6 = null;
        }
    }

    if (isset($_FILES['img-horario6bachillerato']) && $_FILES['img-horario6bachillerato']['error'] == 0) {
        $imgTempPath = $_FILES['img-horario6bachillerato']['tmp_name'];
        $imgName = $_FILES['img-horario6bachillerato']['name'];
        $imgPath7 = "img/" . $imgName;  // Ruta de destino con el nombre original

        // Verificar si la imagen ya existe
        if (!file_exists($imgPath7)) {
            // Si no existe la imagen, moverla al directorio
            move_uploaded_file($imgTempPath, $imgPath7);
        }
        // Si la imagen ya existe, no hacer nada, mantener el archivo tal como está
    } else {
        // Si no se sube imagen, no modificar la ruta de la imagen en la base de datos
        $sql = "SELECT ImagenHorario6Ba FROM bachillerato WHERE idBa = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imgPath7 = $row['ImagenHorario6Ba'];  // Usamos la imagen existente
        } else {
            $imgPath7 = null;
        }
    }

    if (isset($_FILES['img-horario7bachillerato']) && $_FILES['img-horario7bachillerato']['error'] == 0) {
        $imgTempPath = $_FILES['img-horario7bachillerato']['tmp_name'];
        $imgName = $_FILES['img-horario7bachillerato']['name'];
        $imgPath8 = "img/" . $imgName;  // Ruta de destino con el nombre original

        // Verificar si la imagen ya existe
        if (!file_exists($imgPath8)) {
            // Si no existe la imagen, moverla al directorio
            move_uploaded_file($imgTempPath, $imgPath8);
        }
        // Si la imagen ya existe, no hacer nada, mantener el archivo tal como está
    } else {
        // Si no se sube imagen, no modificar la ruta de la imagen en la base de datos
        $sql = "SELECT ImagenHorario7Ba FROM bachillerato WHERE idBa = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imgPath8 = $row['ImagenHorario7Ba'];  // Usamos la imagen existente
        } else {
            $imgPath8 = null;
        }
    }

    if (isset($_FILES['img-horario8bachillerato']) && $_FILES['img-horario8bachillerato']['error'] == 0) {
        $imgTempPath = $_FILES['img-horario8bachillerato']['tmp_name'];
        $imgName = $_FILES['img-horario8bachillerato']['name'];
        $imgPath9 = "img/" . $imgName;  // Ruta de destino con el nombre original

        // Verificar si la imagen ya existe
        if (!file_exists($imgPath9)) {
            // Si no existe la imagen, moverla al directorio
            move_uploaded_file($imgTempPath, $imgPath9);
        }
        // Si la imagen ya existe, no hacer nada, mantener el archivo tal como está
    } else {
        // Si no se sube imagen, no modificar la ruta de la imagen en la base de datos
        $sql = "SELECT ImagenHorario8Ba FROM bachillerato WHERE idBa = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imgPath9 = $row['ImagenHorario8Ba'];  // Usamos la imagen existente
        } else {
            $imgPath9 = null;
        }
    }

    if (isset($_FILES['img-horario9bachillerato']) && $_FILES['img-horario9bachillerato']['error'] == 0) {
        $imgTempPath = $_FILES['img-horario9bachillerato']['tmp_name'];
        $imgName = $_FILES['img-horario9bachillerato']['name'];
        $imgPath10 = "img/" . $imgName;  // Ruta de destino con el nombre original

        // Verificar si la imagen ya existe
        if (!file_exists($imgPath10)) {
            // Si no existe la imagen, moverla al directorio
            move_uploaded_file($imgTempPath, $imgPath10);
        }
        // Si la imagen ya existe, no hacer nada, mantener el archivo tal como está
    } else {
        // Si no se sube imagen, no modificar la ruta de la imagen en la base de datos
        $sql = "SELECT ImagenHorario9Ba FROM bachillerato WHERE idBa = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imgPath10 = $row['ImagenHorario9Ba'];  // Usamos la imagen existente
        } else {
            $imgPath10 = null;
        }
    }

    if (isset($_FILES['img-horario10bachillerato']) && $_FILES['img-horario10bachillerato']['error'] == 0) {
        $imgTempPath = $_FILES['img-horario10bachillerato']['tmp_name'];
        $imgName = $_FILES['img-horario10bachillerato']['name'];
        $imgPath11 = "img/" . $imgName;  // Ruta de destino con el nombre original

        // Verificar si la imagen ya existe
        if (!file_exists($imgPath11)) {
            // Si no existe la imagen, moverla al directorio
            move_uploaded_file($imgTempPath, $imgPath11);
        }
        // Si la imagen ya existe, no hacer nada, mantener el archivo tal como está
    } else {
        // Si no se sube imagen, no modificar la ruta de la imagen en la base de datos
        $sql = "SELECT ImagenHorario10Ba FROM bachillerato WHERE idBa = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imgPath11 = $row['ImagenHorario10Ba'];  // Usamos la imagen existente
        } else {
            $imgPath11 = null;
        }
    }

    if (isset($_FILES['img-horario11bachillerato']) && $_FILES['img-horario11bachillerato']['error'] == 0) {
        $imgTempPath = $_FILES['img-horario11bachillerato']['tmp_name'];
        $imgName = $_FILES['img-horario11bachillerato']['name'];
        $imgPath12 = "img/" . $imgName;  // Ruta de destino con el nombre original

        // Verificar si la imagen ya existe
        if (!file_exists($imgPath12)) {
            // Si no existe la imagen, moverla al directorio
            move_uploaded_file($imgTempPath, $imgPath12);
        }
        // Si la imagen ya existe, no hacer nada, mantener el archivo tal como está
    } else {
        // Si no se sube imagen, no modificar la ruta de la imagen en la base de datos
        $sql = "SELECT ImagenHorario11Ba FROM bachillerato WHERE idBa = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imgPath12 = $row['ImagenHorario11Ba'];  // Usamos la imagen existente
        } else {
            $imgPath12 = null;
        }
    }

    if (isset($_FILES['img-horario12bachillerato']) && $_FILES['img-horario12bachillerato']['error'] == 0) {
        $imgTempPath = $_FILES['img-horario12bachillerato']['tmp_name'];
        $imgName = $_FILES['img-horario12bachillerato']['name'];
        $imgPath13 = "img/" . $imgName;  // Ruta de destino con el nombre original

        // Verificar si la imagen ya existe
        if (!file_exists($imgPath13)) {
            // Si no existe la imagen, moverla al directorio
            move_uploaded_file($imgTempPath, $imgPath13);
        }
        // Si la imagen ya existe, no hacer nada, mantener el archivo tal como está
    } else {
        // Si no se sube imagen, no modificar la ruta de la imagen en la base de datos
        $sql = "SELECT ImagenHorario12Ba FROM bachillerato WHERE idBa = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imgPath13 = $row['ImagenHorario12Ba'];  // Usamos la imagen existente
        } else {
            $imgPath13 = null;
        }
    }

    if (isset($_FILES['img-horario13bachillerato']) && $_FILES['img-horario13bachillerato']['error'] == 0) {
        $imgTempPath = $_FILES['img-horario13bachillerato']['tmp_name'];
        $imgName = $_FILES['img-horario13bachillerato']['name'];
        $imgPath14 = "img/" . $imgName;  // Ruta de destino con el nombre original

        // Verificar si la imagen ya existe
        if (!file_exists($imgPath14)) {
            // Si no existe la imagen, moverla al directorio
            move_uploaded_file($imgTempPath, $imgPath14);
        }
        // Si la imagen ya existe, no hacer nada, mantener el archivo tal como está
    } else {
        // Si no se sube imagen, no modificar la ruta de la imagen en la base de datos
        $sql = "SELECT ImagenHorario13Ba FROM bachillerato WHERE idBa = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imgPath14 = $row['ImagenHorario13Ba'];  // Usamos la imagen existente
        } else {
            $imgPath14 = null;
        }
    }

    if (isset($_FILES['img-horario14bachillerato']) && $_FILES['img-horario14bachillerato']['error'] == 0) {
        $imgTempPath = $_FILES['img-horario14bachillerato']['tmp_name'];
        $imgName = $_FILES['img-horario14bachillerato']['name'];
        $imgPath15 = "img/" . $imgName;  // Ruta de destino con el nombre original

        // Verificar si la imagen ya existe
        if (!file_exists($imgPath15)) {
            // Si no existe la imagen, moverla al directorio
            move_uploaded_file($imgTempPath, $imgPath15);
        }
        // Si la imagen ya existe, no hacer nada, mantener el archivo tal como está
    } else {
        // Si no se sube imagen, no modificar la ruta de la imagen en la base de datos
        $sql = "SELECT ImagenHorario14Ba FROM bachillerato WHERE idBa = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imgPath15 = $row['ImagenHorario14Ba'];  // Usamos la imagen existente
        } else {
            $imgPath15 = null;
        }
    }

    if (isset($_FILES['img-horario15bachillerato']) && $_FILES['img-horario15bachillerato']['error'] == 0) {
        $imgTempPath = $_FILES['img-horario15bachillerato']['tmp_name'];
        $imgName = $_FILES['img-horario15bachillerato']['name'];
        $imgPath16 = "img/" . $imgName;  // Ruta de destino con el nombre original

        // Verificar si la imagen ya existe
        if (!file_exists($imgPath16)) {
            // Si no existe la imagen, moverla al directorio
            move_uploaded_file($imgTempPath, $imgPath16);
        }
        // Si la imagen ya existe, no hacer nada, mantener el archivo tal como está
    } else {
        // Si no se sube imagen, no modificar la ruta de la imagen en la base de datos
        $sql = "SELECT ImagenHorario15Ba FROM bachillerato WHERE idBa = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imgPath16 = $row['ImagenHorario15Ba'];  // Usamos la imagen existente
        } else {
            $imgPath16 = null;
        }
    }

    if (isset($_FILES['img-horario16bachillerato']) && $_FILES['img-horario16bachillerato']['error'] == 0) {
        $imgTempPath = $_FILES['img-horario16bachillerato']['tmp_name'];
        $imgName = $_FILES['img-horario16bachillerato']['name'];
        $imgPath17 = "img/" . $imgName;  // Ruta de destino con el nombre original

        // Verificar si la imagen ya existe
        if (!file_exists($imgPath17)) {
            // Si no existe la imagen, moverla al directorio
            move_uploaded_file($imgTempPath, $imgPath17);
        }
        // Si la imagen ya existe, no hacer nada, mantener el archivo tal como está
    } else {
        // Si no se sube imagen, no modificar la ruta de la imagen en la base de datos
        $sql = "SELECT ImagenHorario16Ba FROM bachillerato WHERE idBa = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imgPath17 = $row['ImagenHorario16Ba'];  // Usamos la imagen existente
        } else {
            $imgPath17 = null;
        }
    }

    if (isset($_FILES['img-horario17bachillerato']) && $_FILES['img-horario17bachillerato']['error'] == 0) {
        $imgTempPath = $_FILES['img-horario17bachillerato']['tmp_name'];
        $imgName = $_FILES['img-horario17bachillerato']['name'];
        $imgPath18 = "img/" . $imgName;  // Ruta de destino con el nombre original

        // Verificar si la imagen ya existe
        if (!file_exists($imgPath18)) {
            // Si no existe la imagen, moverla al directorio
            move_uploaded_file($imgTempPath, $imgPath18);
        }
        // Si la imagen ya existe, no hacer nada, mantener el archivo tal como está
    } else {
        // Si no se sube imagen, no modificar la ruta de la imagen en la base de datos
        $sql = "SELECT ImagenHorario17Ba FROM bachillerato WHERE idBa = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imgPath18 = $row['ImagenHorario17Ba'];  // Usamos la imagen existente
        } else {
            $imgPath18 = null;
        }
    }

    if (isset($_FILES['img-horario18bachillerato']) && $_FILES['img-horario18bachillerato']['error'] == 0) {
        $imgTempPath = $_FILES['img-horario18bachillerato']['tmp_name'];
        $imgName = $_FILES['img-horario18bachillerato']['name'];
        $imgPath19 = "img/" . $imgName;  // Ruta de destino con el nombre original

        // Verificar si la imagen ya existe
        if (!file_exists($imgPath19)) {
            // Si no existe la imagen, moverla al directorio
            move_uploaded_file($imgTempPath, $imgPath19);
        }
        // Si la imagen ya existe, no hacer nada, mantener el archivo tal como está
    } else {
        // Si no se sube imagen, no modificar la ruta de la imagen en la base de datos
        $sql = "SELECT ImagenHorario18Ba FROM bachillerato WHERE idBa = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imgPath19 = $row['ImagenHorario18Ba'];  // Usamos la imagen existente
        } else {
            $imgPath19 = null;
        }
    }

    // Actualizar los datos en la base de datos
    $sql = "UPDATE bachillerato SET 
                TituloBa = ?, 
                Parrafo1Ba = ?, 
                Parrafo2Ba = ?, 
                Parrafo3Ba = ?, 
                ImagenBa = ?,
                ImagenHorario1Ba = ?,
                ImagenHorario2Ba = ?,
                ImagenHorario3Ba = ?,
                ImagenHorario4Ba = ?,
                ImagenHorario5Ba = ?,
                ImagenHorario6Ba = ?,
                ImagenHorario7Ba = ?,
                ImagenHorario8Ba = ?,
                ImagenHorario9Ba = ?,
                ImagenHorario10Ba = ?,
                ImagenHorario11Ba = ?,
                ImagenHorario12Ba = ?,
                ImagenHorario13Ba = ?,
                ImagenHorario14Ba = ?,
                ImagenHorario15Ba = ?,
                ImagenHorario16Ba = ?,
                ImagenHorario17Ba = ?,
                ImagenHorario18Ba = ?
            WHERE idBa = 1";  // Suponiendo que idBa = 1 es el único registro

    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sssssssssssssssssssssss', $titulo, $texto1, $texto2, $texto3, $imgPath1, $imgPath2, $imgPath3, $imgPath4, $imgPath5, $imgPath6, $imgPath7, $imgPath8, $imgPath9, $imgPath10, $imgPath11, $imgPath12, $imgPath13, $imgPath14, $imgPath15, $imgPath16, $imgPath17, $imgPath18, $imgPath19);
    
    if ($stmt->execute()) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'error' => $stmt->error]);
    }

    $stmt->close();
}

$conn->close();
?>
