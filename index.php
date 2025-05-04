<?php include('Noticias.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unidad Educativa Alfonso Quiñónez George</title>
    <link rel="icon" type="image/png" href="img/Logo-AQG.png">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="carousel.css">
    <link rel="stylesheet" href="chatbot.css">
    <link rel="stylesheet" href="Noticias.css">
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
            <li><a href="index.php" class="active">Inicio</a></li>
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
    
    <!-- Carrusel de imágenes -->
    <div class="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/carrusel1.jpg" alt="Imagen 1" width="1366" height="768">
            </div>
            <div class="carousel-item">
                <img src="img/carrusel2.jpg" alt="Imagen 2" width="1366" height="768">
            </div>
            <div class="carousel-item">
                <img src="img/carrusel3.jpg" alt="Imagen 3" width="1366" height="768">
            </div>
        </div>
        <a class="carousel-control prev" onclick="prevSlide()">❮</a>
        <a class="carousel-control next" onclick="nextSlide()">❯</a>
    </div>

    <main>
        <div class="noticias">
            <h2>NOTICIAS</h2>
        </div>
        <div class="title-line"></div> <!-- Línea verde debajo del título -->
        
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
        
        <!-- Mapa de ubicación -->
        <div class="map-container">
            <h2>Ubicación</h2>
            <div class="title-line"></div> <!-- Línea verde debajo del título -->
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.3032471465976!2d-79.68732502588206!3d0.9206619990704416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fd4bf041da1614b%3A0xc5389a4fe4305fed!2sUNIDAD%20EDUCATIVA%20ALFONSO%20QUI%C3%91%C3%93NEZ%20GEORGE!5e0!3m2!1ses!2sec!4v1737265929965!5m2!1ses!2sec" 
                width="100%" 
                height="600" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
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
    <script src="carousel.js"></script>
    <script src="btnQuienesSomos.js"></script>
</body>
</html>
