<?php
// Incluir la conexión a la base de datos
include('Conexion.php');  // Asegúrate de que el archivo Conexion.php esté correctamente configurado

// Realizar la consulta a la base de datos para obtener los datos
$query = "SELECT * FROM bachillerato WHERE idBa = 1";  // Suponiendo que quieres obtener la primera fila
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
                    <li><a href="Bachillerato.php" class="active">Bachillerato</a></li>
                </ul>
            </li>           
            <li><a href="Info.php">Información</a></li>
        </ul>
    </nav>        
    
    <div>   
        <img src="<?php echo $row['ImagenBa']; ?>" alt="Bachillerato AQG" class="full-width-image">
    </div>

    <main class="elemental-container">
        <section id="elemental">
            <h2><?php echo $row['TituloBa']; ?></h2>
            <div class="title-line"></div> <!-- Línea verde debajo del título -->
            <p>
                <?php echo $row['Parrafo1Ba']; ?>
            </p>
            <p>
                <?php echo $row['Parrafo2Ba']; ?>
            </p>
            <p>
                <?php echo $row['Parrafo3Ba']; ?>
            </p>

            <!-- HORARIOS -->
            <div class="accordion-container">
                <button class="accordion-button" onclick="toggleMainAccordion()">HORARIOS</button>
                <div id="main-accordion-content" class="accordion-content">

                    <!-- Bachillerato en Ciencias -->
                    <div class="accordion-container">
                        <button class="accordion-button" onclick="toggleGradeAccordion('ciencias')">Bachillerato en Ciencias</button>
                        <div id="accordion-ciencias" class="accordion-content">
                            
                            <!-- 1ro de Bachillerato -->
                            <div class="accordion-container">
                                <button class="accordion-button" onclick="toggleGradeAccordion('1roCiencias')">1ro de Bachillerato</button>
                                <div id="accordion-1roCiencias" class="accordion-content">
                                    <button class="accordion-button" onclick="toggleAccordion('1')">1ro A</button>
                                    <div id="accordion-content1" class="accordion-content">
                                        <img src="<?php echo $row['ImagenHorario1Ba']; ?>" class="horario">
                                    </div>
                                    <button class="accordion-button" onclick="toggleAccordion('2')">1ro B</button>
                                    <div id="accordion-content2" class="accordion-content">
                                        <img src="<?php echo $row['ImagenHorario2Ba']; ?>" class="horario">
                                    </div>
                                    <button class="accordion-button" onclick="toggleAccordion('3')">1ro C</button>
                                    <div id="accordion-content3" class="accordion-content">
                                        <img src="<?php echo $row['ImagenHorario3Ba']; ?>" class="horario">
                                    </div>
                                </div>
                            </div>

                            <!-- 2do de Bachillerato -->
                            <div class="accordion-container">
                                <button class="accordion-button" onclick="toggleGradeAccordion('2doCiencias')">2do de Bachillerato</button>
                                <div id="accordion-2doCiencias" class="accordion-content">
                                    <button class="accordion-button" onclick="toggleAccordion('4')">2do A</button>
                                    <div id="accordion-content4" class="accordion-content">
                                        <img src="<?php echo $row['ImagenHorario4Ba']; ?>" class="horario">
                                    </div>
                                    <button class="accordion-button" onclick="toggleAccordion('5')">2do B</button>
                                    <div id="accordion-content5" class="accordion-content">
                                        <img src="<?php echo $row['ImagenHorario5Ba']; ?>" class="horario">
                                    </div>
                                    <button class="accordion-button" onclick="toggleAccordion('6')">2do C</button>
                                    <div id="accordion-content6" class="accordion-content">
                                        <img src="<?php echo $row['ImagenHorario6Ba']; ?>" class="horario">
                                    </div>
                                </div>
                            </div>

                            <!-- 3ro de Bachillerato -->
                            <div class="accordion-container">
                                <button class="accordion-button" onclick="toggleGradeAccordion('3roCiencias')">3ro de Bachillerato</button>
                                <div id="accordion-3roCiencias" class="accordion-content">
                                    <button class="accordion-button" onclick="toggleAccordion('7')">3ro A</button>
                                    <div id="accordion-content7" class="accordion-content">
                                        <img src="<?php echo $row['ImagenHorario7Ba']; ?>" class="horario">
                                    </div>
                                    <button class="accordion-button" onclick="toggleAccordion('8')">3ro B</button>
                                    <div id="accordion-content8" class="accordion-content">
                                        <img src="<?php echo $row['ImagenHorario8Ba']; ?>" class="horario">
                                    </div>
                                    <button class="accordion-button" onclick="toggleAccordion('9')">3ro C</button>
                                    <div id="accordion-content9" class="accordion-content">
                                        <img src="<?php echo $row['ImagenHorario9Ba']; ?>" class="horario">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Bachillerato en Servicios Contables -->
                    <div class="accordion-container">
                        <button class="accordion-button" onclick="toggleGradeAccordion('contable')">Bachillerato en Servicios Contables</button>
                        <div id="accordion-contable" class="accordion-content">

                            <!-- 1ro de Bachillerato -->
                            <div class="accordion-container">
                                <button class="accordion-button" onclick="toggleGradeAccordion('1roContable')">1ro de Bachillerato</button>
                                <div id="accordion-1roContable" class="accordion-content">
                                    <button class="accordion-button" onclick="toggleAccordion('10')">1ro A</button>
                                    <div id="accordion-content10" class="accordion-content">
                                        <img src="<?php echo $row['ImagenHorario10Ba']; ?>" class="horario">
                                    </div>
                                    <button class="accordion-button" onclick="toggleAccordion('11')">1ro B</button>
                                    <div id="accordion-content11" class="accordion-content">
                                        <img src="<?php echo $row['ImagenHorario11Ba']; ?>" class="horario">
                                    </div>
                                    <button class="accordion-button" onclick="toggleAccordion('12')">1ro C</button>
                                    <div id="accordion-content12" class="accordion-content">
                                        <img src="<?php echo $row['ImagenHorario12Ba']; ?>" class="horario">
                                    </div>
                                </div>
                            </div>

                            <!-- 2do de Bachillerato -->
                            <div class="accordion-container">
                                <button class="accordion-button" onclick="toggleGradeAccordion('2doContable')">2do de Bachillerato</button>
                                <div id="accordion-2doContable" class="accordion-content">
                                    <button class="accordion-button" onclick="toggleAccordion('13')">2do A</button>
                                    <div id="accordion-content13" class="accordion-content">
                                        <img src="<?php echo $row['ImagenHorario13Ba']; ?>" class="horario">
                                    </div>
                                    <button class="accordion-button" onclick="toggleAccordion('14')">2do B</button>
                                    <div id="accordion-content14" class="accordion-content">
                                        <img src="<?php echo $row['ImagenHorario14Ba']; ?>" class="horario">
                                    </div>
                                    <button class="accordion-button" onclick="toggleAccordion('15')">2do C</button>
                                    <div id="accordion-content15" class="accordion-content">
                                        <img src="<?php echo $row['ImagenHorario15Ba']; ?>" class="horario">
                                    </div>
                                </div>
                            </div>

                            <!-- 3ro de Bachillerato -->
                            <div class="accordion-container">
                                <button class="accordion-button" onclick="toggleGradeAccordion('3roContable')">3ro de Bachillerato</button>
                                <div id="accordion-3roContable" class="accordion-content">
                                    <button class="accordion-button" onclick="toggleAccordion('16')">3ro A</button>
                                    <div id="accordion-content16" class="accordion-content">
                                        <img src="<?php echo $row['ImagenHorario16Ba']; ?>" class="horario">
                                    </div>
                                    <button class="accordion-button" onclick="toggleAccordion('17')">3ro B</button>
                                    <div id="accordion-content17" class="accordion-content">
                                        <img src="<?php echo $row['ImagenHorario17Ba']; ?>" class="horario">
                                    </div>
                                    <button class="accordion-button" onclick="toggleAccordion('18')">3ro C</button>
                                    <div id="accordion-content18" class="accordion-content">
                                        <img src="<?php echo $row['ImagenHorario18Ba']; ?>" class="horario">
                                    </div>
                                </div>
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
