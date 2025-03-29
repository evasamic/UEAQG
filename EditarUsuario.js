document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("formEditarUsuario");

    if (!form) {
        console.error("Formulario no encontrado.");
        return;
    }

    const urlParams = new URLSearchParams(window.location.search);
    const idUsu = urlParams.get("idUsu");

    if (!idUsu) {
        alert("ID de usuario no válido.");
        window.location.href = "CrearNuevoUsuario.html";
        return;
    }

    // Obtener los datos del usuario para llenar el formulario
    fetch(`EditarUsuario.php?accion=obtener&idUsu=${idUsu}`)
        .then(response => response.json())
        .then(data => {
            if (data.error) {
                alert(data.error);
                window.location.href = "CrearNuevoUsuario.html";
            } else {
                document.getElementById("id").value = data.idUsu;
                document.getElementById("cedula").value = data.CedulaUsu;
                document.getElementById("apellidos").value = data.ApellidosUsu;
                document.getElementById("nombres").value = data.NombresUsu;
                document.getElementById("usuario").value = data.UsuarioUsu;
                document.getElementById("clave").value = data.ContrasenaUsu;
            }
        })
        .catch(error => console.error("Error al obtener datos del usuario:", error));

    // Eliminar el atributo readonly después de un tiempo para evitar autocompletado
    setTimeout(() => {
        document.getElementById("usuario").removeAttribute("readonly");
        document.getElementById("clave").removeAttribute("readonly");
    }, 500);

    // Manejar la actualización del usuario
    form.addEventListener("submit", function (event) {
        event.preventDefault(); // Evitar el comportamiento predeterminado de enviar el formulario

        const formData = new FormData(form);

        // Asegurarse de que el id sea un número entero
        formData.append("id", parseInt(formData.get("id")));

        // Añadir la acción 'actualizar' al FormData
        formData.append("accion", "actualizar");

        // Log para comprobar los datos que se están enviando
        console.log("Datos que se enviarán al servidor:");
        for (let [key, value] of formData.entries()) {
            console.log(`${key}: ${value}`);
        }

        // Enviar los datos al servidor
        fetch("EditarUsuario.php", {
            method: "POST",  // Asegúrate de usar POST
            body: formData,  // Pasar los datos del formulario
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Error en la respuesta del servidor');
            }
            return response.json();  // Cambiar a 'json' para ver la respuesta como JSON
        })
        .then(data => {
            console.log("Respuesta del servidor:", data);  // Ver la respuesta en la consola
            if (data.success) {
                alert("Usuario actualizado correctamente.");
                window.location.href = "CrearNuevoUsuario.html";  // Redirige a CrearNuevoUsuario.html después de la actualización
            } else {
                alert(data.error || "Error al actualizar el usuario.");
            }
        })
        .catch(error => {
            console.error("Error al actualizar usuario:", error);
            alert("Hubo un problema al actualizar el usuario.");
        });
    });

    // Botón de cancelar
    document.getElementById("cancelarBtn").addEventListener("click", function () {
        window.location.href = "CrearNuevoUsuario.html";  // Redirige a CrearNuevoUsuario.html
    });

    // Cargar los usuarios registrados
    fetch("EditarUsuario.php?accion=obtener_todos")
        .then(response => response.json())
        .then(data => {
            const tbody = document.querySelector("#tabla-usuarios tbody");

            if (data.error) {
                console.error(data.error);
                return;
            }

            // Limpiar cualquier dato previo en la tabla
            tbody.innerHTML = '';

            // Llenar la tabla con los usuarios
            data.forEach(usuario => {
                const tr = document.createElement("tr");

                tr.innerHTML = `
                    <td>${usuario.CedulaUsu}</td>
                    <td>${usuario.ApellidosUsu}</td>
                    <td>${usuario.NombresUsu}</td>
                    <td>${usuario.UsuarioUsu}</td>
                `;

                tbody.appendChild(tr);
            });
        })
        .catch(error => console.error("Error al cargar los usuarios:", error));
});
