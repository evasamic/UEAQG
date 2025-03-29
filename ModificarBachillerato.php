<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include("Conexion.php");

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Obtener los datos de la tabla 'bachillerato'
    $sql = "SELECT TituloBa, Parrafo1Ba, Parrafo2Ba, Parrafo3Ba, ImagenBa FROM bachillerato WHERE idBa = 1";  // Suponiendo que idBa = 1 es el único registro
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
        $imgPath = "img/" . $imgName;  // Ruta de destino con el nombre original

        // Verificar si la imagen ya existe
        if (!file_exists($imgPath)) {
            // Si no existe la imagen, moverla al directorio
            move_uploaded_file($imgTempPath, $imgPath);
        }
        // Si la imagen ya existe, no hacer nada, mantener el archivo tal como está
    } else {
        // Si no se sube imagen, no modificar la ruta de la imagen en la base de datos
        $sql = "SELECT ImagenBa FROM bachillerato WHERE idBa = 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $imgPath = $row['ImagenBa'];  // Usamos la imagen existente
        } else {
            $imgPath = null;
        }
    }

    // Actualizar los datos en la base de datos
    $sql = "UPDATE bachillerato SET 
                TituloBa = ?, 
                Parrafo1Ba = ?, 
                Parrafo2Ba = ?, 
                Parrafo3Ba = ?, 
                ImagenBa = ?
            WHERE idBa = 1";  // Suponiendo que idBa = 1 es el único registro

    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sssss', $titulo, $texto1, $texto2, $texto3, $imgPath);
    
    if ($stmt->execute()) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'error' => $stmt->error]);
    }

    $stmt->close();
}

$conn->close();
?>
