document.addEventListener("DOMContentLoaded", function () {
    const loginButton = document.querySelector("button");
    if (loginButton) {
        loginButton.addEventListener("click", login);
    }
});

function login() {
    let username = document.getElementById("username").value.trim();
    let password = document.getElementById("password").value.trim();
    let loginMessage = document.getElementById("login-message");

    // Verificar que los campos no estén vacíos
    if (username === "" || password === "") {
        loginMessage.textContent = "Por favor, completa todos los campos.";
        loginMessage.style.color = "red";
        return;
    }

    // Enviar datos al servidor
    fetch("login.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify({ username: username, password: password })
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === "success") {
            // Redirigir según el rol
            if (data.role === "admin") {
                window.location.href = "Administrador.html"; // Redirige a la página de administrador
            } else if (data.role === "user") {
                window.location.href = "Usuario.html"; // Redirige a la página de usuario
            }
        } else {
            loginMessage.textContent = data.message; // Muestra el mensaje de error
            loginMessage.style.color = "red";
        }
    })
    .catch(error => {
        loginMessage.textContent = "Error en el servidor.";
        loginMessage.style.color = "red";
        console.error("Error:", error);
    });
}
