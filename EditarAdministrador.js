document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("formEditarUsuario");

    if (!form) {
        console.error("Formulario no encontrado.");
        return;
    }

    const urlParams = new URLSearchParams(window.location.search);
    const idAdmin = urlParams.get("idAdmin");

    if (!idAdmin) {
        alert("ID de administrador no válido.");
        window.location.href = "CrearNuevoAdministrador.html";
        return;
    }

    // Obtener los datos del administrador para llenar el formulario
    fetch(`EditarAdministrador.php?accion=obtener&idAdmin=${idAdmin}`)
        .then(response => response.json())
        .then(data => {
            if (data.error) {
                alert(data.error);
                window.location.href = "CrearNuevoAdministrador.html";
            } else {
                document.getElementById("id").value = data.idAdmin;
                document.getElementById("cedula").value = data.CedulaAdmin;
                document.getElementById("apellidos").value = data.ApellidosAdmin;
                document.getElementById("nombres").value = data.NombresAdmin;
                document.getElementById("usuario").value = data.UsuarioAdmin;
                document.getElementById("clave").value = data.ContrasenaAdmin;
            }
        })
        .catch(error => console.error("Error al obtener datos del administrador:", error));

    // Eliminar el atributo readonly después de un tiempo para evitar autocompletado
    setTimeout(() => {
        document.getElementById("usuario").removeAttribute("readonly");
        document.getElementById("clave").removeAttribute("readonly");
    }, 500);

    // Manejar la actualización del administrador
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
        fetch("EditarAdministrador.php", {
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
                alert("Administrador actualizado correctamente.");
                window.location.href = "CrearNuevoAdministrador.html";  // Redirige a CrearNuevoAdministrador.html después de la actualización
            } else {
                alert(data.error || "Error al actualizar el administrador.");
            }
        })
        .catch(error => {
            console.error("Error al actualizar administrador:", error);
            alert("Hubo un problema al actualizar el administrador.");
        });
    });

    // Botón de cancelar
    document.getElementById("cancelarBtn").addEventListener("click", function () {
        window.location.href = "CrearNuevoAdministrador.html";  // Redirige a CrearNuevoAdministrador.html
    });

    // Cargar los administradores registrados
    fetch("EditarAdministrador.php?accion=obtener_todos")
        .then(response => response.json())
        .then(data => {
            const tbody = document.querySelector("#tabla-usuarios tbody");

            if (data.error) {
                console.error(data.error);
                return;
            }

            // Limpiar cualquier dato previo en la tabla
            tbody.innerHTML = '';

            // Llenar la tabla con los administradores
            data.forEach(administrador => {
                const tr = document.createElement("tr");

                tr.innerHTML = `
                    <td>${administrador.CedulaAdmin}</td>
                    <td>${administrador.ApellidosAdmin}</td>
                    <td>${administrador.NombresAdmin}</td>
                    <td>${administrador.UsuarioAdmin}</td>
                `;

                tbody.appendChild(tr);
            });
        })
        .catch(error => console.error("Error al cargar los administradores:", error));
});
