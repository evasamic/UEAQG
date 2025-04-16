<?php
// Incluir la conexión a la base de datos
include('Conexion.php');  // Asegúrate de que el archivo Conexion.php esté correctamente configurado

// Realizar la consulta a la base de datos para obtener los datos
$query = "SELECT * FROM info WHERE idInfo = 1";  // Suponiendo que quieres obtener la primera fila
$resultado = $conn->query($query);

// Verificar si se obtuvo un resultado
if ($resultado->num_rows > 0) {
    // Obtener los datos de la fila
    $row = $resultado->fetch_assoc();
} else {
    echo "No se encontraron datos.";
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
    <link rel="stylesheet" href="Editores.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>
<body>
<div class="login-container">
        <a href="Recursos.html" class="login-link">
            <i class="fas fa-user"></i> Iniciar Sesión
        </a>
    </div>
    <header>
        <img src="img/Encabezado1.png" alt="Imagen de la Institución" width="1171" height="114">
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Inicio</a></li>
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
            <li><a href="Info.php" class="active">Información</a></li>
            <li><a href="Recursos.html">Recursos</a></li>
        </ul>
    </nav>        

    <main class="elemental-container">
        <section id="elemental">
            <h2>INFORMACIÓN</h2>
            <div class="title-line"></div> <!-- Línea verde debajo del título -->
            <p>
                <label for="username">Zona:</label>
                <?php echo $row['ZonaInfo']; ?>
            </p>
            <p>
                <label for="username">Provincia:</label>
                <?php echo $row['ProvinciaInfo']; ?>
            </p>
            <p>
                <label for="username">Código de provincia:</label>
                <?php echo $row['CodProInfo']; ?>
            </p>
            <p>
                <label for="username">Cantón:</label>
                <?php echo $row['CantonInfo']; ?>
            </p>
            <p>
                <label for="username">Código de cantón:</label>
                <?php echo $row['CodCanInfo']; ?>
            </p>
            <p>
                <label for="username">Parroquia:</label>
                <?php echo $row['ParroquiaInfo']; ?>
            </p>
            <p>
                <label for="username">Código de parroquia:</label>
                <?php echo $row['CodParroquiaInfo']; ?>
            </p>
            <p>
                <label for="username">Código de institución educativa:</label>
                <?php echo $row['CodInsEduInfo']; ?>
            </p>
            <p>
                <label for="username">Institución educativa:</label>
                <?php echo $row['InsEduInfo']; ?>
            </p>
            <p>
                <label for="username">Escolarización:</label>
                <?php echo $row['EscolaridadInfo']; ?>
            </p>
            <p>
                <label for="username">Tipo de educación:</label>
                <?php echo $row['TipEduInfo']; ?>
            </p>
            <p>
                <label for="username">Nivel de educación:</label>
                <?php echo $row['NivelEduInfo']; ?>
            </p>
            <p>
                <label for="username">Sostenimiento:</label>
                <?php echo $row['SostenimientoInfo']; ?>
            </p>
            <p>
                <label for="username">Área:</label>
                <?php echo $row['AreaInfo']; ?>
            </p>
            <p>
                <label for="username">Régimen escolar:</label>
                <?php echo $row['RegimenescInfo']; ?>
            </p>
            <p>
                <label for="username">Jurisdicción:</label>
                <?php echo $row['JurisdiccionInfo']; ?>
            </p>
            <p>
                <label for="username">Modalidad:</label>
                <?php echo $row['ModalidadInfo']; ?>
            </p>
            <p>
                <label for="username">Jornada:</label>
                <?php echo $row['JornadaInfo']; ?>
            </p>
            <p>
                <label for="username">Tenencia de inmueble/edificio:</label>
                <?php echo $row['TenenciaInfo']; ?>
            </p>
            <p>
                <label for="username">Vía de acceso:</label>
                <?php echo $row['AccesoInfo']; ?>
            </p>
            <p>
                <label for="username">Docentes:</label>
                <?php echo $row['DocentesInfo']; ?>
            </p>
            <p>
                <label for="username">Estudiantes:</label>
                <?php echo $row['EstudiantesInfo']; ?>
            </p>
            <p>
                <label for="username">Padrón oficial:</label>
                <?php echo $row['PadronInfo']; ?>
            </p>
        </section>
    </main>

    <footer>
        <p>© 2024 Unidad Educativa Alfonso Quiñónez George. Todos los derechos reservados.</p>
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
