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

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unidad Educativa Alfonso Quiñónez George</title>
    <link rel="icon" type="image/png" href="img/Logo-AQG.png">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="chatbot.css">
    <link rel="stylesheet" href="Noticias.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <img src="img/ENCABEZADO.png" alt="Imagen de la Institución" width="1200" height="138">
    </header>
    <nav>
        <ul>
            <li><a href="index.html">Presentación</a></li>
            <li class="dropdown">
                <a href="javascript:void(0);" class="dropdown-btn">¿Quiénes somos?</a>
                <ul class="dropdown-content">
                    <li><a href="NuestraHistoria.html">Nuestra Historia</a></li>
                    <li><a href="MisionVision.html">Misión y Visión</a></li>
                    <li><a href="Autoridades.html">Autoridades</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0);" class="dropdown-btn" id="oferta-btn">Oferta Educativa</a>
                <ul class="dropdown-content" id="oferta-dropdown">
                    <li><a href="Preparatoria.php">Preparatoria</a></li>
                    <li><a href="BasicaElemental.php">Básica elemental</a></li>
                    <li><a href="BasicaMedia.php">Básica media</a></li>
                    <li><a href="BasicaSuperior.php">Básica superior</a></li>
                    <li><a href="Bachillerato.php">Bachillerato general unificado</a></li>
                </ul>
            </li>            
            <li><a href="Noticias.php" class="active">Noticias</a></li>
            <li><a href="Recursos.html">Recursos</a></li>
        </ul>
    </nav>    
    
    <body>
        <div class="noticias-container">
            <div class="noticia" style="background-image: url('<?php echo $noticia1['ImagenN1']; ?>');">
                <h2><?php echo $noticia1['TituloN1']; ?></h2>
                <p class="parrafo"><?php echo $noticia1['DescripN1']; ?></p>
                <a href="Noticia1.php" class="leer-mas">Leer más</a>
            </div>
            <div class="noticia" style="background-image: url('<?php echo $noticia2['ImagenN2']; ?>');">
                <h2><?php echo $noticia2['TituloN2']; ?></h2>
                <p class="parrafo"><?php echo $noticia2['DescripN2']; ?></p>
                <a href="Noticia2.php" class="leer-mas">Leer más</a>
            </div>
            <div class="noticia" style="background-image: url('<?php echo $noticia3['ImagenN3']; ?>');">
                <h2><?php echo $noticia3['TituloN3']; ?></h2>
                <p class="parrafo"><?php echo $noticia3['DescripN3']; ?></p>
                <a href="Noticia3.php" class="leer-mas">Leer más</a>
            </div>
        </div>
    </body>

    <footer>
        <p class="pie"> © 2024 Unidad Educativa Alfonso Quiñónez George. Todos los derechos reservados.</p>
    </footer>
    <div id="chatbot-container">
        <div id="chatbox" class="hidden">
            <div class="chatbox-header">
                <span class="chatbox-title">Chat</span>
                <button id="close-chatbot" onclick="toggleChat()">X</button>
            </div>
            <div id="chatlog"></div>
            <div class="chatbox-input">
                <input type="text" id="userInput" placeholder="Escribe un mensaje...">
                <button onclick="sendMessage()">➤</button>
            </div>
        </div>
        <button id="chatbot-button" onclick="toggleChat()">Chat</button>
    </div>
    <script src="chatbot.js"></script>
    <script src="btnQuienesSomos.js"></script>
</body>
</html>
