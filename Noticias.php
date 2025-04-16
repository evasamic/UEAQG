<?php
// Incluir la conexión a la base de datos
include('Conexion.php');  // Asegúrate de que el archivo Conexion.php esté correctamente configurado

// Realizar la consulta a la base de datos para obtener los datos
$query_noticia1 = "SELECT * FROM noticia1 WHERE idN1 = 1";  // Suponiendo que quieres obtener la primera fila
$query_noticia2 = "SELECT * FROM noticia2 WHERE idN2 = 1";
$query_noticia3 = "SELECT * FROM noticia3 WHERE idN3 = 1";

$resultado_noticia1 = $conn->query($query_noticia1);
$resultado_noticia2 = $conn->query($query_noticia2);
$resultado_noticia3 = $conn->query($query_noticia3);


// Verificar si se obtuvo un resultado
if ($resultado_noticia1->num_rows > 0) {
    $noticia1 = $resultado_noticia1->fetch_assoc();
} else {
    echo "No se encontró la noticia 1.";
}

if ($resultado_noticia2->num_rows > 0) {
    $noticia2 = $resultado_noticia2->fetch_assoc();
} else {
    echo "No se encontró la noticia 2.";
}

if ($resultado_noticia3->num_rows > 0) {
    $noticia3 = $resultado_noticia3->fetch_assoc();
} else {
    echo "No se encontró la noticia 3.";
}

$conn->close();  // Cerrar la conexión a la base de datos
?>