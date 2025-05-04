<?php
// Incluir la conexión a la base de datos
include('Conexion.php');  // Asegúrate de que el archivo Conexion.php esté correctamente configurado

// Realizar la consulta a la base de datos para obtener los datos
$query = "SELECT * FROM basicam WHERE idBM = 1";  // Suponiendo que quieres obtener la primera fila
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
                    <li><a href="BasicaMedia.php" class="active">Básica media</a></li>
                    <li><a href="BasicaSuperior.php">Básica superior</a></li>
                    <li><a href="Bachillerato.php">Bachillerato</a></li>
                </ul>
            </li>            
            <li><a href="Info.php">Información</a></li>
        </ul>
    </nav>        
    
    <div>   
        <img src="<?php echo $row['ImagenBM']; ?>" alt="Basica Media AQG" class="full-width-image">
    </div>

    <main class="elemental-container">
        <section id="elemental">
            <h2><?php echo $row['TituloBM']; ?></h2>
            <div class="title-line"></div> <!-- Línea verde debajo del título -->
            <p>
                <?php echo $row['Parrafo1BM']; ?>
            </p>
            <p>
                <?php echo $row['Parrafo2BM']; ?>
            </p>
            <p>
                <?php echo $row['Parrafo3BM']; ?>
            </p>

            <!-- HORARIOS -->
            <div class="accordion-container">
                <button class="accordion-button" onclick="toggleMainAccordion()">HORARIOS</button>
                <div id="main-accordion-content" class="accordion-content">

                    <!-- 5to -->
                    <div class="accordion-container">
                        <button class="accordion-button" onclick="toggleGradeAccordion('5to')">5to</button>
                        <div id="accordion-5to" class="accordion-content">
                            <button class="accordion-button" onclick="toggleAccordion('1')">5to paralelo A</button>
                            <div id="accordion-content1" class="accordion-content">
                                <img src="<?php echo $row['ImagenHorario1BM']; ?>" class="horario">
                            </div>
                            <button class="accordion-button" onclick="toggleAccordion('2')">5to paralelo B</button>
                            <div id="accordion-content2" class="accordion-content">
                                <img src="<?php echo $row['ImagenHorario2BM']; ?>" class="horario">
                            </div>
                            <button class="accordion-button" onclick="toggleAccordion('3')">5to paralelo C</button>
                            <div id="accordion-content3" class="accordion-content">
                                <img src="<?php echo $row['ImagenHorario3BM']; ?>" class="horario">
                            </div>
                        </div>
                    </div>

                    <!-- 6to -->
                    <div class="accordion-container">
                        <button class="accordion-button" onclick="toggleGradeAccordion('6to')">6to</button>
                        <div id="accordion-6to" class="accordion-content">
                            <button class="accordion-button" onclick="toggleAccordion('4')">6to paralelo A</button>
                            <div id="accordion-content4" class="accordion-content">
                                <img src="<?php echo $row['ImagenHorario4BM']; ?>" class="horario">
                            </div>
                            <button class="accordion-button" onclick="toggleAccordion('5')">6to paralelo B</button>
                            <div id="accordion-content5" class="accordion-content">
                                <img src="<?php echo $row['ImagenHorario5BM']; ?>" class="horario">
                            </div>
                        </div>
                    </div>

                    <!-- 7mo -->
                    <div class="accordion-container">
                        <button class="accordion-button" onclick="toggleGradeAccordion('7mo')">7mo</button>
                        <div id="accordion-7mo" class="accordion-content">
                            <button class="accordion-button" onclick="toggleAccordion('6')">7mo paralelo A</button>
                            <div id="accordion-content6" class="accordion-content">
                                <img src="<?php echo $row['ImagenHorario6BM']; ?>" class="horario">
                            </div>
                            <button class="accordion-button" onclick="toggleAccordion('7')">7mo paralelo B</button>
                            <div id="accordion-content7" class="accordion-content">
                                <img src="<?php echo $row['ImagenHorario7BM']; ?>" class="horario">
                            </div>
                            <button class="accordion-button" onclick="toggleAccordion('8')">7mo paralelo C</button>
                            <div id="accordion-content8" class="accordion-content">
                                <img src="<?php echo $row['ImagenHorario8BM']; ?>" class="horario">
                            </div>
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
