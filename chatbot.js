function sendMessage() {
    const userInput = document.getElementById('userInput').value;
    const chatlog = document.getElementById('chatlog');

    if (userInput.trim() !== "") {
        createUserBubble(userInput);
        document.getElementById('userInput').value = '';
        chatlog.scrollTop = chatlog.scrollHeight;

        // Simulate bot response
        greetUser();
    }
}

function greetUser() {
    const chatlog = document.getElementById('chatlog');
    const botMessage = document.createElement('div');
    botMessage.className = 'chat-bubble bot-bubble';
    botMessage.textContent = '¡Hola! ¿Cómo puedo ayudarte? Elige una opción:';
    chatlog.appendChild(botMessage);

    const optionMessage = document.createElement('div');
    optionMessage.className = 'chat-bubble bot-bubble';
    optionMessage.innerHTML = `
        <button onclick="infoInstitucional()">📚 Información Institucional</button>
        <button onclick="serviciosInformativos()">📅 Servicios informativos</button>
        <button onclick="soporteTecnico()">🛠️ Soporte técnico</button>
        <button onclick="funcionesAdministrativas()">📂 Panel de Administración</button>
    `;
    chatlog.appendChild(optionMessage);

    chatlog.scrollTop = chatlog.scrollHeight;
}

function infoInstitucional() {
    createUserBubble("📚 Información Institucional");
    const chatlog = document.getElementById('chatlog');
    const botMessage = document.createElement('div');
    botMessage.className = 'chat-bubble bot-bubble';
    botMessage.innerHTML = `
        <button onclick="mostrarHistoria()">🏛️ Historia de la institución</button>
        <button onclick="mostrarProposito()">🎯 Propósito / Misionero</button>
        <button onclick="mostrarInfoInstitucion()">🗂️ Descriptivo</button>
        <button onclick="askAutoridades()">🗃️ Autoridades</button>
    `;
    chatlog.appendChild(botMessage);
    chatlog.scrollTop = chatlog.scrollHeight;
}

function mostrarHistoria() {
    const chatlog = document.getElementById('chatlog');
    createUserBubble("🏛️ Historia de la institución");

    const botMessage = document.createElement('div');
    botMessage.className = 'chat-bubble bot-bubble';
    botMessage.innerHTML = `
        La 🏛️ Historia de la Unidad Educativa "Alfonso Quiñónez George" se encuentran en:<br>
        <a href="http://localhost/UEAQG/NuestraHistoria.html" target="_blank">Dar clic aquí</a>
    `;
    chatlog.appendChild(botMessage);
    chatlog.scrollTop = chatlog.scrollHeight;
    mostrarOpcionesFinales();
}

function mostrarProposito() {
    const chatlog = document.getElementById('chatlog');
    createUserBubble("🎯 Propósito / Misionero");

    const botMessage = document.createElement('div');
    botMessage.className = 'chat-bubble bot-bubble';
    botMessage.innerHTML = `
        El 🎯 Propósito / Misionero de la Unidad Educativa "Alfonso Quiñónez George" se encuentran en:<br>
        <a href="http://localhost/UEAQG/Proposito.html" target="_blank">Dar clic aquí</a>
    `;
    chatlog.appendChild(botMessage);
    chatlog.scrollTop = chatlog.scrollHeight;
    mostrarOpcionesFinales();
}

function mostrarInfoInstitucion() {
    const chatlog = document.getElementById('chatlog');
    createUserBubble("🗂️ Descriptivo");

    const botMessage = document.createElement('div');
    botMessage.className = 'chat-bubble bot-bubble';
    botMessage.innerHTML = `
        Los datos de la Unidad Educativa "Alfonso Quiñónez George" se encuentran en:<br>
        <a href="http://localhost/UEAQG/Info.php" target="_blank">Dar clic aquí</a>
    `;
    chatlog.appendChild(botMessage);
    chatlog.scrollTop = chatlog.scrollHeight;
    mostrarOpcionesFinales();
}

function askAutoridades() {
    const chatlog = document.getElementById('chatlog');
    const userMessage = "🗃️ Autoridades";
    createUserBubble(userMessage);

    const botMessage = document.createElement('div');
    botMessage.className = 'chat-bubble bot-bubble';
    botMessage.innerHTML = `
        <p>Selecciona una jornada:</p>
        <button onclick="mostrarAutoridades('matutina')">🌅 Jornada Matutina</button>
        <button onclick="mostrarAutoridades('vespertina')">🌇 Jornada Vespertina</button>
    `;
    chatlog.appendChild(botMessage);
    chatlog.scrollTop = chatlog.scrollHeight;
}

