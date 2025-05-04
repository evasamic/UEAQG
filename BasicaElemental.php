<?php
// Incluir la conexión a la base de datos
include('Conexion.php');  // Asegúrate de que el archivo Conexion.php esté correctamente configurado

// Realizar la consulta a la base de datos para obtener los datos
$query = "SELECT * FROM basicae WHERE idBE = 1";  // Suponiendo que quieres obtener la primera fila
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
                    <li><a href="BasicaElemental.php" class="active">Básica elemental</a></li>
                    <li><a href="BasicaMedia.php">Básica media</a></li>
                    <li><a href="BasicaSuperior.php">Básica superior</a></li>
                    <li><a href="Bachillerato.php">Bachillerato</a></li>
                </ul>
            </li>            
            <li><a href="Info.php">Información</a></li>
        </ul>
    </nav>        
    
    <div>   
        <img src="<?php echo $row['ImagenBE']; ?>" alt="Basica Elemental AQG" class="full-width-image">
    </div>

    <main class="elemental-container">
        <section id="elemental">
            <h2><?php echo $row['TituloBE']; ?></h2>
            <div class="title-line"></div> <!-- Línea verde debajo del título -->
            <p>
                <?php echo $row['Parrafo1BE']; ?>
            </p>
            <p>
                <?php echo $row['Parrafo2BE']; ?>
            </p>
            <p>
                <?php echo $row['Parrafo3BE']; ?>
            </p>

            <!-- HORARIOS -->
            <div class="accordion-container">
                <button class="accordion-button" onclick="toggleMainAccordion()">HORARIOS</button>
                <div id="main-accordion-content" class="accordion-content">

                    <!-- 2do -->
                    <div class="accordion-container">
                        <button class="accordion-button" onclick="toggleGradeAccordion('2do')">2do</button>
                        <div id="accordion-2do" class="accordion-content">
                            <button class="accordion-button" onclick="toggleAccordion('1')">2do paralelo A</button>
                            <div id="accordion-content1" class="accordion-content">
                                <img src="<?php echo $row['ImagenHorario1BE']; ?>" class="horario">
                            </div>
                            <button class="accordion-button" onclick="toggleAccordion('2')">2do paralelo B</button>
                            <div id="accordion-content2" class="accordion-content">
                                <img src="<?php echo $row['ImagenHorario2BE']; ?>" class="horario">
                            </div>
                            <button class="accordion-button" onclick="toggleAccordion('3')">2do paralelo C</button>
                            <div id="accordion-content3" class="accordion-content">
                                <img src="<?php echo $row['ImagenHorario3BE']; ?>" class="horario">
                            </div>
                        </div>
                    </div>

                    <!-- 3ro -->
                    <div class="accordion-container">
                        <button class="accordion-button" onclick="toggleGradeAccordion('3ro')">3ro</button>
                        <div id="accordion-3ro" class="accordion-content">
                            <button class="accordion-button" onclick="toggleAccordion('4')">3ro paralelo A</button>
                            <div id="accordion-content4" class="accordion-content">
                                <img src="<?php echo $row['ImagenHorario4BE']; ?>" class="horario">
                            </div>
                            <button class="accordion-button" onclick="toggleAccordion('5')">3ro paralelo B</button>
                            <div id="accordion-content5" class="accordion-content">
                                <img src="<?php echo $row['ImagenHorario5BE']; ?>" class="horario">
                            </div>
                            <button class="accordion-button" onclick="toggleAccordion('6')">3ro paralelo C</button>
                            <div id="accordion-content6" class="accordion-content">
                                <img src="<?php echo $row['ImagenHorario6BE']; ?>" class="horario">
                            </div>
                        </div>
                    </div>

                    <!-- 4to -->
                    <div class="accordion-container">
                        <button class="accordion-button" onclick="toggleGradeAccordion('4to')">4to</button>
                        <div id="accordion-4to" class="accordion-content">
                            <button class="accordion-button" onclick="toggleAccordion('7')">4to paralelo A</button>
                            <div id="accordion-content7" class="accordion-content">
                                <img src="<?php echo $row['ImagenHorario7BE']; ?>" class="horario">
                            </div>
                            <button class="accordion-button" onclick="toggleAccordion('8')">4to paralelo B</button>
                            <div id="accordion-content8" class="accordion-content">
                                <img src="<?php echo $row['ImagenHorario8BE']; ?>" class="horario">
                            </div>
                            <button class="accordion-button" onclick="toggleAccordion('9')">4to paralelo C</button>
                            <div id="accordion-content9" class="accordion-content">
                                <img src="<?php echo $row['ImagenHorario9BE']; ?>" class="horario">
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
