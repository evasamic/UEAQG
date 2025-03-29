function sendMessage() {
    const userInput = document.getElementById('userInput').value;
    const chatlog = document.getElementById('chatlog');

    if (userInput.trim() !== "") {
        createUserBubble(userInput);
        document.getElementById('userInput').value = '';
        chatlog.scrollTop = chatlog.scrollHeight;

        // Simulate bot response
        const botMessage = document.createElement('div');
        botMessage.className = 'chat-bubble bot-bubble';
        botMessage.textContent = "Respuesta del bot";
        chatlog.appendChild(botMessage);
        chatlog.scrollTop = chatlog.scrollHeight;
    }
}

function askRector() {
    const chatlog = document.getElementById('chatlog');
    const userMessage = "¿Cómo se llama el rector?";
    createUserBubble(userMessage);

    const botMessage = document.createElement('div');
    botMessage.className = 'chat-bubble bot-bubble';
    botMessage.textContent = 'Msc. Louder Montes Ortiz';
    chatlog.appendChild(botMessage);
    chatlog.scrollTop = chatlog.scrollHeight;
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

function greetUser() {
    const chatlog = document.getElementById('chatlog');
    const botMessage = document.createElement('div');
    botMessage.className = 'chat-bubble bot-bubble';
    botMessage.textContent = '¡Hola! ¿En qué puedo ayudarte hoy?';
    chatlog.appendChild(botMessage);

    const optionMessage = document.createElement('div');
    optionMessage.className = 'chat-bubble bot-bubble';
    optionMessage.innerHTML = '<button onclick="askRector()">¿Cómo se llama el rector?</button>';
    chatlog.appendChild(optionMessage);

    chatlog.scrollTop = chatlog.scrollHeight;
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