function mostrarAutoridades(jornada) {
    const chatlog = document.getElementById('chatlog');

    const userText = jornada === 'matutina' ? '🌅 Jornada Matutina' : '🌇 Jornada Vespertina';
    createUserBubble(userText);

    const botMessage = document.createElement('div');
    botMessage.className = 'chat-bubble bot-bubble';

    if (jornada === 'matutina') {
        botMessage.innerHTML = `
            <b>Rector:</b> <br>✔️Msc. Louder Montes Ortiz<br>
            <b>Vicerrectora:</b> <br>✔️Msc. Verónica Clavijo<br>
            <b>Inspector General:</b> <br>✔️Msc. Héctor Barro<br>
            <b>Sub-Inspector:</b> <br>✔️Lic. Héctor Esmeraldas<br>
        `;
    } else {
        botMessage.innerHTML = `
            <b>Rector:</b> <br>✔️Msc. Louder Montes Ortiz<br>
            <b>Vicerrector:</b> <br>✔️Msc. Ricardo Góngora<br>
            <b>Inspector General:</b> <br>✔️Msc. Héctor Barro<br>
        `;
    }

    chatlog.appendChild(botMessage);
    chatlog.scrollTop = chatlog.scrollHeight;
    mostrarOpcionesFinales();
}

function serviciosInformativos() {
    createUserBubble("📅 Servicios informativos");
    const chatlog = document.getElementById('chatlog');
    const botMessage = document.createElement('div');
    botMessage.className = 'chat-bubble bot-bubble';
    botMessage.innerHTML = `
        <button onclick="askHorarios()">🕒 Horarios de clases</button>
        <button onclick="mostrarFechasFestivas()">🎉 Fechas Festivas</button>
        <button onclick="mostrarNoticias()">📰 Noticias recientes</button>
    `;
    chatlog.appendChild(botMessage);
    chatlog.scrollTop = chatlog.scrollHeight;
}

function askHorarios() {
    const chatlog = document.getElementById('chatlog');
    const userMessage = "Horarios";
    createUserBubble(userMessage);

    const botMessage = document.createElement('div');
    botMessage.className = 'chat-bubble bot-bubble';
    botMessage.innerHTML = `
        <p>Selecciona un nivel educativo:</p>
        <button onclick="mostrarHorario('👶 Inicial')">👶 Inicial</button>
        <button onclick="mostrarHorario('🧒 Preparatoria')">🧒 Preparatoria</button>
        <button onclick="mostrarHorario('📘 Básica Elemental')">📘 Básica Elemental</button>
        <button onclick="mostrarHorario('📗 Básica Media')">📗 Básica Media</button>
    `;
    chatlog.appendChild(botMessage);
    chatlog.scrollTop = chatlog.scrollHeight;
}

function mostrarHorario(nivel) {
    const chatlog = document.getElementById('chatlog');
    createUserBubble(nivel);

    const botMessage = document.createElement('div');
    botMessage.className = 'chat-bubble bot-bubble';

    let enlace = '';
    switch (nivel) {
        case '👶 Inicial':
            enlace = 'http://localhost/UEAQG/Inicial.php';
            break;
        case '🧒 Preparatoria':
            enlace = 'http://localhost/UEAQG/Preparatoria.php';
            break;
        case '📘 Básica Elemental':
            enlace = 'http://localhost/UEAQG/BasicaElemental.php';
            break;
        case '📗 Básica Media':
            enlace = 'http://localhost/UEAQG/BasicaMedia.php';
            break;
        default:
            enlace = '#';
    }

    botMessage.innerHTML = `
        Los horarios para <b>${nivel}</b> se encuentran en:<br>
        <a href="${enlace}" target="_blank">Dar clic en el siguiente enlace</a>
    `;
    chatlog.appendChild(botMessage);
    chatlog.scrollTop = chatlog.scrollHeight;
    mostrarOpcionesFinales();
}

function mostrarFechasFestivas() {
    const chatlog = document.getElementById('chatlog');
    createUserBubble("🎉 Fechas Festivas");

    const botMessage = document.createElement('div');
    botMessage.className = 'chat-bubble bot-bubble';
    botMessage.innerHTML = `
        <b>1. 🎆 Año Nuevo:</b> 01 de enero <br>
        <b>2. 🎭 Carnaval:</b> 03 y 04 de marzo <br>
        <b>3. ✝️ Viernes Santo:</b> 18 de abril <br>
        <b>4. 🛠️ Día del Trabajo:</b> 01 de mayo <br>
        <b>5. ⚔️ Batalla del Pichincha:</b> 24 de mayo <br>
        <b>6. 📜 Primer Grito de Independencia:</b> 10 de agosto <br>
        <b>7. 🎇 Independencia de Guayaquil:</b> 09 de octubre <br>
        <b>8. 🕯️ Día de Difuntos:</b> 02 de noviembre <br>
        <b>9. 🏛️ Independencia de Cuenca:</b> 03 de noviembre <br>
        <b>10. 🎄 Navidad:</b> 25 de diciembre
    `;
    chatlog.appendChild(botMessage);
    chatlog.scrollTop = chatlog.scrollHeight;
    mostrarOpcionesFinales();
}

