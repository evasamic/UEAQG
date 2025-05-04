<?php
// Incluir la conexión a la base de datos
include('Conexion.php');  // Asegúrate de que el archivo Conexion.php esté correctamente configurado

// Realizar la consulta a la base de datos para obtener los datos
$query = "SELECT * FROM preparatoria WHERE idPrepa = 1";  // Suponiendo que quieres obtener la primera fila
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
                    <li><a href="Proposito.html">Propósito / Misionero</a></li>
                    <li><a href="Autoridades.html">Autoridades</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="javascript:void(0);" class="dropdown-btn" id="oferta-btn">Oferta Educativa</a>
                <ul class="dropdown-content" id="oferta-dropdown">
                    <li><a href="Inicial.php">Inicial</a></li>
                    <li><a href="Preparatoria.php">Preparatoria</a></li>
                    <li><a href="BasicaElemental.php">Básica elemental</a></li>
                    <li><a href="BasicaMedia.php">Básica media</a></li>
                    <li><a href="BasicaSuperior.php">Básica superior</a></li>
                    <li><a href="Bachillerato.php">Bachillerato</a></li>
                </ul>
            </li>            
            <li><a href="Info.php">Información</a></li>
        </ul>
    </nav>      
    
    <div>   
        <img src="<?php echo $row['ImagenPrepa']; ?>" alt="Preparatoria AQG" class="full-width-image">
    </div>

    <main class="elemental-container">
        <section id="elemental">
            <h2><?php echo $row['TituloPrepa']; ?></h2>
            <div class="title-line"></div> <!-- Línea verde debajo del título -->
            <p>
                <?php echo $row['Parrafo1Prepa']; ?>
            </p>
            <p>
                <?php echo $row['Parrafo2Prepa']; ?>
            </p>
            <p>
                <?php echo $row['Parrafo3Prepa']; ?>
            </p>

            <!-- HORARIOS -->
            <div class="accordion-container">
                <button class="accordion-button" onclick="toggleMainAccordion()">HORARIOS</button>
                <div id="main-accordion-content" class="accordion-content">
                    <div class="accordion-container">
                        <button class="accordion-button" onclick="toggleAccordion1()">Preparatoria paralelo A</button>
                        <div id="accordion-content1" class="accordion-content">
                            <p><img src="<?php echo $row['ImagenHorario1Prepa']; ?>" alt="Inicial AQG" class="horario"></p>
                        </div>
                    </div>
                    <div class="accordion-container">
                        <button class="accordion-button" onclick="toggleAccordion2()">Preparatoria paralelo B</button>
                        <div id="accordion-content2" class="accordion-content">
                            <p><img src="<?php echo $row['ImagenHorario2Prepa']; ?>" alt="Inicial AQG" class="horario"></p>
                        </div>
                    </div>
                    <div class="accordion-container">
                        <button class="accordion-button" onclick="toggleAccordion3()">Preparatoria paralelo C</button>
                        <div id="accordion-content3" class="accordion-content">
                            <p><img src="<?php echo $row['ImagenHorario3Prepa']; ?>" alt="Inicial AQG" class="horario"></p>
                        </div>
                    </div>
                </div>
            </div>
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
    <script src="Horarios.js"></script>
    <script src="chatbot.js"></script>
    <script src="btnQuienesSomos.js"></script>
</body>
</html>