function mostrarNoticias() {
    const chatlog = document.getElementById('chatlog');
    createUserBubble("📰 Noticias recientes");

    const botMessage = document.createElement('div');
    botMessage.className = 'chat-bubble bot-bubble';
    botMessage.innerHTML = `
        Las noticias recientes sobre la Unidad Educativa "Alfonso Quiñónez George" las puede encontrar en:<br>
        <a href="http://localhost/UEAQG/index.php" target="_blank">Dar clic aquí</a> En la sección "Noticias"
    `;
    chatlog.appendChild(botMessage);
    chatlog.scrollTop = chatlog.scrollHeight;
    mostrarOpcionesFinales();
}


function soporteTecnico() {
    createUserBubble("🛠️ Soporte técnico");
    const chatlog = document.getElementById('chatlog');
    const botMessage = document.createElement('div');
    botMessage.className = 'chat-bubble bot-bubble';
    botMessage.innerHTML = `
        <button onclick="askProblemasInicioSesion()">🔒 Usuario con problema de inicio de sesión</button>
    `;
    chatlog.appendChild(botMessage);
    chatlog.scrollTop = chatlog.scrollHeight;
}

function askProblemasInicioSesion() {
    const chatlog = document.getElementById('chatlog');
    createUserBubble("🔒 Usuario con problema de inicio de sesión");

    const correo = "ueaqg.tic@gmail.com";
    const asunto = encodeURIComponent("RESTABLECIMIENTO DE CONTRASEÑA");
    const cuerpo = encodeURIComponent(`Reciba un cordial saludo.

    Mi nombre es [Tu Nombre Completo], con cédula de identidad Nº [Tu Cédula], y me dirijo a usted para solicitar su amable colaboración con el restablecimiento de mis datos de acceso.

    
    Agradezco de antemano su atención y apoyo. Quedo atento(a) a cualquier información adicional que requiera para procesar la solicitud.
    Saludos cordiales,`);

    const botMessage = document.createElement('div');
    botMessage.className = 'chat-bubble bot-bubble';
    botMessage.innerHTML = `
        Póngase en contacto con su <b>Administrador</b>.<br><br>
        <a href="mailto:${correo}?subject=${asunto}&body=${cuerpo}">📧 Enviar correo para restablecer contraseña</a>
    `;

    chatlog.appendChild(botMessage);
    chatlog.scrollTop = chatlog.scrollHeight;
    mostrarOpcionesFinales();
}


function funcionesAdministrativas() {
    createUserBubble("📂 Panel de Administración");
    const chatlog = document.getElementById('chatlog');
    const botMessage = document.createElement('div');
    botMessage.className = 'chat-bubble bot-bubble';
    botMessage.innerHTML = `
        <button onclick="askAccederModuloCMS()">🧑‍💼 Acceder al CMS</button>
    `;
    chatlog.appendChild(botMessage);
    chatlog.scrollTop = chatlog.scrollHeight;
}

function askAccederModuloCMS() {
    const chatlog = document.getElementById('chatlog');
    createUserBubble("🧑‍💼 Acceder al CMS");

    const botMessage = document.createElement('div');
    botMessage.className = 'chat-bubble bot-bubble';
    botMessage.innerHTML = `
        Para acceder al módulo CMS:<br>
        <a href="http://localhost/UEAQG/Recursos.html" target="_blank">Dar clic aquí</a>
    `;
    chatlog.appendChild(botMessage);
    chatlog.scrollTop = chatlog.scrollHeight;
    mostrarOpcionesFinales();
}



function toggleChat() {
    const chatbox = document.getElementById('chatbox');
    chatbox.classList.toggle('hidden');
    if (!chatbox.classList.contains('hidden')) {
        chatbox.style.display = 'flex';
        greetUser();
    } else {
        chatbox.style.display = 'none';
        clearChat();
    }
}

function clearChat() {
    const chatlog = document.getElementById('chatlog');
    chatlog.innerHTML = '';
}

function createUserBubble(message) {
    const chatlog = document.getElementById('chatlog');
    const userMessage = document.createElement('div');
    userMessage.className = 'chat-bubble user-bubble';
    userMessage.textContent = message;
    chatlog.appendChild(userMessage);
    chatlog.scrollTop = chatlog.scrollHeight;
}

function mostrarOpcionesFinales() {
    const chatlog = document.getElementById('chatlog');
    const finalOptions = document.createElement('div');
    finalOptions.className = 'chat-bubble bot-bubble';
    finalOptions.innerHTML = `
        <p>¿Deseas hacer algo más?</p>
        <button onclick="reiniciarChat()">▶️ Continuar</button>
        <button onclick="cerrarChat()">❌ Cerrar</button>
    `;
    chatlog.appendChild(finalOptions);
    chatlog.scrollTop = chatlog.scrollHeight;
}

function reiniciarChat() {
    createUserBubble("▶️ Continuar");
    greetUser();
}

function cerrarChat() {
    createUserBubble("❌ Cerrar");
    const chatlog = document.getElementById('chatlog');
    const despedida = document.createElement('div');
    despedida.className = 'chat-bubble bot-bubble';
    despedida.textContent = "Gracias por utilizar el asistente de la Unidad Educativa 'Alfonso Quiñónez George'. ¡Hasta pronto!";
    chatlog.appendChild(despedida);
    chatlog.scrollTop = chatlog.scrollHeight;
}
